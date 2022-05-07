<?php get_header(); ?>



<section class="breadcrumb sub-single-works-breadcrumb-layout">
    <div class="breadcrumb__inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>


<?php  if( have_posts()): ?>
    <?php while( have_posts()): the_post();?>

<section class="sub-single-heading single-works-heading-layout">
    <div class="sub-single-heading__inner">
        <h1 class="sub-single-heading__title"><?php the_title(); ?></h1>
        <div class="sub-single-heading__index">
            <time class="sub-single-heading__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
            <div class="sub-single-heading__category"><?php echo esc_html(get_the_category(get_the_ID())[0]->name); ?></div>
        </div>
    </div>
</section>




<section class="sub-single-blog-content sub-single-blog-content-layout">
  <div class="sub-single-blog-content__inner">
    <div class="sub-single-blog-content__image">
        <?php if(has_post_thumbnail()) {
            the_post_thumbnail('large');
        } else {
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/noimg.png" alt="外国人男性が講義を行なっている写真">';
        }
        ?>
    </div>
    <div class="sub-single-blog-content__text">
        <?php the_content(); ?>
    </div>    
    
    <div class="sub-single-blog-content__pagenation pagenation">
      <div class='wp-pagenavi'>
          <div class="wp-pagenavi__items">
            <?php previous_post_link('%link', 'PREV'); ?>
          </div>
          <div class="wp-pagenavi__items">
            <a class="page smaller" href="<?php echo home_url('/news'); ?>">一覧</a>
          </div>
          <div class="wp-pagenavi__items">
            <?php next_post_link('%link', 'NEXT'); ?>
          </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<section class="sub-single-related sub-single-blog-related-layout">
  <div class="inner">
    <h2 class="sub-single-related__button">
      <a class="button button--pc-width-block" href="#">関連記事</a>
    </h2>
    <div class="sub-single-related__cards sub-single-cards">
    
            <?php if(has_category()){
                $cats = get_the_category();
                $catkwds = array();
                foreach( $cats as $cat) {
                    $catkwds[] = $cat->term_id;
                }
            }
           ?>
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => '4',
                'post__not_in' => array( $post->ID),
                'category__in' => $catkwds,
                'orderby' => 'rand'
            );
            
            $my_query = new WP_Query( $args ); ?>
            <?php while($my_query->have_posts()): $my_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="sub-single-cards__item sub-single-card">
        <div class="sub-single-card__image"><?php the_post_thumbnail('medium'); ?></div>
        <div class="sub-single-card__body">
          <div class="sub-single-card__title"><?php the_title(); ?></div>
          <div class="sub-single-card__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</div>
          <div class="sub-single-card__headding">
              <?php $terms = get_the_category(); ?>
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