<?php get_header(); ?>

 <section class="sub-main-visual sub-archive-main-visual-layout js-height-get">
     <figure class="sub-main-visual__image u-mobile"><img src="<?php echo get_template_directory_uri() ?>/images/archive/sub-archive-mainvisual-sp.png" alt="お知らせのメインビジュアル"></figure>
     <figure class="sub-main-visual__image u-desktop"><img src="<?php echo get_template_directory_uri() ?>/images/archive/sub-archive-mainvisual-pc.png" alt="お知らせのメインビジュアル"></figure>
     <h1 class="sub-main-visual__title">お知らせ</h1>   
</section>


<section class="breadcrumb sub-archive-breadcrumb-layout">
    <div class="breadcrumb__inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<?php if (have_posts()): ?>

<section class="sub-archive-content sub-archive-content-layout">
  <div class="sub-archive-content__inner">
    <div class="sub-archive-content__announce announce-group">
        <?php while (have_posts()): the_post(); ?>
      <div class="announce-group__item announce">
        <div class="announce__wrapper">
          <div class="announce__headding">
            <div class="announce__date"><?php the_time('Y.n.j'); ?></div>
            <?php $category = get_the_category(); 
                    if ($category[0]) {
                        echo '<div class="announce__category">' . $category[0]->cat_name . '</div>';
                    }
            ?>
          </div>
          <div class="announce__title announce__title--hover-yellow">
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
          </div>
        </div>
      </div>
      <?php  endwhile; ?>
    </div>
    <div class="sub-archive-content__pagenation pagenation">
        <?php wp_pagenavi(); ?>
    </div>
  </div>
</section>

<?php endif; ?>

<?php get_footer();  ?>