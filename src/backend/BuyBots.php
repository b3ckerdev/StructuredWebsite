<?php
class BuyBots {
	public $store;
	public $session;
	public $getmethod;

	function __construct()
	{
		$this->store = new Store($this);
		$this->session = new Session($this);
		$this->getmethod = new GetMethod($this);

		$this->store->initialize();
	}
}
?>