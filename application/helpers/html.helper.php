<?php

	function anchor($href, $content, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		
		return '<a href="' .$href. '"' .$params. '>' .$content. '</a>';
	}
	
	function img($src, $alt = NULL, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<img src="' .$src. '" alt="' .$alt. '"' .$params. '/>';
	}
	
?>
