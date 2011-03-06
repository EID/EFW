<?php

	function multi($string,$count) {
		while(--$count >= 0) {
			$t .= $string;
		}
		return $t;
	}

	function plural($n) {
		return $n > 1 ? 's': '';
	}

?>
