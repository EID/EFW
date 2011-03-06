<?php

	class Lang {
	
		public $config;
		
		public function __construct($language = null, $conf) {
			$this->config = $conf;
			$this->load($language);
		}

		public function load($language = null, $langFile = 'main') {
			if($language == null) {
				$language = $this->config['lang']['default'];
			}
			
			$loadFile = APP_PATH . DS . 'lang' . DS . $language . DS . $langFile . '.lang.php';
			if (file_exists($loadFile)) {
				require_once($loadFile);
				
				if (is_array( $_SESSION['lang'] ) && is_array( $lang )) {
					$_SESSION['lang'] = array_merge($_SESSION['lang'], $lang);
				} else if (!empty($lang)) {
					$_SESSION['lang'] = $lang;
				} else {
					echo 'Error : This lang file has already been loaded';
				}
			} else {
				echo 'Unable to load language file';
			}
		}
		
	}

?>