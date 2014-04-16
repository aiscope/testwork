<?php defined('SYSPATH') or die('No Direct Script Access');

class Model_Cinema extends Model
{
	public static function factory($name, $db = NULL)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class($db);
	}

	/**
	 * @param string $cinema_name
	 * @param string $hall
	 * @return array|object
	 */
	public function get_schedule($cinema_name, $hall)
	{
		if ( ! empty($cinema_name)) {
			$where_expr1 = 'cinema.name = :cinema_name';
		}
		else {
			return array('err' => TRUE, 'error_message' => "Параметр <название кинотеатра> не задан!");
		}

		if ( ! empty($hall)) {
			$where_expr2 = ' AND hall.name = :hall_name';
		} else {
			$where_expr2 = '';
		}

		$query = DB::query(Database::SELECT,
		"SELECT session.session_id, session.start_time, session.end_time, session.empty_places,
			movie.name, hall.name, cinema.name
		 FROM session
		 INNER JOIN movie ON movie.movie_id = session.movie_id
		 INNER JOIN hall ON hall.hall_id = session.hall_id
		 INNER JOIN cinema ON cinema.cinema_id = hall.cinema_id
		 WHERE $where_expr1 $where_expr2");

		$query->parameters(
			array(
				':cinema_name' => $cinema_name,
				':hall_name' => $hall
			));
		$result = $query->execute();

		return $result;
	}


}