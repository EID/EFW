<?php

	class View {
		public $config;
		
		public function __construct($config) {
			global $config;
			$this->config 	= $config;
		}

		public function display($view, $data = NULL) {
			$viewName = isset($view) ? $view : 'index';
			$viewFile = APP_PATH . DS . 'views' . DS . $viewName . '.view.php';

			if (file_exists($viewFile)) {		
				echo $this->fill($viewFile, $data);
			}
		}
		
		private function fill($viewFile = null, $data = null) {
			if ($viewFile !== null && file_exists($viewFile)) {
				ob_start();
				
					$data['config'] = $this->config;
					if (is_array($data)) 
						extract($data);
					
					include($viewFile);
					$out = ob_get_contents();
					
					// Fill the view : replacing {lang:}
					foreach ($_SESSION['lang'] as $key => $val) {
						$out = preg_replace('/{lang:(' .$key. ')}/', $val, $out);
					}
				
				ob_end_clean();

				return $out;
			}
		}

	}

?>