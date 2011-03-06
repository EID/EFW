<?php

class Hello extends Controller {
    public function index() {
		$this->view->display('hello');
	}
}

?>					