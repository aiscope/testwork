<?php

class Controller_Service extends Controller {

	public function action_index()
	{
		// Сгенерируем названия кинотеатров
		$cinema_names = array('им. Горького', 'Киномакс', 'Родина', 'Октябрь', 'IMAX');
		foreach ($cinema_names as $name)
		{
			$query = DB::query(Database::INSERT,
				"INSERT INTO cinema (name) VALUES(:cinema_name)");

			$query->parameters(
				array(
					':cinema_name' => $name,
				));

			$query->execute();
		}

		$query = DB::query(Database::SELECT,
			"SELECT MIN(cinema_id) as cmin, MAX(cinema_id) as cmax FROM cinema");

		$cinema_ids = $query->execute();
		$min_cinema_id = $cinema_ids[0]['cmin'];
		$max_cinema_id = $cinema_ids[0]['cmax'];

		// Сгенерируем названия залов кинотеатров
		$hall_names  =array('1', '2', '3', '4');

		for ($i = $min_cinema_id; $i <= $max_cinema_id; $i++)
		{
			foreach ($hall_names as $name)
			{
				$query = DB::query(Database::INSERT,
					"INSERT
					 INTO hall (name, cinema_id, places_number)
					 VALUES(:hall_name, :cinema_id, :places_number)");

				$query->parameters(
					array(
						':hall_name' => $name,
						':cinema_id' => $i,
						':places_number' => rand(30, 60)
					));

				$query->execute();
			}
		}

		// Сгененируем названия фильмов
		$movie_names = array('Терминатор', 'Шрек', 'Назад в будущее', 'Титаник 3D', 'День Сурка', 'Дублер', 'Сияние');
		foreach ($movie_names as $name)
		{
			$query = DB::query(Database::INSERT,
				"INSERT
				 INTO movie (name)
				 VALUES(:movie_name)");

			$query->parameters(
				array(
					':movie_name' => $name,
				));

			$query->execute();
		}

		// Привяжем фильмы к кинозалам и сеансам
		$query = DB::query(Database::SELECT,
			"SELECT MIN(hall_id) as hmin, MAX(hall_id) as hmax, places_number FROM hall");

		$hall_ids = $query->execute();
		$min_hall_id = $hall_ids[0]['hmin'];
		$max_hall_id = $hall_ids[0]['hmax'];
		$max_place_number = $hall_ids[0]['places_number'];

		$query = DB::query(Database::SELECT,
			"SELECT MIN(movie_id) as mmin, MAX(movie_id) as mmax FROM movie");

		$movie_ids = $query->execute();
		$min_movie_id = (int) $movie_ids[0]['mmin'];
		$max_movie_id = (int) $movie_ids[0]['mmax'];

		for ($i = $min_hall_id; $i <= $max_hall_id; $i++)
		{
			$current_movie_id = rand($min_movie_id, $max_movie_id);

			$query = DB::query(Database::INSERT,
				"INSERT INTO session
				 (start_time, end_time, movie_id, hall_id, places, empty_places)
				 VALUES (:start_time, :end_time, :movie_id, :hall_id, :places, :empty_places)");

			$start_time = rand(0, 23);
			$current_day = rand(15, 25);

			// Сгенерируем уже занятые и пустые места
			$places = array();
			$empty_places = array();
			for ($k = 1; $k <= rand(1, $max_place_number); $k++)
			{
				$place_number = rand(1, $max_place_number);
				if ( ! in_array($place_number, $places)) {
					$places[] = $place_number;
				}
			}

			for ($k = 1; $k <= $max_place_number; $k++)
			{
				if ( ! in_array($k, $places)) {
					$empty_places[] = $k;
				}
			}

			$places = implode(",", $places);
			$empty_places = implode(",", $empty_places);

			$query->parameters(
				array(
					':start_time' => date('Y-m-d H:i:s', mktime($start_time, 0, 0, date('m'), $current_day, date('Y'))),
					':end_time' => date('Y-m-d H:i:s', mktime($start_time+2, 0, 0, date('m'), $current_day, date('Y'))),
					':movie_id' => $current_movie_id,
					':hall_id' => $i,
					':places' => $places,
					':empty_places' => $empty_places,
					':reject' => 0
				));

			$query->execute();
		}

		echo "DB generation complete!";
	}
} 