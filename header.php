<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="codeupsの課題です。" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="/" />
  
  <?php wp_head(); ?>
  <!-- noindex -->
  <meta name=“robots” content=“noindex”>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <?php if( is_front_page() || is_home()): ?>
        <h1 class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/common/logo.png" alt="ヘッダーロゴ"></a></h1>
      <?php else: ?>
        <div class="header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/common/logo.png" alt="ヘッダーロゴ"></a></div>
      <?php endif; ?>
        <?php wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'global',
            'container' => 'nav',
            'container_class' => 'header__nav nav u-desktop',
            'menu_class' => 'nav__lists',
            'menu_id' => '',
            'add_li_class' => 'nav__list',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="nav__list nav__list--contact"><a href="/contact">お問い合わせ</a></li></ul>'
          )
          );
         ?>
      <!-- <nav class="header__nav nav u-desktop">
        <ul class="nav__lists">
          <li class="nav__list"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="nav__list"><a href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></li>
          <li class="nav__list"><a href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></li>
          <li class="nav__list"><a href="<?php echo esc_url(home_url('/company')); ?>">企業概要</a></li>
          <li class="nav__list"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          <li class="nav__list nav__list--contact"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
        </ul>
      </nav> -->
      <div class="header__menu drawer u-mobile js-hamburger">
        <div class="drawer__items">
          <div class="drawer__item1"></div>
          <div class="drawer__item2"></div>
          <div class="drawer__item3"></div>
        </div>
      </div>
    </div>
  </header>

  <div class="drawer-content">
    <?php
    wp_nav_menu(
      array(
        'depth' => 1,
        'theme_location' => 'drawer',
        'container' => 'div',
        'container_class' => 'drawer-content__wrapper',
        'menu_class' => 'drawer-content__items',
        'add_li_class' => 'drawer-content__item',
      )
      );
    ?>
    <!-- <div class="drawer-content__wrapper">
      <div class="drawer-content__items">
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/company')); ?>">企業概要</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></div>
      </div>
    </div> -->
  </div>

  <div class="drawer-background"></div>
