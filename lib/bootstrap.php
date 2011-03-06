<?php

	// Classes loading
	require(LIB_PATH . DS . 'loader.class.php');
	$loader = new Loader();

	$loader->load('view');
	$loader->load('model');
	$loader->load('helper');
	$loader->load('controller');
	$loader->load('lang');
	
	
	
	
	// Buffering
	ob_start();
	
	// Dispatch
	$loader->load('dispatcher');
	$disp = new Dispatcher();
	
	if(!$config['dispatch']['auto']) {
		$disp->dispatch();
	}		
	
	
	// Routing for the to be cached class
	if($disp->cache_route != null) {
		$route = $disp->cache_route;
	} else {
		$route = $disp->route;
	}
	
	$cache_name = APP_PATH . DS . 'cache' . DS . $route['controller'] . '.' . $route['method'] . '.cache';
	
	
	// Optionally clear cache
	if(($disp->cache === 'clear' || $disp->cache === 'clearn') && file_exists($cache_name)) {
		@unlink($cache_name);
	}
	
		
	// Do cache
	if($disp->cache === true || $disp->cache === 'clearn') {
		
		// Update cache file
		if(!file_exists($cache_name)) {
			$cache_file = fopen($cache_name, 'a+');
			
			fseek($cache_file, 0);
			fputs($cache_file, ob_get_contents());
			
			$out = ob_get_contents();
			
		// Retrieve data from cache
		} else {
			$cache_file = fopen($cache_name, 'r+');
			
			while (!feof($cache_file)) {
				$out .= fgets($cache_file);
			}
		}
		
		fclose($cache_file);
		
		
	// No cache
	} else {
		$out = ob_get_contents();
	}
	
	
	// Flush
	ob_end_clean();
	echo $out;

?>