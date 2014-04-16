<?php defined('SYSPATH') or die('No Direct Script Access');

class Model_Common extends Model
{
	public static function factory($name, $db = NULL)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class($db);
	}

	public function get_output($arr)
	{
		if (is_array($arr) && $arr['err']) {
			die($arr['error_message']);
		}

		$result = array();
		foreach ($arr as $elm) {
			$result[] = $elm;
		}

		echo json_encode($result);
	}

	public function array_equal($a, $b)
	{
		return (is_array($a) && is_array($b) && array_diff($a, $b) === array_diff($b, $a));
	}

}