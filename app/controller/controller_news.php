<?php

class Controller_News extends Controller {

	function __construct() {
		$this->news = new Model_News();
		$this->view = new View();
	}

	function action_index() {	
		$data = $this->news->get_data();
		$this->view->generate('news_view.php', 'template_view.php', $data);
	}
}