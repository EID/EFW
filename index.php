<?php
	session_start();
	
	define(DS, DIRECTORY_SEPARATOR);
	define(ROOT, dirname(__FILE__));
	define(LIB_PATH, ROOT . DS . 'lib');
	define(APP_PATH, ROOT . DS . 'application');

	include APP_PATH . DS . 'config' . DS . 'config.php';
	
	$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
		require_once(LIB_PATH . DS . 'bootstrap.php');
	}
	
?>