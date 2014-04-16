<?php

class Controller_Session extends Controller {

	public function action_freeplaces()
	{
		$session_id = $this->request->param('session_id');

		$session_model = Model::factory('Session');
		$data = $session_model->get_freeplaces($session_id);

		$common_model = Model::factory('Common');
		$common_model->get_output($data);
	}
} 