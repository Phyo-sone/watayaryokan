
$(function () {
  $(".slider2").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: true, // スライドを中央に配置する
    dots: true,
    dotsClass: 'slick-dots',
    autoplaySpeed: 2000,
    prevArrow: '<button type="button" class="slick-prev prev-arrow">＜</button>',
    nextArrow: '<button type="button" class="slick-next next-arrow">＞</button>',
    responsive: [
      {
        breakpoint: 950,
        settings: {
          slidesToShow: 1, //画面幅750px以下でスライド3枚表示
        },
      },
    ],    // add margin between slides
    centerPadding: '30px',
  });
});



$(function () {
  $(".slider").slick({
    autoplay: true,
    adaptiveHeight: true,
    autoplaySpeed: 2000, // スライド切り替えの間隔を3秒に設定
    arrows: false
  });
});
