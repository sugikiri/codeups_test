<?php

function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}

add_action('after_setup_theme', 'my_setup');


function my_script_init() {
    wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css', array(), '6.8.4', 'all');
    wp_enqueue_style('my', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@200;300;400;500;700&display=swap', array(), '1.0.0', 'all');
    wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js', $deps, '6.8.4', false);
    wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_script_init');

// 投稿名をお知らせに変更
function Change_menulabel() {
global $menu;
global $submenu;
$name = 'お知らせ';
$menu[5][0] = $name;
$submenu['edit.php'][5][0] = $name.'一覧';
$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
global $wp_post_types;
$name = 'お知らせ';
$labels = &$wp_post_types['post']->labels;
$labels->name = $name;
$labels->singular_name = $name;
$labels->add_new = _x('追加', $name);
$labels->add_new_item = $name.'の新規追加';
$labels->edit_item = $name.'の編集';
$labels->new_item = '新規'.$name;
$labels->view_item = $name.'を表示';
$labels->search_items = $name.'を検索';
$labels->not_found = $name.'が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

// アーカイブページ有効化
function post_has_archive($args, $post_type) {
    if( 'post' == $post_type ){
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
    }
    return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function my_menu_init() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
            'footer' => 'フッターメニュー',
        )
    );
}

add_action('init', 'my_menu_init');

//nav_menuのli要素にクラス名を追加する・・・がフッターに応用できず未使用
// function add_nav_class($class) {
    //     return $class = array('nav__list');
    // }
    
    // add_filter("nav_menu_css_class", "add_nav_class");
//nav_menuのli要素にクラス名を追加する・・・がフッターに応用できず未使用ここまで



// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);