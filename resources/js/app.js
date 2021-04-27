import $ from "jquery";
import Scrollbar from "smooth-scrollbar";
require("slick-carousel");

// const container = document.querySelector(".goods");
// const ps = new PerfectScrollbar(container, {
//   wheelSpeed: 1,
//   wheelPropagation: true,
//   minScrollbarLength: 20,
//   maxScrollbarLength: 200,
// });

Scrollbar.initAll({
  alwaysShowTracks: true,
});

testWebP(function (support) {
  if (support === true) {
    document.querySelector("body").classList.add("webp");
  } else {
    document.querySelector("body").classList.add("no-webp");
  }
});

const categoriesSlider = $(".categories__list");
if (categoriesSlider) {
  categoriesSlider.slick({
    slidesToShow: 6,
    arrows: false,
    variableWidth: true,
    autoplay: false,
    autoplaySpeed: 2000,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1501,
        settings: {
          slidesToShow: 5,
          arrows: false,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 3,
          arrows: false,
          dots: true,
          variableWidth: false,
        },
      },
      {
        breakpoint: 577,
        settings: {
          slidesToShow: 2,
          arrows: false,
          dots: true,
          variableWidth: false,
        },
      },
      {
        breakpoint: 350,
        settings: {
          slidesToShow: 1,
          arrows: false,
          dots: true,
          variableWidth: false,
        },
      },
    ],
  });
}

function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height === 2);
  };
  webP.src =
    "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}
