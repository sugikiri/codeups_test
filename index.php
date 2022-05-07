<?php get_header(); ?>


  <section class="main-visual top-main-visual-layout js-height-get">
    <div class="main-visual__titles">
      <h2 class="main-visual__title">メインタイトルが入ります</h2>
      <h3 class="main-visual__subtitle">サブタイトルが入ります</h3>
    </div>
    <!-- Slider main container -->
    <div class="swiper-container js-mv-slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <!-- <figure class="main-visual__img"><img src="" alt=""></figure> -->
          <div class="main-visual__content main-visual__content--first"></div>
        </div>
        <div class="swiper-slide">
          <div class="main-visual__content main-visual__content--second"></div>
        </div>
        <div class="swiper-slide">
          <div class="main-visual__content main-visual__content--third"></div>
        </div>
      </div>
    </div>
  </section>

  <div class="top-announce top-announce-layout">
    <div class="top-announce__inner">
      <?php $news_query = new WP_Query(
        array(
          'post_type' => 'post',
          'posts_per_page' => 1,
        )  
      ); 
      ?>
      <?php if ( $news_query->have_posts()): ?>
        <?php while ( $news_query->have_posts()): ?>
          <?php $news_query->the_post(); ?>
        <div class="announce">
          <div class="announce__wrapper">
            <div class="announce__headding">
              <div class="announce__date"><?php the_time('Y.n.j'); ?></div>
              <?php $category = get_the_category(); 
                if($category[0]) {
                  echo '<div class="announce__category">' . $category[0]->cat_name . '</div>';
                }
              ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="announce__title announce__title--hover-yellow"><?php the_title(); ?></a>
            <div class="announce__button">
              <a href="<?php echo home_url('/news'); ?>" class="button button--announce">すべて見る</a>
            </div>
          </div>
        </div>
      <?php  endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>

  <section class="content top-content-layout">
    <div class="inner">
      <div class="content__titles top-titles">
        <h2 class="top-titles__main">事業内容</h2>
        <div class="top-titles__secondary">Content</div>
      </div>
    </div>
    <div class="content__items">

      <a href="<?php echo esc_url(home_url('/content')); ?>" class="content__item">
        <figure class="content__image"><img src="<?php echo get_template_directory_uri() ?>/images/top/top-content-sp-01.png" alt="経営理念ページへのリンク画像"></figure>
        <div class="content__name">経営理念ページへ</div>
      </a>
      <a href="<?php echo esc_url(home_url('/content')); ?>" class="content__item">
        <figure class="content__image"><img src="<?php echo get_template_directory_uri() ?>/images/top/top-content-sp-02.png" alt="理念1ページへのリンク画像"></figure>
        <div class="content__name">理念1へ</div>
      </a>
      <a href="<?php echo esc_url(home_url('/content')); ?>" class="content__item">
        <figure class="content__image"><img src="<?php echo get_template_directory_uri() ?>/images/top/top-content-sp-03.png" alt="理念2ページへのリンク画像"></figure>
        <div class="content__name">理念2へ</div>
      </a>
      <a href="<?php echo esc_url(home_url('/content')); ?>" class="content__item">
        <figure class="content__image"><img src="<?php echo get_template_directory_uri() ?>/images/top/top-content-sp-04.png" alt="理念3ページへのリンク画像"></figure>
        <div class="content__name">理念3へ</div>
      </a>
    </div>
  </section>

  <section class="works top-works-layout">
    <div class="works__inner inner">
      <div class="works__titles top-titles">
        <h2 class="top-titles__main">制作実績</h2>
        <div class="top-titles__secondary top-titles__secondary--text-align-right">Works</div>
      </div>
      <div class="works__content-wrapper">
        <div class="works__images">
          <div class="swiper-container js-works-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->


    <?php 
    $args = array(
      'post_type' => 'works',
      'posts_per_page' => '3',
      'orderby' => 'rand'
    );
    $myposts = get_posts($args); ?>
    <?php foreach( $myposts as $post): setup_postdata($post);
    ?>
    <div class="swiper-slide works__image-wrapper">
      <?php $work_images = SCF::get('work-images',$post->ID); ?>
      <?php $work_image01_url = wp_get_attachment_image_src($work_images[0]['work-image'], 'large'); ?>
      <figure class="works__image"><img src="<?php echo $work_image01_url[0]; ?>" alt="制作実績"></figure>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>

            
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="works__body top-common">
            <h3 class="top-common__title">メインタイトルが入ります。</h3>
            <p class="top-common__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <div class="top-common__button">
              <a class="button" href="<?php echo esc_url(home_url('/works')); ?>">詳しく見る</a>
            </div>
        </div>
      </div>
    </div>
    <div class="works__diagonal-line-first"></div>
    <div class="works__diagonal-line-second"></div>
  </section>

  <section class="overview top-overview-layout">
    <div class="overview__inner inner">
      <div class="overview__titles top-titles">
        <h2 class="top-titles__main">企業概要</h2>
        <div class="top-titles__secondary">Overview</div>
      </div>
      <div class="overview__wrapper">
          <figure class="overview__image"><img src="<?php echo get_template_directory_uri() ?>/images/top/overview-sp.png" alt="企業概要"></figure>
        <div class="overview__body top-common">
            <h3 class="top-common__title">メインタイトルが入ります。</h3>
            <p class="top-common__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <div class="top-common__button">
              <a class="button" href="<?php echo esc_url(home_url('/company')); ?>">詳しく見る</a>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog top-blog-layout">
    <div class="inner">
      <div class="blog__titles top-titles">
        <h2 class="top-titles__main">ブログ</h2>
        <div class="top-titles__secondary top-titles__secondary--text-align-right">Blog</div>
      </div>
      <div class="blog__cards blog-cards">
        <?php $args = array (
          'post_type' => 'blog',
          'post_per_page' => '3',
          'order'=>'DESC',
          'orderby'=>'post_date'
          );
          $my_query = new WP_Query( $args);?>
        <?php  if( $my_query->have_posts()): ?>
        <?php while( $my_query->have_posts()):  $my_query->the_post(); ?>
        <?php 
          $days = 1;
          $today = date_i18n('U');
          $entry_day = get_the_time('U');
          $keika = date('U',($today - $entry_day)) / 86400;
        ?>
        <?php if( $days > $keika) {
          echo '<a href=' . esc_url(get_permalink()) . '" class="blog-cards__item blog-card blog-card--new">';
        } else {
          echo '<a href=' . esc_url(get_permalink()) . '" class="blog-cards__item blog-card">';
        } ?>
          <div class="blog-card__image">
            <?php if( has_post_thumbnail()) {
              the_post_thumbnail('my_thumnail');
            } else {
              echo '<img src="' . get_template_directory_uri() . '/images/common/test.png" alt="ブログのサムネイル">';
            } ?>
          </div>
          <div class="blog-card__body">
            <div class="blog-card__title"><?php the_title(); ?></div>
            <div class="blog-card__excerpt">
              <?php $blog_text = get_post_meta(get_the_ID(), 'blog_text1', true); 
                    echo mb_substr(strip_tags($blog_text),0,50);
              ?>
            </div>
            <div class="blog-card__headding">
              <div class="blog-card__category"><?php echo esc_html(get_the_terms('','blog_genre')[0]->name); ?></div>
              <time class="blog-card__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="blog__button">
        <a class="button" href="<?php echo esc_url(home_url('/blog')); ?>">詳しく見る</a>
      </div>
    </div>
  </section>


<?php get_footer(); ?>