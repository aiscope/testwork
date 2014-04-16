<?php

class Controller_Film extends Controller {

	public function action_film()
	{
		$film_name = $this->request->param('film_name');

		$film_model = Model::factory('Film');
		$data = $film_model->get_cinema_hall($film_name);

		$common_model = Model::factory('Common');
		$common_model->get_output($data);
	}
} 