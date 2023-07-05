//hamburger menu
console.log("aaaaaa");

$(function () {
    console.log("bbb");
    var toggleBtn = $("#toggleBtn");
    var headerNav = $("#headerNav");
    //   var navLink = $(".header__nav__list__link");
    //   var accordionLink = $(".hederNavAccordionLink");
    var headerNavLink = $(".headerNav__list");
    // クラスの付け外し
    var toggle = function (baseSelector, addClass) {
        baseSelector.toggleClass(addClass);
    };
    // ハンバーガーメニューのクリックイベント
    toggleBtn.on("click", function () {
        console.log("menu-opened");
        toggle(toggleBtn, "navToggleBtn--close");
        toggle(headerNav, "headerNav--opened");
    });
    //   navLink.on("click", function () {
    //     toggle(toggleBtn, "navToggleBtn--close");
    //     toggle(headerNav, "header__nav--opened");
    //   });
    //   accordionLink.on("click", function () {
    //     toggle(toggleBtn, "navToggleBtn--close");
    //     toggle(headerNav, "header__nav--opened");
    //   });
    headerNavLink.on("click", function () {
        toggle(toggleBtn, "navToggleBtn--close");
        toggle(headerNav, "headerNav--opened");
    });
});

//スマホ・タブレットでメニューopen時に背景スクロールをとめる
// var mediaQuery = matchMedia("(max-width: 959px)");

$(function () {
    ".slider".slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
    });
});



// bubbly({
//   colorStart: "#fff4e6",
//   colorStop: "#ffe9e4",
//   blur: 1,
//   compose: "source-over",
//   bubbleFunc: () => `hsla(${Math.random() * 50}, 100%, 50%, .3)`,
// });

// wavify({
//   height: 60,
//   bones: 3,
//   amplitude: 40,
//   color: "#0bd",
//   speed: 0.25,
// });

// $(function () {
//   $(window).scroll(function () {
//     $("animate__animated animate__wobble").each(function () {
//       var scroll = $(window).scrollTop();
//       var blockPosition = $(this).offset().top;
//       var windowHeihgt = $(window).height();
//       if (scroll > blockPosition - windowHeihgt + 300) {
//         $(this).addClass("isActive");
//       }
//     });
//   });
// });

// $(function () {
//   var _window = $(window),
//     _header = $(".header"),
//     toppageBottom;

//   _window.on("scroll", function () {
//     toppagebottom = $(".toppage").height();
//     if (_window.scrollTop() > toppageBottom) {
//       _header.addClass("transform");
//     } else {
//       _header.removeClass("transform");
//     }
//   });

//   _window.trigger("scroll");
// });

jQuery(window).on("scroll", function () {
    if (700 < jQuery(this).scrollTop()) {
        jQuery(".header").addClass("change-color");
    } else {
        jQuery(".header").removeClass("change-color");
    }
});



// function toggleDarkMode() {
//     var body = document.querySelector("body");
//     var nav = document.querySelector("nav");
//     var toggle = document.querySelector(".nav-toggle");
//     var h1 = document.querySelector("h1");

//     body.classList.toggle("dark-mode");
//     nav.classList.toggle("dark-mode");
//     toggle.classList.toggle("dark-mode");
//     h1.classList.toggle("dark-mode");

//     if (body.classList.contains("dark-mode")) {
//         toggle.setAttribute("aria-checked", true);
//         toggle.setAttribute("title", "Light Mode");
//     } else {
//         toggle.setAttribute("aria-checked", false);
//         toggle.setAttribute("title", "Dark Mode");
//     }
// }

// var toggleButton = document.querySelector(".nav-toggle");

// toggleButton.addEventListener("click", toggleDarkMode);


function toggleDarkMode() {
    var body = document.querySelector("body");
    var nav = document.querySelector("nav");
    var toggle = document.querySelector(".nav-toggle");
    var h1 = document.querySelector("h1");
    var p = document.querySelector("p");
    var link = document.querySelector(".nav-link"); // 新しい<a>要素を取得
    var div = document.querySelector(".nav-bar"); // 新しい<a>要素を取得
    var h4 = document.querySelector("h4");
    var span = document.querySelector("sub-title");
    var pseudoElement = document.querySelector(".pseudo-element");


    body.classList.toggle("dark-mode");
    nav.classList.toggle("dark-mode");
    toggle.classList.toggle("dark-mode");
    h1.classList.toggle("dark-mode");
    p.classList.toggle("dark-mode");
    div.classList.toggle("dark-mode");
    h4.classList.toggle("dark-mode");
    span.classList.toggle("dark-mode");
    pseudoElement.classList.toggle("pseudoElement");


    link.classList.toggle("dark-mode"); // 新しい<a>要素にクラスを追加/削除

    if (body.classList.contains("dark-mode")) {
        pseudoElement.style.color = "#ffffff";
        toggle.setAttribute("aria-checked", true);
        toggle.setAttribute("title", "Light Mode");

    } else {
        pseudoElement.style.color = "#000000";
        toggle.setAttribute("aria-checked", false);
        toggle.setAttribute("title", "Dark Mode");

    }
}

var toggleButton = document.querySelector(".nav-toggle");
// toggleButton.addEventListener("click", toggleDarkMode);

