<?php

	class Controller extends Loader {

	
		// Global instances of the View, Model, Helper and Lang classes
		public $view, $model, $helper, $lang,
		
		// Database
				$db,
		
		// Copy of config
				$config,
				
		// Is cached ?
				$cache = false,
		// Route to cache
				$cache_data = null;
		
		
		public function __construct() {
			global $config;
			$this->config = $config;
			
			// Provide database access
			if($config['sql']['autoconnect'])
				$this->connect();
			
			// Reseting lang var before loading
			
			$_SESSION['lang'] = null;
			
			// Init some global classes for controllers
			$this->lang		= new Lang('', $this->config)
			$this->view 	= new View($this->config);
			$this->model 	= new Model($this->db);
			$this->helper	= new Helper();
		}
		
		
		// Order the bootstrap to cache the output
		public function cache() {
			$this->cache = true;
		}
		
		
		// Connect to database
		public function connect() {
			$this->db = new PDO('mysql:host=' .$this->config['sql']['host'][$this->config['sql']['locate']]. ';dbname=' .$this->config['sql']['db'][$this->config['sql']['locate']].';charset=UTF-8',
				$this->config['sql']['user'][$this->config['sql']['locate']],
				$this->config['sql']['pass'][$this->config['sql']['locate']]
			);
			$this->db->exec('SET NAMES "utf8"');
		}
		
		
		// Do cache exists ?
		public function cached($params = null) {
			return file_exists(APP_PATH . DS . 'cache' . DS . $params['controller'] . '.' . $params['method'] . '.cache');
		}
		
		
		// Empty cache 
		public function clear_cache($params = null, $refresh = false) {
			$this->cache_data = $params;
			
			// Eventualy clear cache and rewrite it
			$this->cache = $refresh ? 'clearn' : 'clear';
		}
		
		
		// This function is absolutely useless
		public function load($object) {
			return  ucfirst($object)==	'View'		? $this->view 	:
					ucfirst($object)==	'Model' 	? $this->model 	: 
					ucfirst($object)==	'Helper' 	? $this->helper : 
					ucfirst($object)==  'Lang'		? $this->lang	:
					null;
		}
	}

?>
