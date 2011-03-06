<?php

	class Model {

	
		public $db;

		
		public function __construct($pdo) {
			$this->db = &$pdo;
		}

		
		public function load($model) {
			$modelFile = APP_PATH . DS . 'models' . DS . $model . '.model.php';
			require($modelFile);
			$modelRealName	= $model . '_model';
			$this->$model = new $modelRealName($this->db);
			return $this->$model;
		}
		
		
		public function cache($name, $datas) {
			$cache_name = APP_PATH . DS . 'cache' . DS . $name . '.model.cache';

			if(file_exists($cache_name)) {
				@unlink($cache_name);
			}
			
			$cache_file = fopen($cache_name, 'a+');
			
			fseek($cache_file, 0);
			fputs($cache_file, $datas);
			fclose($cache_file);
		}
		
		
		public function cached($name) {
			$cache_name = APP_PATH . DS . 'cache' . DS . $name . '.model.cache';

			return file_exists($cache_name);
		}
		
		
		public function get_cache($name) {
			$cache_name = APP_PATH . DS . 'cache' . DS . $name . '.model.cache';

			$cache_file = fopen($cache_name, 'r+');
			while (!feof($cache_file)) {
				$out .= fgets($cache_file);
			}
			return $out;
		}
		
		
		public function clear_cache($name) {
			$cache_name = APP_PATH . DS . 'cache' . DS . $name . '.model.cache';

			// Optionally clear cache
			if(file_exists($cache_name)) {
				@unlink($cache_name);
			}
		}
	}

?>