<?php
/**
 * Ressources du theme enfant DFEF.
 * Verifier le chargement du CSS du parent avant activation (voir README).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function dfef_child_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'dfef-child-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    wp_enqueue_style(
        'dfef-child-assets',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array( 'dfef-child-style' ),
        $theme_version
    );

    wp_enqueue_script(
        'dfef-child-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'dfef_child_enqueue_assets', 20 );
