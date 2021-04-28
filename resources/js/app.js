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

$(document).ready(function () {
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

  rebuildHeader();
  $(window).on("resize", function () {
    rebuildHeader();
  });

  // Initialise slider
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

  // Accordion
  $(".js-accordion").on("click", function (event) {
    const currentNode = event.target.closest(".js-accordion-header");

    if (!currentNode) return;

    const targetNode = $(currentNode).siblings(".js-accordion-body");

    if (targetNode.is(":visible")) {
      $(currentNode).removeClass("active");
      targetNode.slideUp();
    } else {
      $(".js-accordion-header.active").removeClass("active");
      $(".js-accordion-body").slideUp();
      $(currentNode).addClass("active");
      targetNode.slideDown({
        start: function () {
          $(this).css({
            display: "flex",
          });
        },
      });
    }
  });

  let accordionContainer = $(".js-accordion-header");
  $(document).mouseup(function (e) {
    let elem = $(".js-accordion-body");

    if (
      accordionContainer.has(e.target).length === 0 &&
      elem.has(e.target).length === 0
    ) {
      $(elem).slideUp();
      $(accordionContainer).removeClass("active");
    }
  });
});

// Search form submit
$(".js-search-submit").on("click", function () {
  $(this).parents("form").submit();
  console.log(123);
});

function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height === 2);
  };
  webP.src =
    "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

function rebuildHeader() {
  const menu = $(".js-menu-wrap");
  const userButton = $(".js-user-button-wrap");
  const windowInnerWidth = window.innerWidth;

  if (!menu) return;

  if (windowInnerWidth < 1200) {
    $(".js-row-2").append(menu);
    $(menu).addClass("col-12 pt-3 pb-2");

    $(userButton).insertAfter(".js-logo-wrap");
  } else {
    $(menu).insertAfter(".js-logo-wrap");
    $(menu).removeClass("col-12 pt-3 pb-2");

    $(".js-row-2").append(userButton);
  }
}
