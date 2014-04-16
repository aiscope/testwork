<?php defined('SYSPATH') or die('No Direct Script Access');

class Model_Tickets extends Model
{
	public static function factory($name, $db = NULL)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class($db);
	}

	/**
	 * @param int $session_id
	 * @param array $places
	 * @return array
	 */
	public function buy_tickets($session_id, $places)
	{
		if (empty($session_id)) {
			return array('err' => TRUE, 'error_message' => 'Не задан номер сессии!');
		}

		if (empty($places) || ! is_array($places)) {
			return array('err' => TRUE, 'error_message' => 'Не заданы номера мест для покупки!');
		}

		// Проверим, свободны ли покупаемые места
		$query = DB::query(Database::SELECT,
		"SELECT empty_places as empty_places, places as places FROM session WHERE session_id = :session_id");

		$query->parameters(
			array(
				':session_id' => $session_id,
			));
		$result = $query->execute();

		$freeplaces = $result[0]['empty_places'];
		$freeplaces = explode(",", $freeplaces);

		$its_free = array_intersect($freeplaces, $places);

		$common_model = Model::factory('Common');
		if ( ! $common_model->array_equal($its_free, $places)) {
			return array('err' => TRUE, 'error_message' => 'Покупаемые места уже заняты!');
		}

		// Функционал покупки мест
		$busy_places = $result[0]['places'];
		$busy_places = explode(",", $busy_places);
		$busy_places = array_merge($busy_places, $places);

		$freeplaces = array_diff($freeplaces, $places);

		$query = DB::query(Database::UPDATE,
		"UPDATE session SET places = :busy_places, empty_places = :freeplaces
		 WHERE session_id = :session_id");

		$bought_places_str = implode(",", $places);
		$freeplaces_str = implode(",", $freeplaces);

		$query->parameters(
			array(
				":busy_places" => implode(",", $busy_places),
				":freeplaces" => $freeplaces_str,
				":session_id" => $session_id
		));

		$query->execute();

		// Сгенерируем уникальный код покупки

		$uniq_key = crc32($session_id.$freeplaces_str.time());

		$query = DB::query(Database::INSERT,
		"INSERT INTO buy (session_id, places, rejected, uniq_key)
		VALUES (:session_id, :places, :rejected, :uniq_key)");

		$query->parameters(
			array(
				':session_id' => $session_id,
				':places' => $bought_places_str,
				':rejected' => 0,
				':uniq_key' => $uniq_key
			)
		);

		$query->execute();

		return array('err' => FALSE, 'uniq_key' => $uniq_key);

	}

	/**
	 * @param int $key
	 * @return array
	 */
	public function reject_tickets($key)
	{
		// Получим ранее купленные места и ид сеанса
		$query = DB::query(Database::SELECT,
		"SELECT buy.session_id as session_id, buy.places as places
		FROM buy
		WHERE uniq_key = :uniq_key");

		$query->parameters(
			array(
				':uniq_key' => $key
			)
		);

		$data = $query->execute();
		$session_id = $data[0]['session_id'];
		$places = explode(",", $data[0]['places']);

		// Перенесем ранее купленные места в свободные
		$query = DB::query(Database::SELECT,
			"SELECT empty_places as empty_places, places as places FROM session WHERE session_id = :session_id");

		$query->parameters(
			array(
				':session_id' => $session_id,
			));
		$result = $query->execute();

		$freeplaces = $result[0]['empty_places'];
		$freeplaces = explode(",", $freeplaces);
		$busy_places = $result[0]['places'];
		$busy_places = explode(",", $busy_places);

		$busy_places = array_diff($busy_places, $places);
		$empty_places = array_merge($freeplaces, $places);

		// Перенесем ранее купленные места в свободные
		$query = DB::query(Database::UPDATE,
			"UPDATE session SET places = :busy_places, empty_places = :freeplaces
			WHERE session_id = :session_id");

		$query->parameters(
			array(
				':session_id' => $session_id,
				':busy_places' => implode(",", $busy_places),
				':freeplaces' => implode(",", $empty_places)
			));

		$query->execute();

		// Удалим покупку
		$query = DB::query(Database::UPDATE,
		"UPDATE buy SET rejected = 1 WHERE uniq_key = :uniq_key");

		$query->parameters(
			array(
				':uniq_key' => $key
			));

		$query->execute();

		return array('err' => FALSE, 'status' => 'Deleted');
	}
}