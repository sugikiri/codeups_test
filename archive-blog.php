<?php get_header(); ?>

 <section class="sub-main-visual sub-blog-main-visual-layout js-height-get">
     <figure class="sub-main-visual__image u-mobile"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/sub-blog-mainvisual-sp.png" alt="ブログページのメインビジュアル"></figure>
     <figure class="sub-main-visual__image u-desktop"><img src="<?php echo get_template_directory_uri() ?>/images/blog/sub-blog-mainvisual-pc.png" alt="ブログページのメインビジュアル"></figure>
     <h1 class="sub-main-visual__title">ブログ</h1>   
</section>


<section class="breadcrumb sub-blog-breadcrumb-layout">
    <div class="breadcrumb__inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<section class="sub-blog-content sub-blog-content-layout">
  <div class="sub-blog-content__inner">
    <div class="sub-blog-content__category sub-category">
      <ul class="sub-category__lists">
        <li class="sub-category__list sub-category__list--all"><a href="<?php  echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">ALL</a></li>
        <?php 
            $genre_terms = get_terms('blog_genre',array('hide_empty' => false,));
            foreach ($genre_terms as $genre_term):
        ?>
        <li class="sub-category__list"><a href="<?php echo esc_url( get_term_link($genre_term, 'blog_genre')); ?>" ><?php echo esc_html($genre_term->name); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php if( have_posts()): ?>
    <div class="sub-blog-content__cards blog-cards">
      <?php while( have_posts() ): the_post(); ?>
      <?php 
        $days = 1;
        $today = date_i18n('U');
        $entry_day = get_the_time('U');
        $keika = date('U',($today - $entry_day)) / 86400;
      ?>
      <?php if( $days > $keika ) {
          echo '<a href="' . esc_url(get_permalink(get_the_ID())) . '" class="blog-cards__item blog-card blog-card--new">';
        } else {    
          echo '<a href="' . esc_url(get_permalink(get_the_ID())) . '" class="blog-cards__item blog-card">';
      }
      ?>
        <div class="blog-card__image">
            <?php if(has_post_thumbnail()) {
                the_post_thumbnail('my_thumbnail');
            } else {
                echo '<img src="' . esc_url( get_template_directory_uri()) . '/images/top/blog-image-sp-01.png" alt="ブログのサムネイル">';
            }
            ?>
        </div>
        <div class="blog-card__body">
          <div class="blog-card__title"><?php the_title();?></div>
          <div class="blog-card__excerpt">
              <?php $blog_field = get_post_meta(get_the_ID(), 'blog_text1', true);
              echo $blog_field;
              ?>
          </div>
          <div class="blog-card__headding">
            <div class="blog-card__category"><?php echo esc_html(get_the_terms(get_the_ID(), 'blog_genre')[0]->name); ?></div>
            <time class="blog-card__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
          </div>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
    <?php endif;?>
    <div class="sub-blog-content__pagenation pagenation">
      <div class='wp-pagenavi'>
        <?php  wp_pagenavi(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>