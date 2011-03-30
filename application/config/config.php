<?php

	// App config

	$config['app']['title']				= 'EyoFramework';
	$config['app']['version']			= '0.0.8';
	$config['app']['base']				= 'http://localhost/efw/';
	$config['app']['authors']			= Array('Nestiut', 'CMat');
	$config['app']['desc']				= 'Description';

	// Lang config

	$config['lang']['default']				= 'en';

	// Display config

	$config['display']['title']['prefix'] 	= 'EFW - ';
	$config['display']['charset'] 			= 'utf-8';

	// Dispatch config

	$config['dispatch']['auto'] 		= true;

	// Default config

	$config['default']['controller'] 	= 'main';
	$config['default']['method'] 		= 'index';
	$config['default']['error_method'] 	= 'error';

	// Helpers config
	
	$config['helpers']['default'] 		= array('tools', 'url', 'html', 'form', 'security');

	// Database config (MySQL)

	$config['sql']['host'] 				= array('distanthost',							'localhost');
	$config['sql']['user'] 				= array('user',									'localuser');
	$config['sql']['pass'] 				= array('pass',									'localpass');
	$config['sql']['db'] 				= array('dbname',								'localdb');
	
	$config['sql']['locate'] 			= 			0; //								1;
	
	$config['sql']['autoconnect'] 		= false;
	
?>
