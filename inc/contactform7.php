<?php

add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace(
		'/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i',
		'\2',
		$content
	);

	$content = preg_replace_callback(
		'/<input([^>]*)type="submit"([^>]*)>/i',
		function($matches) {
			$attributes = trim($matches[1] . ' ' . $matches[2]);
			$value = 'Versturen';

			if (preg_match('/value="([^"]*)"/i', $attributes, $valueMatch)) {
				$value = $valueMatch[1];
			}

			if (preg_match('/class="([^"]*)"/i', $attributes, $classMatch)) {
				$classes = trim($classMatch[1] . ' btn btn-primary btn-icon');
				$attributes = preg_replace('/class="([^"]*)"/i', 'class="' . esc_attr($classes) . '"', $attributes, 1);
			} else {
				$attributes .= ' class="btn btn-primary btn-icon"';
			}

			$attributes = preg_replace('/\s*type="submit"/i', '', $attributes);
			$attributes = preg_replace('/\s*value="[^"]*"/i', '', $attributes);

			return '<button type="submit" ' . trim($attributes) . '>' . esc_html($value) . '<span class="btn-icon__icon"><i class="fa-sharp fa-light fa-arrow-right"></i><i class="fa-sharp fa-light fa-arrow-right"></i></span></button>';
		},
		$content
	);

	return str_replace('<br />', '', $content);
});

add_filter('wpcf7_autop_or_not', '__return_false');
