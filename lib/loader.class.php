<?php

	class Loader
	{
		public function load($className) {
			if (file_exists(LIB_PATH . DS . $className . '.class.php')) {
				require(LIB_PATH . DS . $className . '.class.php');
				return true;
			} else if (file_exists(APP_PATH . DS . 'controllers' . DS . $className . '.controller.php')) {
				require(APP_PATH . DS . 'controllers' . DS . $className . '.controller.php');
				return true;
			} else if (file_exists(APP_PATH . DS . 'models' . DS . $className . '.model.php')) {
				require(APP_PATH . DS . 'models' . DS . $className . '.model.php');
				return true;
			}
			return false;
		}
	}
?>
