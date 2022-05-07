
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

});

// swiperの設定
const swiper1 = new Swiper('.js-mv-slider', {
  // Optional parameters
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
    reverseDirection: false,
  },
});

const swiper2 = new Swiper('.js-works-slider', {
  // Optional parameters
  loop: true,
  autoplay: {
    delay: 4000,
    stopOnLastSlide: false,
    disableOnInteraction: false,
    reverseDirection: false,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

// ドロワーメニュー表示・非表示の動き
jQuery('.js-hamburger').on('click',function(e){
  e.preventDefault();

  jQuery('.js-hamburger').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-background').toggleClass('is-active');
  // jQuery('.drawer-content').toggleClass('is-active');

  return false;
});

jQuery('.drawer-background').on('click',function(e){
  jQuery('.js-hamburger').removeClass('is-active');
  jQuery('.drawer-content').removeClass('is-active');
  jQuery('.drawer-background').removeClass('is-active');
  return false;
});

// トップへ戻るボタンの表示
jQuery(window).on("scroll", function($){
  if (jQuery(this).scrollTop() > 100) {
    jQuery('.to-top').show();
  } else {
    jQuery('.to-top').hide();
  }
});

jQuery('.to-top').click(function(){
  jQuery('body,html').animate({
    scrollTop: 0
  },300,'swing');
  return false;
});

//メインビジュアル通過後のヘッダー背景変化
jQuery(window).on("scroll",function(){
  var height = jQuery('.js-height-get').height();
  if(jQuery(window).scrollTop() > height) {
    jQuery('.header').addClass('js-background-change');
    jQuery('.nav__list--contact').addClass('js-background-change');
  } else {
    jQuery('.header').removeClass('js-background-change');
    jQuery('.nav__list--contact').removeClass('js-background-change');
  }
});


// 以下未使用
// jQuery(window).on("scroll",function(){
//   var height = $(window).height();
//   if($(window).scrollTop() > height) {
//     $('.header').addClass('js-background-change');
//     $('.nav__list--contact').addClass('js-background-change');
//   } else {
//     $('.header').removeClass('js-background-change');
//     $('.nav__list--contact').removeClass('js-background-change');
//   }
// });
// 以下未使用ここまで

// PC時のボタンのスワイプ(仕様の解釈ミスにより使用せず)
// if($('section').hasClass('top__announce')){
//   jQuery(window).on('scroll',function(){
//     let buttonSwitch = jQuery('.top__announce').offset().top;
//     let adjustment = 300;
//     let buttonSwitch1 = buttonSwitch - adjustment;
//     if(jQuery(window).scrollTop() > buttonSwitch1) {
//       jQuery('.announce__button').addClass('js-left-scroll');
//     }
//   });
// };

// if($('section').hasClass('works')){
//   jQuery(window).on('scroll',function(){
//     let buttonSwitch = jQuery('.works').offset().top;
//     let adjustment = 300;
//     let buttonSwitch2 = buttonSwitch - adjustment;
//     if(jQuery(window).scrollTop() > buttonSwitch2) {
//       jQuery('.works__button').addClass('js-left-scroll');
//     }
//   });
// };

// if($('section').hasClass('overview')){
//   jQuery(window).on('scroll',function(){
//     let buttonSwitch = jQuery('.overview').offset().top;
//     let adjustment = 300;
//     let buttonSwitch3 = buttonSwitch - adjustment;
//     if(jQuery(window).scrollTop() > buttonSwitch3) {
//       jQuery('.overview__button').addClass('js-left-scroll');
//     }
//   });
// };

// if($('section').hasClass('blog')){
//   jQuery(window).on('scroll',function(){
//     let buttonSwitch = jQuery('.blog').offset().top;
//     let adjustment = 300;
//     let buttonSwitch4 = buttonSwitch - adjustment;
//     if(jQuery(window).scrollTop() > buttonSwitch4) {
//       jQuery('.blog-cards__button').addClass('js-left-scroll');
//     }
//   });
// };

// if($('section').hasClass('contact')){
//   jQuery(window).on('scroll',function(){
//     let buttonSwitch = jQuery('.footer').offset().top; 
//     let buttonSwitch5 = buttonSwitch - $(window).height();
//     if(jQuery(window).scrollTop() > buttonSwitch5) {
//       jQuery('.contact__button').addClass('js-left-scroll');
//     }
//   });
// };
// PC時のボタンのスワイプ(仕様の解釈ミスにより使用せず)ここまで


// 以下未使用
// if($('section').hasClass('contact')){
//   jQuery(window).on('scroll',function(){
//     let buttonSwitch = jQuery('.contact').offset().top; 
//     let buttonSwitch5 = buttonSwitch - $(window).height() +300;
//     if(jQuery(window).scrollTop() > buttonSwitch5) {
//       jQuery('.contact__button').addClass('js-left-scroll');
//     }
//   });
// };

// if($('section').hasClass('contact')){
//   jQuery(window).on('scroll',function(){
//     let pageHeight = jQuery(document).innerHeight; 
//     let windowHeight = jQuery(window).innerHeight; 
//     let buttonSwitch5 = pageHeight - windowHeight;
//     if(jQuery(window).scrollTop() >= buttonSwitch5 * 0.9) {
//       jQuery('.contact__button').addClass('js-left-scroll');
//     }
//   });
// };
// 以下未使用ここまで

// single-worksのメインビジュアル
const slideLength = document.querySelectorAll('.sub-single-work-main-visual__primary-content').length
console.log(slideLength);

const swiper3 = new Swiper('.js-sub-single-works-primary', {
  // Optional parameters

  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: slideLength, //スライドの枚数と同じ値を指定

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});

const swiper4 = new Swiper('.js-sub-single-works-secondary', {
  // Optional parameters
  loop: true,
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 24,
  slideToClickedSlide: true,

  breakpoints: {
    // 画面幅が 640px 以上の場合（window width >= 640px）
    768: {
      spaceBetween: 8
    }
  },
});

swiper3.controller.control = swiper4;
swiper4.controller.control = swiper3;