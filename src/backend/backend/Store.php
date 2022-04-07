<?php
class Store
{
	public $buyBots;
	public $page;

	function __construct($buyBots)
	{
		$this->buyBots = $buyBots;

	}

	function initialize()
	{
		$this->page = $this->buyBots->getmethod->byKey("page");

		if($this->page != null) {
			$this->showPages($this->page);
		} else {
			$this->responseAccessDenied();
		}

	}

	function showPages($page)
	{
		if($page == "homepage") {
			include("./src/backend/public/homepage.php");
		} else {
			$this->responseNotFound();
		}
	}

	function pageTitle($page)
	{
		if($page == "homepage") {
			return "Home";
		} else {
			return "Page not found";
		}
	}

	function responseNotFound()
	{
		http_response_code(404);
		include("./src/backend/public/errorpage.php");
		exit();
	}

	function responseAccessDenied()
	{
		http_response_code(403);
		exit();
	}
}
?>