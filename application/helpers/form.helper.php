<?php

	function form_open($action, $method = 'POST', $attr = '') {
		return '<form action="' .$action. '" method="' .$method. '"' .$params. '>';
	}
	
	function form_close() {
		return '</form>';
	}
	
	function form_input($id, $placeholder = NULL, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="text" id="' .$id. '" name="' .$id. '" ' . ( $placeholder !== NULL ? 'placeholder="' .$placeholder. '"' : '' ) .$params. '/>';
	}
	
	function form_password($id, $placeholder = NULL, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="password" id="' .$id. '" name="' .$id. '" ' . ( $placeholder !== NULL ? 'placeholder="' .$placeholder. '"' : '' ) .$params. '/>';
	}
	
	function form_submit($value, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="submit" value="' .$value. '"' .$params. '/>';
	}
	
	function form_reset($value, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="reset" value="' .$value. '"' .$params. '/>';
	}
	
	function form_button($id, $value, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="button" id="' .$id. '" name="' .$id. '" value="' .$value. '"' .$params. '/>';
	}
	
	function form_hidden($id, $value, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="hidden" id="' .$id. '" name="' .$id. '" value="' .$value. '"' .$params. '/>';
	}
	
	function form_textarea($id, $content = '', $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<textarea id="' .$id. '" name="' .$id. '"' .$params. '>' .$content. '</textarea>';
	}
	
	function form_checkbox($id, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<input type="checkbox" id="' .$id. '" name="' .$id. '"' .$params. '/>';
	}
	
	function form_label($id, $content, $attr = '') {
		if ($attr != '') {
			$params = '';
			foreach ($attr as $key => $value) {
				$params .= ' ' .$key. '="' .$value. '"';
			}
		}
		return '<label for="' .$id. '"' .$params. '>' .$content. '</label>';
	}
?>