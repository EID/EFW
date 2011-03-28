<?php

	class Main extends Controller {
					
		public function __construct() {
			parent::__construct();
		}
		
		public function index() {
			$data['title'] = 'Home';
			$this->view->display('index', $data);
		}
	
		public function error($msg = '') {
			$data['title'] = 'Error';
			$data['message'] = ( $msg != '' ? $msg : 'Oops! This page doesn\'t exist!' );
			$this->view->display('errors/error', $data);
		}
	}

?>
