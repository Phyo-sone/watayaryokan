<?php
// CSS・jsの読み込み
function add_files()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), date('YmdHi'), false);

    // wp_enqueue_script('headerBgOfSimple', get_template_directory_uri() . '/js/script.js', array(), date('YmdHi'), false);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false);
    wp_enqueue_script('toggle', get_template_directory_uri() . '/assets/js/toggle.js', array(), date('YmdHi'), false);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), date('YmdHi'), true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), date('YmdHi'), true);
}
add_action('wp_enqueue_scripts', 'add_files');

//アイキャッチ画像を有効化
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails'); //サムネイル機能の追加
});


function redirect_kanji_to_number()
{
    // 現在のURLを取得
    $current_url = $_SERVER['REQUEST_URI'];

    // 正規表現を使用して、URLから漢数字を抽出
    preg_match('/\/page\/([\p{Han}]+)/u', $current_url, $matches);

    if (isset($matches[1])) {
        // 漢数字を数字に変換
        $number = kanji_to_number($matches[1]);

        // 数字に変換したURLを生成
        $redirect_url = str_replace('/page/' . $matches[1], '/page/' . $number, $current_url);

        // リダイレクト
        wp_redirect($redirect_url);
        exit;
    }
}

// 漢数字を数字に変換する関数
function kanji_to_number($kanji)
{
    // ここに漢数字を数字に変換する処理を実装する
    // 例えば、漢数字を1から9の数字に対応させるなどの処理を行う

    // 以下はサンプルの処理例です
    $kanji_map = array(
        '一' => '1',
        '二' => '2',
        '三' => '3',
        '四' => '4',
        '五' => '5',
        '六' => '6',
        '七' => '7',
        '八' => '8',
        '九' => '9'
    );

    // 漢数字を数字に変換
    $number = strtr($kanji, $kanji_map);

    return $number;
}

// WordPressのリダイレクトフックに関数を登録
add_action('template_redirect', 'redirect_kanji_to_number');
