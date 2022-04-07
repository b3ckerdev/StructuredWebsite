<?php
/**
 * 
 */
class Session
{
	public $buyBots;

	function __construct($buyBots)
	{
		$this->buyBots = $buyBots;
	}

	function start()
	{
		session_start();
	}
}
?>