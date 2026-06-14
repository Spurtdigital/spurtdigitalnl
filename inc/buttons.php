<?php

/**
 * Add Buttons
 *
 * @return void
 */
function spurt_add_btns($btns = [], $parent_class = '')
{
	if ($parent_class) {
		$parent_class = ' ' . $parent_class;
	}

	if ($btns) {
		echo '<div class="btns' . $parent_class . '">';
		foreach ($btns as $btn) {
			get_template_part('template-parts/components/component', 'button', $btn);
		}
		echo '</div>';
	}
}

/**
 * Render buttons from an ACF field or sub field.
 *
 * @param string $field_name
 * @param string $parent_class
 * @param bool   $is_sub_field
 * @return void
 */
function spurt_render_btns($field_name = 'btns', $parent_class = '', $is_sub_field = false)
{
	$btns = $is_sub_field ? get_sub_field($field_name) : get_field($field_name);

	if (!is_array($btns) || empty($btns)) {
		return;
	}

	spurt_add_btns($btns, $parent_class);
}
