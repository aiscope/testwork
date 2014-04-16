<?php defined('SYSPATH') or die('No Direct Script Access');

class Model_Film extends Model
{
	public static function factory($name, $db = NULL)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class($db);
	}


	/**
	 * @param string $film_name
	 * @return array|object
	 */
	public function get_cinema_hall($film_name)
	{
		if (empty($film_name)) {
			return array('err' => TRUE, "error_message" => 'Параметр <имя фильма> не задан!');
		}

		$query = DB::query(Database::SELECT,
		"SELECT cinema.name as cinema_name, hall.name as hall_name
		 FROM hall
		 INNER JOIN session ON session.hall_id = hall.hall_id
		 INNER JOIN movie ON session.movie_id = movie.movie_id
		 INNER JOIN cinema ON cinema.cinema_id = hall.cinema_id
		 WHERE movie.name = :film_name");

		$query->parameters(
			array(
				':film_name' => $film_name,
			));
		$result = $query->execute();

		return $result;
	}
}