<?php get_header(); ?>

 <section class="sub-main-visual sub-works-main-visual-layout js-height-get">
     <figure class="sub-main-visual__image u-mobile"><img src="<?php echo get_template_directory_uri(); ?>/images/works/sub-works-mainvisual-sp.png" alt="制作実績のメインビジュアル"></figure>
     <figure class="sub-main-visual__image u-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/works/sub-works-mainvisual-pc.png" alt="制作実績のメインビジュアル"></figure>
     <h1 class="sub-main-visual__title sub-main-visual__title--works">制作実績</h1>   
</section>


<section class="breadcrumb sub-works-breadcrumb-layout">
    <div class="inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<section class="sub-works-content sub-works-content-layout">
    <div class="inner">
      <div class="sub-works-content__category sub-category">
        <ul class="sub-category__lists">
          <li class="sub-category__list sub-category__list--all"><a href="<?php echo esc_url( get_post_type_archive_link( 'works' )); ?>">ALL</a></li>
          <?php 
            $genre_terms = get_terms( 'genre', array( 'hide_empty' => false,));
            foreach ( $genre_terms as $genre_term):
          ?>

          <li class="sub-category__list"><a href="<?php echo esc_url( get_term_link( $genre_term, 'genre')); ?>" ><?php echo esc_html($genre_term->name); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <?php if( have_posts()): ?>
    <div class="inner sub-works-content__inner">
      <div class="sub-works-content__cards sub-works-cards">
        <?php while( have_posts()): ?>
        <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="sub-works-cards__item sub-works-card">
          <div class="sub-works-card__wrapper">
            <figure class="sub-works-card__thumbnail">
                <?php if( has_post_thumbnail()){
                    the_post_thumbnail('my_thmbnail');
                    } else {
                        echo '<img src="' . esc_url( get_template_directory_uri()) . '/images/works/sub-works-image-sp-01.png" alt="制作実績のサムネイル">';
                    }
                ?>
            </figure>
            <div class="sub-works-card__category"><?php echo esc_html(get_the_terms( get_the_ID(), 'genre')[0]->name); ?></div>
          </div>
          <div class="sub-works-card__title"><?php the_title(); ?></div>
        </a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
      <div class="sub-works-content__pagenation pagenation">
          <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>
  
<?php get_footer(); ?>