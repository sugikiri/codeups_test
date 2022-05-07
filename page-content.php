<?php get_header(); ?>

 <section class="sub-main-visual sub-content-main-visual-layout js-height-get">
     <figure class="sub-main-visual__image u-mobile"><img src="<?php echo get_template_directory_uri(); ?>/images/content/sub-content-mainvisual-sp.png" alt="事業内容のメインビジュアル"></figure>
     <figure class="sub-main-visual__image u-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/content/sub-content-mainvisual-pc.png" alt="事業内容のメインビジュアル"></figure>
     <h1 class="sub-main-visual__title">事業内容</h1>   
</section>


<section class="breadcrumb sub-content-breadcrumb-layout">
    <div class="inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<section class="sub-content-heading sub-content-heading-layout">
  <div class="inner sub-content-heading__inner">
    <h2 class="sub-content-heading__title">企業理念</h2>
    <div class="sub-content-heading__lead">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
  </div>
</section>


<section class="sub-content-cards sub-content-cards-layout">
  <div class="inner sub-content-cards__inner">
    <div class="sub-content-cards__item sub-content-card">
      <figure class="sub-content-card__image">
          <?php $content_image01 = get_post_meta(get_the_ID(), 'content_image_01', true); ?>
          <img src="<?php echo wp_get_attachment_image($content_image01, 'large'); ?>" alt="企業理念１の写真">
      </figure>
      <div class="sub-content-card__body">
        <h3 class="sub-content-card__title">企業理念１</h3>
        <?php $content_text01 = get_post_meta(get_the_ID(), 'content_text_01', true); ?>
        <p class="sub-content-card__text">
            <?php echo $content_text01; ?>
        </p>
      </div>
    </div>
    <div class="sub-content-cards__item sub-content-card">
      <figure class="sub-content-card__image">
          <?php $content_image02 = get_post_meta(get_the_ID(), 'content_image_02', true); ?>
          <img src="<?php echo wp_get_attachment_image($content_image02, 'large'); ?>" alt="企業理念２の写真">
      </figure>
      <div class="sub-content-card__body">
        <h3 class="sub-content-card__title">企業理念２</h3>
        <?php $content_text02 = get_post_meta(get_the_ID(), 'content_text_02', true); ?>
        <p class="sub-content-card__text">
            <?php echo $content_text02; ?>
        </p>
      </div>
    </div>
    <div class="sub-content-cards__item sub-content-card">
      <figure class="sub-content-card__image">
          <?php $content_image03 = get_post_meta(get_the_ID(), 'content_image_03', true); ?>
          <img src="<?php echo wp_get_attachment_image($content_image03, 'large'); ?>" alt="企業理念３の写真">
      </figure>
      <div class="sub-content-card__body">
        <h3 class="sub-content-card__title">企業理念３</h3>
        <?php $content_text03 = get_post_meta(get_the_ID(), 'content_text_03', true); ?>
        <p class="sub-content-card__text">
            <?php echo $content_text03; ?>
        </p>
      </div>
    </div>
  </div>
</section>

  
<?php get_footer(); ?>