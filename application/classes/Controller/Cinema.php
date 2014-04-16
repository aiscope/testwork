<?php

class Controller_Cinema extends Controller {

	public function action_schedule()
	{
		$cinema_name = $this->request->param('cinema_name');
		$hall = $this->request->param('hall');
		$cinema_model = Model::factory('Cinema');
		$data = $cinema_model->get_schedule($cinema_name, $hall);

		$common_model = Model::factory('Common');
		$common_model->get_output($data);
	}
}