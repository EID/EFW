<?php

	function password() {
		$base_alpha = 'abcdefghijklmnopqrstuvwxyz';
		$base_num = '0123456789';
		
		$mdp = substr(str_shuffle($base_alpha), 0, 3) . substr(str_shuffle($base_num), 0, 2) . substr(str_shuffle($base_alpha), 0, 2) . substr(str_shuffle($base_num), 0, 1);
		return $mdp;
	}

?>
