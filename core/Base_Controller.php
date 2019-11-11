<?php
class Base_Controller extends Core_Controller {
	
	function __construct() {
		parent::__construct();
	}

	function __destruct() {
		ob_start();
		$this->view->show();
		$content = ob_get_contents();
		ob_end_clean();

		$this->layout->load([
			'content' => $content
		]);
		
	}

}