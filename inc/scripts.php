<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'creators-css', CREATORS_THEME_URI . '/dist/css/app.css', [], null );
	wp_enqueue_script( 'creators-manifest', CREATORS_THEME_URI . '/dist/js/manifest.js', [], null, true );
	wp_enqueue_script( 'creators-vendor', CREATORS_THEME_URI . '/dist/js/vendor.js', [ 'creators-manifest' ], null, true );
	wp_enqueue_script( 'creators-app', CREATORS_THEME_URI . '/dist/js/app.js', [ 'creators-vendor' ], null, true );
	wp_enqueue_style('font-awesome-pro', CREATORS_THEME_URI . '/assets/fontawesome/css/all.min.css', [], null);
}, 20 );


add_filter('style_loader_tag', function($tag, $handle) {
    if (in_array($handle, ['font-awesome-pro', 'creators-css'])) {
        $href = get_template_directory_uri() . '/assets/fontawesome/css/all.min.css';
        if ($handle === 'creators-css') {
            $href = get_template_directory_uri() . '/dist/css/app.css';
        }

        return "<link rel='preload' href='{$href}' as='style' onload=\"this.onload=null;this.rel='stylesheet'\">\n<noscript><link rel='stylesheet' href='{$href}'></noscript>";
    }
    return $tag;
}, 10, 2);

