<?php get_header(); ?>

  <div class="sub-404-content sub-404-content-layout">
      <div class="inner">
          <h1 class="sub-404-content__title">404 Not Found</h1>
          <p class="sub-404-content__text">お探しのページは<br class="u-mobile">見つかりませんでした。</p>
          <div class="sub-404-content__button">
            <a class="button" href="<?php echo  esc_url(home_url('/')); ?>">TOPへ</a>
          </div>  
      </div>    
  </div>
  

<?php get_footer(); ?>