<section class="contact">
    <div class="inner">
      <div class="contact__titles top-titles">
        <h2 class="top-titles__main top-titles__main--contact">お問い合わせ</h2>
        <div class="top-titles__secondary">Contact</div>
      </div>
      <p class="contact__text">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
      <div class="contact__button">
        <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせへ</a>
      </div>
    </div>
  </section>


  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/common/logo.png" alt="フッターロゴ"></a></div>
      <?php  
        wp_nav_menu(
          array(
            'depth' => 1,
            'theme_location' => 'footer',
            'container' => 'nav',
            'container_class' => 'footer__menu nav',
            'menu_class' => 'nav__lists',
            'add_li_class' => 'nav__list nav__list--footer',
          )
          );
      ?>
      <!-- <nav class="footer__menu nav">
        <ul class="nav__lists">
          <li class="nav__list nav__list--footer"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
          <li class="nav__list nav__list--footer"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li class="nav__list nav__list--footer"><a href="<?php echo esc_url(home_url('/content')); ?>">事業内容</a></li>
          <li class="nav__list nav__list--footer"><a href="<?php echo esc_url(home_url('/company')); ?>">企業概要</a></li>
          <li class="nav__list nav__list--footer"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
          <li class="nav__list nav__list--footer"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
        </ul>
      </nav> -->
    </div>
    <div class="footer__copy">&copy; 2021 CodeUps Inc.</div>
  </footer>



  <div class="to-top"></div>

  <div class="inner">
  </div>

  <?php wp_footer(); ?>
</body>

</html>
