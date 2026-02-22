<?php
/*
Plugin Name: Stardew Profit Calculator (Integrated)
Description: Fully integrated Stardew calculator using theme assets.
Version: 1.0.7
Author: Franceska
*/

if (!defined('ABSPATH')) exit;

add_shortcode('stardew_calculator', function(){
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/ui.php';
    return ob_get_clean();
});

add_action('wp_enqueue_scripts', function(){

    if (is_admin()) return;

    $url = plugin_dir_url(__FILE__);
    $theme_assets = get_stylesheet_directory_uri() . '/assets/';

    wp_enqueue_style('sdv-style', $url.'assets/css/style.css', [], '10.0');

wp_enqueue_script('sdv-d3',
    'https://d3js.org/d3.v3.min.js',
    [],
    null,
    true
);

wp_add_inline_script(
    'sdv-d3',
    'var SDV_THEME = { assets: "' . $theme_assets . '" };',
    'before'
);

wp_enqueue_script('sdv-crops',
    $url.'assets/js/crops.js',
    ['sdv-d3'],
    null,
    true
);

wp_enqueue_script('sdv-data',
    $url.'assets/js/data.js',
    ['sdv-crops'],
    null,
    true
);

wp_enqueue_script('sdv-time',
    $url.'assets/js/time.js',
    ['sdv-data'],
    null,
    true
);

wp_enqueue_script('sdv-predictions',
    $url.'assets/js/predictions.js',
    ['sdv-time'],
    null,
    true
);

wp_enqueue_script('sdv-main',
    $url.'assets/js/main.js',
    ['sdv-predictions'],
    null,
    true
);

    wp_localize_script('sdv-main', 'SDV_THEME', [
        'assets' => $theme_assets
    ]);

});
