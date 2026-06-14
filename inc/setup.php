<?php

add_action( 'after_setup_theme', function() {
	load_theme_textdomain( 'creators', CREATORS_THEME_DIR . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
	register_nav_menus([
		'topmenu'   => __( 'topmenu', 'creators' ),
		'hoofdmenu'   => __( 'Hoofdmenu', 'creators' ),
		'footermenu'  => __( 'Footer menu', 'creators' ),
		'footermenu2'  => __( 'Footer menu 2', 'creators' ),
		'footermenu3'  => __( 'Footer menu 3', 'creators' ),
		'privacymenu' => __( 'Privacy menu', 'creators' ),
	]);
} );

add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = apply_filters( 'creators_content_width', 640 );
}, 0 );

// Remove default WooCommerce Styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_action( 'wp_enqueue_scripts', function () {
	// Bijvoorbeeld de block styles uitschakelen
	wp_dequeue_style('wc-block-style');
}, 100 );

/**
 * Verwijder door thema/plugins toegevoegde image sizes (custom sizes).
 * Standaardmaten (thumbnail, medium, large, medium_large, 1536x1536, 2048x2048) blijven bestaan.
 */
add_filter('intermediate_image_sizes', function ($sizes) {
    // lijst met WP-core maten die je WEL wilt houden
    $keep = ['thumbnail'];

    // filter alle maten die niet in $keep zitten (dus: custom thema/plugin maten)
    return array_values(array_intersect($sizes, $keep));
});