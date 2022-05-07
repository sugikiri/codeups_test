<?php get_header(); ?>

 <section class="sub-main-visual sub-contact-main-visual-layout js-height-get">
     <figure class="sub-main-visual__image u-mobile"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/sub-contact-mainvisual-sp.png" alt="お問合せページのメインビジュアル"></figure>
     <figure class="sub-main-visual__image u-desktop"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/sub-contact-mainvisual-pc.png" alt="お問合せページのメインビジュアル"></figure>
     <h1 class="sub-main-visual__title">お問い合わせ</h1>   
</section>


<section class="breadcrumb sub-contact-breadcrumb-layout">
    <div class="breadcrumb__inner">
        <h2 class="breadcrumb__text"><?php bcn_display(); ?></h2>
    </div>
</section>

<div class="sub-contact-content sub-contact-content-layout">
    <div class="sub-contact-content__inner">
        <?php echo do_shortcode('[contact-form-7 id="100" title="お問い合わせ"]'); ?>
    
        <!-- <form action="" class="sub-contact-content__form contact-form">
            <dl class="contact-form__dl">
                <div class="contact-form__row">
                    <dt class="contact-form__label contact-form__label--center"><label for="your-company">※会社名</label></dt>
                    <dd class="contact-form__input"><input type="text" name="" id="your-company" placeholder="テキストがはいります"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label contact-form__label--center"><label for="your-department">※部署名</label></dt>
                    <dd class="contact-form__input"><input type="text" name="" id="your-department" placeholder="テキストがはいります"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label contact-form__label--center"><label for="your-name">※お名前</label></dt>
                    <dd class="contact-form__input"><input type="text" name="" id="your-name" placeholder="テキストがはいります"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label contact-form__label--center"><label for="your-furigana">※ふりがな</label></dt>
                    <dd class="contact-form__input"><input type="text" name="" id="your-furigana" placeholder="テキストがはいります"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label contact-form__label--center"><label for="your-email">※メールアドレス</label></dt>
                    <dd class="contact-form__input"><input type="email" name="" id="your-email" placeholder="テキストがはいります"></dd>
                </div>
                <div class="contact-form__row">
                    <dt class="contact-form__label"><label for="your-message">※お問い合わせ内容</label></dt>
                    <dd class="contact-form__input"><textarea name="" id="your-message" placeholder="テキストがはいります"></textarea></dd>
                </div>
            </dl>
            <div class="contact-form__radio">
                <label><input type="radio" name="your-radio" id="" checked><span>ラジオ１</span></label>
                <label><input type="radio" name="your-radio" id=""><span>ラジオ２</span></label>
                <label><input type="radio" name="your-radio" id=""><span>ラジオ３</span></label>
            </div>
            <div class="contact-form__check">
                <label><input type="checkbox" name="" id=""><span><a href="">プライバシーポリシー</a>に合意する</span></label>
            </div>
            <div class="contact-form__button">
                <input type="submit" value="送信">
            </div>
        </form> -->

    </div>
</div>



<?php  get_footer(); ?>