<?php

// エディター内で[temp]でテンプレート内を参照
function allow_sc_template_dir($atts, $content = '')
{
    return get_stylesheet_directory_uri() . $content;
}
add_shortcode('temp', 'allow_sc_template_dir');

// Contact Form 7 にショートコードを追加
function get_mytheme_url()
{
    return get_template_directory_uri();
}
add_shortcode('show_mytheme_url', 'get_mytheme_url', true);

//php include shotecode
function Include_my_php($params = array())
{
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');

add_action('wp_footer', 'add_meta_to_footer');
function add_meta_to_footer()
{
    echo '
';
}

// CSS・jsの読み込み
function add_files()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), date('YmdHi'), false);
  
    // wp_enqueue_script('headerBgOfSimple', get_template_directory_uri() . '/js/script.js', array(), date('YmdHi'), false);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false);
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js', false);
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js', false);
    wp_enqueue_style('style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array('style'), date('YmdHi'), false);
    wp_enqueue_script('slick', get_template_directory_uri() . '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), date('YmdHi'),false);
    wp_enqueue_script('slick', get_template_directory_uri() . '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), date('YmdHi'),false);
    wp_enqueue_script('slick', get_template_directory_uri() . 'https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/8-2/js/8-2.js', array(), date('YmdHi'),false);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), date('YmdHi'),false);
    wp_enqueue_script('toggle', get_template_directory_uri() . '/assets/js/toggle.js', array(), date('YmdHi'),false);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/slick.js', array(), date('YmdHi'),false);
  
}
add_action('wp_enqueue_scripts', 'add_files');

