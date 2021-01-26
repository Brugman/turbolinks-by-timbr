<?php

/**
 * Plugin Name: Turbolinks by timbr
 * Plugin URI: https://timbr.dev
 * Description: Add Turbolinks to your WordPress site.
 * Version: 0.1.0
 * Author: Tim Brugman
 * Author URI: https://timbr.dev
 * Text Domain: tbl
 */

register_activation_hook( __FILE__, function () {

    $settings_default = plugin_dir_path( __FILE__ ).'assets/turbolinks-settings.default.js';
    $settings         = plugin_dir_path( __FILE__ ).'assets/turbolinks-settings.js';

    if ( !file_exists( $settings ) )
        copy( $settings_default, $settings );
});

add_action( 'wp_enqueue_scripts', function () {

    wp_register_script(
        'turbolinks', // name
        plugin_dir_url( __FILE__ ).'assets/turbolinks-5.2.0.js', // url
        [], // deps
        '5.2.0', // ver
        false // in_footer
    );
    wp_register_script(
        'turbolinks-settings', // name
        plugin_dir_url( __FILE__ ).'assets/turbolinks-settings.js', // url
        ['turbolinks'], // deps
        '1.0.0', // ver
        false // in_footer
    );

    wp_enqueue_script( 'turbolinks' );
    wp_enqueue_script( 'turbolinks-settings' );
});

