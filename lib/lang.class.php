<?php

	class Lang {
	
		public $config;
		
		public function __construct($language = null, $conf) {
			$this->config = $conf;
			$this->load($language);
		}

		public function load($language = null, $langFile = 'main') {
			if(is_array($language)) {
				foreach ($language as $key) {
					$this->load($key, $langFile);
				}
			} else {
				if($language == null) {
					$language = $this->config['lang']['default'];
				}
				
				$loadFile = APP_PATH . DS . 'lang' . DS . $language . DS . $langFile . '.lang.php';
				if (file_exists($loadFile)) {
					require_once($loadFile);
				} else {
					echo 'Impossible de charger le fichier de langue';
				}
				
				if (is_array( $_SESSION['lang'] )) {
					$_SESSION['lang'] = array_merge($lang, $_SESSION['lang']);
				} else {
					$_SESSION['lang'] = $lang;
				}
			}
			
		}
		
	}

?>