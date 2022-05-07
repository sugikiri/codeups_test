<?php get_header(); ?>

 <section class="sub-main-visual sub-works-main-visual-layout js-height-get">
     <figure class="sub-main-visual__image u-mobile"><img src="<?php echo get_template_directory_uri(); ?>/images/works/sub-works-mainvisual-sp.png" alt="制作実績のメインビジュアル"></figure>
     <figure class="sub-main-visual__image u-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/works/sub-works-mainvisual-pc.png" alt="制作実績のメインビジュアル"></figure>
     <h1 class="sub-main-visual__title sub-main-visual__title--works">企業概要</h1>   
</section>


<section class="breadcrumb sub-company-breadcrumb-layout">
    <div class="inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<dl class="sub-company-content sub-company-content-layout">
    <div class="inner">        
        <div class="sub-company-content__raw">
            <?php $company_name = get_post_meta(get_the_ID(), 'company_name',true); ?>
            <dt>会社名</dt>
            <dd><?php echo $company_name; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_date = get_post_meta(get_the_ID(), 'company_date',true); ?>
            <dt>設立</dt>
            <dd><?php echo $company_date; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_money = get_post_meta(get_the_ID(), 'company_money',true); ?>
            <dt>資本金</dt>
            <dd><?php echo $company_money; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_benefit = get_post_meta(get_the_ID(), 'company_benefit',true); ?>
            <dt>売上高</dt>
            <dd><?php echo $company_benefit; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_ceo = get_post_meta(get_the_ID(), 'company_ceo',true); ?>
            <dt>代表者</dt>
            <dd><?php echo $company_ceo; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_employees = get_post_meta(get_the_ID(), 'company_employees',true); ?>
            <dt>従業員数</dt>
            <dd><?php echo $company_employees; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_content = get_post_meta(get_the_ID(), 'company_content',true); ?>
            <dt>事業内容</dt>
            <dd><?php echo $company_content; ?></dd>
        </div>
        <div class="sub-company-content__raw">
            <?php $company_location = get_post_meta(get_the_Id(), 'company_location', true); ?>
            <dt>所在地</dt>
            <dd><?php echo $company_location; ?></dd>
        </div>
    </div>
</dl>

<div class="sub-company-map sub-company-map-layout">
    <div class="sub-company-map__inner">
        <?php $company_location_encode = urlencode($company_location);
        ?>
        <div class="sub-company-map__wrapper">
        <iframe src="https://maps.google.co.jp/maps?output=embed&amp;q=<?php echo $company_location_encode ;?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
    </div>
</div>

  
<?php get_footer(); ?>