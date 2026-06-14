<?php

function creators_nav_menu($location, $class = '', $depth = 1) {
	if ( has_nav_menu( $location ) ) {
		wp_nav_menu([
			'theme_location' => $location,
			'container'      => false,
			'menu_class'     => $class,
			'depth'          => $depth,
		]);
	}
}

function creators_menu_name($location) {
	$locations = get_nav_menu_locations();

	if (empty($locations[$location])) {
		return '';
	}

	$menu = wp_get_nav_menu_object($locations[$location]);

	return !empty($menu->name) ? $menu->name : '';
}

function creators_topmenu() {
	creators_nav_menu('topmenu', 'js-header-top-menu d-flex reset-list gap-2', 2);
}

function creators_hoofdmenu() {
	creators_nav_menu('hoofdmenu', 'js-main-menu d-lg-flex align-items-center reset-list gap-xl-4 gap-2', 2);
}

function creators_footermenu() {
	creators_nav_menu('footermenu', 'columns-2 reset-list', 2);
}

function creators_footermenu2() {
	creators_nav_menu('footermenu2', 'reset-list', 2);
}


function creators_footermenu3() {
	creators_nav_menu('footermenu3', 'reset-list', 2);
}

function creators_privacymenu() {
	creators_nav_menu('privacymenu', 'd-flex reset-list gap-2', 2);
}

