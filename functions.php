<?php
// CSS・jsの読み込み
function add_files()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), date('YmdHi'), false);
  
    // wp_enqueue_script('headerBgOfSimple', get_template_directory_uri() . '/js/script.js', array(), date('YmdHi'), false);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false);
    wp_enqueue_script('toggle', get_template_directory_uri() . '/assets/js/toggle.js', array(), date('YmdHi'),false);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), date('YmdHi'),true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), date('YmdHi'),true);
  
}
add_action('wp_enqueue_scripts', 'add_files');

