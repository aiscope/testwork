<?php

class Controller_Tickets extends Controller {

	public function action_buy()
	{
		$session_id = $this->request->param('session_id');
		$places_str = $this->request->param('places_str');
		$places = explode(",", $places_str);

		$tickets_model = Model::factory('Tickets');
		$data = $tickets_model->buy_tickets($session_id, $places);

		$common_model = Model::factory('Common');
		$common_model->get_output($data);
	}

	public function action_reject()
	{
		$reject_key = $this->request->param('key');

		$tickets_model = Model::factory('Tickets');
		$data = $tickets_model->reject_tickets($reject_key);

		$common_model = Model::factory('Common');
		$common_model->get_output($data);
	}
}