<?php

	function redirect($url) {
		echo '<script language="javascript" type="text/javascript">
			window.location.replace("' .$url. '");
			</script>';
	}
	
	function url($page = 'index', $array = NULL) {
		if(is_array($page)) {
			foreach ($page as $current_page) {
				$list_page[] = url($current_page,$array); 
			}
			return $list_page;
		}
		$page .= '.php';
		if($array != NULL) {
			$page .= '?';
			foreach($array as $key => $value) {
				$page .= $key.'='.$value.((++$i<count($array))?'&':'');
			}
		}
		return $page;
	}

?>
