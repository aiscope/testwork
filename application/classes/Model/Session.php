<?php defined('SYSPATH') or die('No Direct Script Access');

class Model_Session extends Model
{
	public static function factory($name, $db = NULL)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class($db);
	}

	public function get_freeplaces($session_id)
	{
		if (empty($session_id)) {
			return array('err' => TRUE, "error_message" => 'Параметр <id сессии> не задан!');
		}

		$query = DB::query(Database::SELECT,
		"SELECT session.session_id as session, session.empty_places as empty_places
		 FROM session
		 WHERE session.session_id = :session_id");

		$query->parameters(
			array(
				':session_id' => $session_id,
			));
		$result = $query->execute();

		return $result;
	}


}