<?php

	class Helper {
	
	
		public function __construct($helper = null) {
			$this->load($helper);
		}

		public function load($helper = null) {
			global $config;
			
			if(is_array($helper)) {
				foreach ($helper as $key) {
					$this->load($key);
				}
			} elseif($helper === null) {
				$this->load($config['helpers']['default']);
			} else {
				$helperFile = APP_PATH . DS . 'helpers' . DS . $helper . '.helper.php';
				require($helperFile);
			}
		}
		
	}

?>
