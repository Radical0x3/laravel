import $ from "jquery";
import PerfectScrollbar from "perfect-scrollbar";
import Scrollbar from "smooth-scrollbar";
require("slick-carousel");

const container = document.querySelector(".goods");
const ps = new PerfectScrollbar(container, {
  wheelSpeed: 1,
  wheelPropagation: true,
  minScrollbarLength: 20,
  maxScrollbarLength: 200,
});

$(document).ready(function () {
  // Scrollbar.initAll({
  //   alwaysShowTracks: true,
  // });

  testWebP(function (support) {
    if (support === true) {
      document.querySelector("body").classList.add("webp");
    } else {
      document.querySelector("body").classList.add("no-webp");
    }
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
  $(".js-accordion-btn").on("click", function (event) {
    const currentNode = event.target.closest(".js-accordion-btn");
    const accordionHeader = $(this).parents(".js-accordion-header");

    if (!currentNode) return;

    const targetNode = $(accordionHeader).siblings(".js-accordion-body");

    if (targetNode.is(":visible")) {
      $(accordionHeader).removeClass("active");
      targetNode.slideUp();
    } else {
      $(".js-accordion-header.active").removeClass("active");
      $(".js-accordion-body").slideUp();
      $(accordionHeader).addClass("active");
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
  if (window.innerWidth >= 1200) {
    $(document).on("mouseup", function (e) {
      let elem = $(".js-accordion-body");

      if (
        accordionContainer.has(e.target).length === 0 &&
        elem.has(e.target).length === 0
      ) {
        $(elem).slideUp();
        $(accordionContainer).removeClass("active");
      }
    });
  } else {
    $(document).off("mouseup");
  }

  // Search form submit
  $(".js-search-submit").on("click", function () {
    $(this).parents("form").submit();
  });

  // Hamburger
  $(".js-main-hamburger").on("click", function () {
    const mobileMenu = $(".js-mobile");
    const blur = $(".js-main-blur");

    if (!$(this).hasClass("active")) {
      $(this).addClass("active");
      mobileMenu.addClass("active");
      blur.addClass("active");
      bodyLock();
    } else {
      $(this).removeClass("active");
      mobileMenu.removeClass("active");
      blur.removeClass("active");
      bodyUnlock();
    }
  });
});

// Close the hamburger when blur area was clicked
$(".js-main-blur").on("click", function () {
  const mobileMenu = $(".js-mobile");
  const hamburger = $(".js-main-hamburger");

  mobileMenu.removeClass("active");
  hamburger.removeClass("active");
  $(this).removeClass("active");
  bodyUnlock();
});

function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height === 2);
  };
  webP.src =
    "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

let unlock = true;
const timeout = 200;
const body = document.querySelector("body");
const root = document.querySelector("html");
const lockPadding = document.querySelectorAll(".lock-padding");

function bodyLock() {
  const lockPaddingValue =
    window.innerWidth - document.querySelector("body").offsetWidth + "px";
  if (lockPadding.length > 0) {
    for (let i = 0; i < lockPadding.length; i++) {
      const el = lockPadding[i];
      el.style.paddingRight = lockPaddingValue;
    }
  }
  body.style.paddingRight = lockPaddingValue;
  root.classList.add("lock");

  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}

function bodyUnlock() {
  setTimeout(function () {
    for (let i = 0; i < lockPadding.length; i++) {
      const el = lockPadding[i];
      el.style.paddingRight = "0px";
    }
    body.style.paddingRight = "0px";
    root.classList.remove("lock");
  }, timeout);

  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}
