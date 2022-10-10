<?php

add_filter('site_url',  'wpadmin_filter', 10, 3);  

function wpadmin_filter( $url, $path, $orig_scheme ) {  
    $old  = array( "/(wp-admin)/");  
    $admin_dir = WP_ADMIN_DIR;  
    $new  = array($admin_dir);  
    return preg_replace( $old, $new, $url, 1);  
}

function change_logo () {
?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php bloginfo("url"); ?>/logo');
            background-size: 180px auto;
            background-position: center;
            width: 300px;
            height: 70px;
            padding-bottom: 110px;
        }       
    </style>
<?php
}
add_action( 'login_enqueue_scripts', 'change_logo' );

function load_script()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'load_script');


function get_excerpt_length()
{
    return 15;
}

function return_excerpt_text()
{
    return '';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');

function setup_init()
{
    register_nav_menus(array(
        'main_menu' => 'TOP MENU',
        'footer_menu' => 'FOOTER MENU',
        'category_footer_menu' => 'CATEGORY ON FOOTER',
    ));

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup_init');

function widget_setup()
{
    register_sidebar([
        'name' => 'Address On Footer',
        'id' => 'address',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ]);
}

add_action('widgets_init', 'widget_setup');

