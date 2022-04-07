<?php
/**
 * 
 */
class GetMethod
{
	public $buyBots;

	function __construct($buyBots)
	{
		$this->buyBots = $buyBots;
	}

	function byKey($key)
	{
		if(isset($_GET[$key])) {
			return $_GET[$key];
		} else {
			return null;
		}
	}
}
?>