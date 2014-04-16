<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller {

	public function action_index()
	{
		$this->response->body('Cinema API v.0.1');
	}

} // End Welcome
