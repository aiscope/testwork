<?php

class Controller_Tickets extends Controller {

	public function action_buy()
	{
		if ($this->request->method() == "POST")
		{
			$postdata = $this->request->post();
			$session_id = $postdata['session_id'];
			$places_str = $postdata['places_str'];
			$places = explode(",", $places_str);

			$tickets_model = Model::factory('Tickets');
			$data = $tickets_model->buy_tickets($session_id, $places);

			$common_model = Model::factory('Common');
			$common_model->get_output($data);
		}
	}

	public function action_reject()
	{
		if ($this->request->method() == "POST")
		{
			$postdata = $this->request->post();
			$reject_key = $postdata['key'];

			$tickets_model = Model::factory('Tickets');
			$data = $tickets_model->reject_tickets($reject_key);

			$common_model = Model::factory('Common');
			$common_model->get_output($data);
		}
	}
}