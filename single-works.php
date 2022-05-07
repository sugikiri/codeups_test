<?php get_header(); ?>

<section class="breadcrumb sub-single-works-breadcrumb-layout">
    <div class="breadcrumb__inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<?php if( have_posts()): ?>
    <?php while( have_posts() ): ?>
        <?php the_post(); ?>

<section class="sub-single-heading single-works-heading-layout">
    <div class="sub-single-heading__inner">
        <h1 class="sub-single-heading__title"><?php the_title(); ?></h1>
        <div class="sub-single-heading__index">
            <time class="sub-single-heading__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
            <div class="sub-single-heading__category"><?php echo esc_html(get_the_terms( get_the_ID(), 'genre')[0]->name); ?></div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<div class="sub-single-work-main-visual sub-single-work-main-visual-layout">
  <div class="sub-single-work-main-visual__inner">
    <div class="sub-single-work-main-visual__primary">
      <div class="swiper-container js-sub-single-works-primary">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php $work_images = SCF::get('work-images'); 
          foreach($work_images as $work_image) {
            $work_image_url = wp_get_attachment_image_src($work_image['work-image'], 'full');
          ?>
          <div class="swiper-slide">
            <figure class="sub-single-work-main-visual__primary-content">
              <img src="<?php echo $work_image_url[0]; ?>" alt="PCの写真">
            </figure>
          </div>
          <?php } ?>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev sub-single-work-main-visual__prev"></div>
        <div class="swiper-button-next sub-single-work-main-visual__next"></div>
      </div>
    </div>
    <div class="sub-single-work-main-visual__secondary">
      <div class="swiper-container js-sub-single-works-secondary">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php $work_images2 = SCF::get('work-images');
          foreach($work_images2 as $work_image2) {
            $work_image_url2 = wp_get_attachment_image_src($work_image2['work-image'], 'full');
          ?>
          <div class="swiper-slide">
            <figure class="sub-single-work-main-visual__secondary-content">
              <img src="<?php echo $work_image_url2[0]; ?>" alt="PCの写真">
            </figure>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="sub-single-work-content sub-single-work-content-layout">
  <div class="sub-single-work-content__inner">
    <div class="sub-single-work-content__items">
      <div class="sub-single-work-content__item sub-single-work-content-item">
        <h2 class="sub-single-work-content-item__title">制作のポイント</h2>
        <?php $worksfield1 = get_post_meta(get_the_ID(),'production-point',true); ?>
        <p class="sub-single-work-content-item__text"><?php echo $worksfield1; ?></p>
      </div>
      <div class="sub-single-work-content__item sub-single-work-content-item">
        <h2 class="sub-single-work-content-item__title">デザインのポイント</h2>
        <?php $worksfield2 = get_post_meta(get_the_ID(),'design-point',true); ?>
        <p class="sub-single-work-content-item__text"><?php echo $worksfield2; ?></p>
      </div>
      <div class="sub-single-work-content__item sub-single-work-content-item">
        <h2 class="sub-single-work-content-item__title">その他</h2>
        <?php $worksfield3 = get_post_meta(get_the_ID(), 'others-point',true); ?>
        <p class="sub-single-work-content-item__text"><?php echo $worksfield3; ?></p>
      </div>
    </div>
    <div class="sub-single-work-content__pagenation pagenation">
      <div class='wp-pagenavi'>
          <div class="wp-pagenavi__items">
            <?php previous_post_link('%link', 'PREV'); ?>
          </div>
          <div class="wp-pagenavi__items">
            <a class="page smaller" href="<?php echo home_url('/works'); ?>">一覧</a>
          </div>
          <div class="wp-pagenavi__items">
            <?php next_post_link('%link', 'NEXT'); ?>
          </div>
        <!-- <a class="previouspostslink" rel="prev" href="#">PREV</a>
        <a class="nextpostslink" rel="next" href="#">NEXT</a> -->
      </div>
    </div>
  </div>
</section>

<section class="sub-single-related sub-single-work-related-layout">
  <div class="inner">
    <h2 class="sub-single-related__button">
      <a class="button button--pc-width-block" href="#">関連記事</a>
    </h2>
    <div class="sub-single-related__cards sub-single-cards">

    <?php if(has_category()) {
      $cats = get_the_category();
      $catkwds = array();
      foreach($cats as $cat) {
        $catkwds[] = $cat->term_id;
      }
    } ?>
    <?php $args = array(
      'post_type' => 'works',
      'post_per_page' => '4',
      'post__not_in' => array( $post->ID ),
      'category__in' => $catkwds,
      'orderby' => 'rand'
    );
    $my_query = new WP_Query( $args ); ?>
    <?php while ( $my_query->have_posts()): $my_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="sub-single-cards__item sub-single-card">
        <div class="sub-single-card__image"><?php the_post_thumbnail('medium'); ?></div>
        <div class="sub-single-card__body">
          <div class="sub-single-card__title"><?php the_title(); ?></div>
          <?php $worksfield4 = get_post_meta(get_the_ID(), 'work-explanation',true); ?>
          <div class="sub-single-card__excerpt u-mobile"><?php echo $worksfield4; ?></div>
          <div class="sub-single-card__headding">
            <?php $terms = get_the_terms($post->ID,'genre'); ?>
            <div class="sub-single-card__category"><?php echo $terms[0]->name; ?></div>
            <time class="sub-single-card__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
          </div>
        </div>
      </a>    
      <!-- <a href="#" class="sub-single-cards__item sub-single-card">
        <div class="sub-single-card__image"><img src="./images/single-works/sub-single-works-image-sp-02.jpg" alt="ブログのサムネイル"></div>
        <div class="sub-single-card__body">
          <div class="sub-single-card__title">タイトルが入ります。タイトルが入ります。</div>
          <div class="sub-single-card__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</div>
          <div class="sub-single-card__headding">
            <div class="sub-single-card__category">カテゴリ</div>
            <time class="sub-single-card__time" datetime="2021-07-20">2021.07.20</time>
          </div>
        </div>
      </a>    
      <a href="#" class="sub-single-cards__item sub-single-card">
        <div class="sub-single-card__image"><img src="./images/single-works/sub-single-works-image-sp-03.jpg" alt="ブログのサムネイル"></div>
        <div class="sub-single-card__body">
          <div class="sub-single-card__title">タイトルが入ります。タイトルが入ります。</div>
          <div class="sub-single-card__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</div>
          <div class="sub-single-card__headding">
            <div class="sub-single-card__category">カテゴリ</div>
            <time class="sub-single-card__time" datetime="2021-07-20">2021.07.20</time>
          </div>
        </div>
      </a>    
      <a href="#" class="sub-single-cards__item sub-single-card">
        <div class="sub-single-card__image"><img src="./images/single-works/sub-single-works-image-sp-04.jpg" alt="ブログのサムネイル"></div>
        <div class="sub-single-card__body">
          <div class="sub-single-card__title">タイトルが入ります。タイトルが入ります。</div>
          <div class="sub-single-card__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</div>
          <div class="sub-single-card__headding">
            <div class="sub-single-card__category">カテゴリ</div>
            <time class="sub-single-card__time" datetime="2021-07-20">2021.07.20</time>
          </div>
        </div>
      </a> -->
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>