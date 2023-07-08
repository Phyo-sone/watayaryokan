$(function () {
  let scrollPosition;
  $("#toggle").click(function () {
    if ($(this).hasClass("open")) {
      scrollPosition = $(window).scrollTop();

      //ハンバーガーボタンの切り替え
      $(this).addClass("close");
      $(this).removeClass("open");

      //グローバルメニューの表示
      $("#global-menu").addClass("show");

      //bodyの高さをスクロール位置で固定
      $("body").addClass("fixed").css({ top: -scrollPosition });
      $(".page-header").css({ top: 0 });
    } else {
      //ハンバーガーボタンの切り替え
      $(this).addClass("open");
      $(this).removeClass("close");

      //グローバルメニューの非表示
      $("#global-menu").removeClass("show");

      $("body").removeClass("fixed").css({ top: 0 });
      $(".page-header").removeAttr("style");

      window.scrollTo(0, scrollPosition);
    }
  });
});

// particlesJS("particles-js", {
//   particles: {
//     number: {
//       value: 38, //この数値を変更すると幾何学模様の数が増減できる
//       density: {
//         enable: true,
//         value_area: 800,
//       },
//     },
//     color: {
//       value: "#028402", //色
//     },
//     shape: {
//       type: "polygon", //形状はpolygonを指定
//       stroke: {
//         width: 0,
//       },
//       polygon: {
//         nb_sides: 3, //多角形の角の数
//       },
//       image: {
//         width: 190,
//         height: 100,
//       },
//     },
//     opacity: {
//       value: 0.664994832269074,
//       random: false,
//       anim: {
//         enable: true,
//         speed: 2.2722661797524872,
//         opacity_min: 0.08115236356258881,
//         sync: false,
//       },
//     },
//     size: {
//       value: 3,
//       random: true,
//       anim: {
//         enable: false,
//         speed: 40,
//         size_min: 0.1,
//         sync: false,
//       },
//     },
//     line_linked: {
//       enable: true,
//       distance: 150,
//       color: "#028402",
//       opacity: 0.6,
//       width: 1,
//     },
//     move: {
//       enable: true,
//       speed: 6, //この数値を小さくするとゆっくりな動きになる
//       direction: "none", //方向指定なし
//       random: false, //動きはランダムにしない
//       straight: false, //動きをとどめない
//       out_mode: "out", //画面の外に出るように描写
//       bounce: false, //跳ね返りなし
//       attract: {
//         enable: false,
//         rotateX: 600,
//         rotateY: 961.4383117143238,
//       },
//     },
//   },
//   interactivity: {
//     detect_on: "canvas",
//     events: {
//       onhover: {
//         enable: false,
//         mode: "repulse",
//       },
//       onclick: {
//         enable: false,
//       },
//       resize: true,
//     },
//   },
//   retina_detect: true,
// });

// particlesJS("particles-js", {
//   particles: {
//     number: { value: 63, density: { enable: true, value_area: 800 } },
//     color: { value: "#099131" },
//     shape: {
//       type: "circle",
//       stroke: { width: 0, color: "#028402" },
//       polygon: { nb_sides: 5 },
//       image: { src: "img/github.svg", width: 100, height: 100 },
//     },
//     opacity: {
//       value: 0.5,
//       random: false,
//       anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
//     },
//     size: {
//       value: 3,
//       random: true,
//       anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
//     },
//     line_linked: {
//       enable: true,
//       distance: 150,
//       color: "#028402",
//       opacity: 0.4,
//       width: 1,
//     },
//     move: {
//       enable: true,
//       speed: 6,
//       direction: "none",
//       random: false,
//       straight: false,
//       out_mode: "out",
//       bounce: false,
//       attract: { enable: false, rotateX: 600, rotateY: 1200 },
//     },
//   },
//   interactivity: {
//     detect_on: "canvas",
//     events: {
//       onhover: { enable: true, mode: "repulse" },
//       onclick: { enable: true, mode: "push" },
//       resize: true,
//     },
//     modes: {
//       grab: { distance: 400, line_linked: { opacity: 1 } },
//       bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
//       repulse: { distance: 200, duration: 0.4 },
//       push: { particles_nb: 4 },
//       remove: { particles_nb: 2 },
//     },
//   },
//   retina_detect: true,
// });



