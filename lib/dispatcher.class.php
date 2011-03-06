<?php

	class Dispatcher {

		// Default route values
		private $default;
		
		// Is cached ?
		public 	$cache = false,
		// Route to current method
				$route = null,
		// Route to the method to be cached
				$cache_route = null,
		// Configuration array copy
				$config;
	
	
		public function __construct($auto = null) {
			global $config;
			$this->config = $config;
		
			$this->default = array(
				controller 		=> $config['default']['controller'], 
				method 			=> $config['default']['method'],
				error_method 	=> $config['default']['error_method'],
			);
			
			if($auto === true || ($auto === null && $config['dispatch']['auto']))
				$this->dispatch();
		
		
		}
		
		
		public function dispatch() {
		
			$loader = new Loader();
			
			// Compute route
			
			$protocol = !empty($_SERVER['HTTPS']) ? "https://" : "http://";
			$serverName = $_SERVER['SERVER_NAME'];
			$requestURI = $_SERVER['REQUEST_URI'];
			$requestURL = $protocol . $serverName . $requestURI;
			
			$url = array_values( array_diff( explode('/', $requestURL), explode('/', $this->config['app']['base'])) );
			
			$controller = !empty( $url[0] ) ? $url[0] : $this->default['controller'];
			$method		= !empty( $url[1] ) ? $url[1] : $this->default['method'];
			$arg		= !empty( $url[2] ) ? $url[2] : NULL;

			
			// Load route
			if ($loader->load($controller)) {
				$control = new $controller;
				$control->$method($arg);
			} else {
				$controller = $this->default['controller'];
				$method		= $this->default['error_method'];
				$loader->load($controller);
				$control 	= new $controller;
				$control->$method($arg);
			}
			
			// Bootstrap datas			
			$this->route = array(
				'controller' 	=> $controller,
				'method' 		=> $method
			);
			$this->cache_route = $control->cache_data;
			
			$this->cache = $control->cache;
		}

	}
?>
