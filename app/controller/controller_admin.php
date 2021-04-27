<?php

class Controller_Admin extends Controller {

	function __construct() {
		$this->model = new Model_Admin();
		$this->view = new View();
	}

	function action_index() {	
		$data = $this->model->get_data();
		$this->view->generate('admin_view.php', 'template_view.php', $data);
	}

	function action_delete() {
		$data = $this->model->delete_news();
	}

	function action_create() {
		$data = $this->model->create_news();
	}

	function action_edit() {
		$data = $this->model->edit_news();
	}
}