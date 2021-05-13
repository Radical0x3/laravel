import "./import-jquery";
import "slick-carousel";
import SimpleBar from "simplebar";
import "@fancyapps/fancybox";
import lozad from "lozad";
// import "lazysizes";
// import "lazysizes/plugins/parent-fit/ls.parent-fit";
import MobileDetect from "mobile-detect";
const md = new MobileDetect(window.navigator.userAgent);

$(document).ready(function () {
  const observer = lozad();
  observer.observe();

  testWebP(function (support) {
    if (support === true) {
      document.querySelector("body").classList.add("webp");
    } else {
      document.querySelector("body").classList.add("no-webp");
    }
  });

  if (!md.mobile()) {
    const scrollbar = document.querySelector(".js-scrollbar");

    if (scrollbar) {
      new SimpleBar(scrollbar);
    }

    $(".js-cart-button").hover(
      function () {
        $(this).find(".js-cart-info").addClass("active");
      },
      function () {
        $(this).find(".js-cart-info").removeClass("active");
      }
    );
  } else if (md.mobile()) {
    const mobileMenu = $(".js-mobile");
    const burger = $(".js-main-hamburger");
    const blur = $(".js-main-blur");
    const gestureZone = document;

    let touchstartX = 0;
    let touchstartY = 0;
    let touchendX = 0;
    let touchendY = 0;

    gestureZone.addEventListener(
      "touchstart",
      function (event) {
        touchstartX = event.changedTouches[0].screenX;
        touchstartY = event.changedTouches[0].screenY;
      },
      false
    );

    gestureZone.addEventListener(
      "touchend",
      function (event) {
        touchendX = event.changedTouches[0].screenX;
        touchendY = event.changedTouches[0].screenY;
        handleGesture(event);
      },
      false
    );

    function handleGesture(event) {
      const sliderArea = event.target.closest(".js-categories-list");
      const scrollbarArea = event.target.closest(".js-scrollbar");
      const diff = touchstartY - touchendY;

      if (sliderArea || scrollbarArea) return;

      if (diff < -10 || diff > 10) return;

      // Swiped left
      if (touchendX < touchstartX) {
        if (burger.hasClass("active")) {
          burger.removeClass("active");
          mobileMenu.removeClass("active");
          blur.removeClass("active");
          $(".js-mobile-sublist.mobile-sublist_opened").removeClass(
            "mobile-sublist_opened"
          );
          bodyUnlock();
        }
      }

      // Swiped right
      if (touchendX > touchstartX) {
        if (!burger.hasClass("active")) {
          burger.addClass("active");
          mobileMenu.addClass("active");
          blur.addClass("active");
          bodyLock();
        }
      }
    }
  }

  // Basket popup
  $(".js-popup").fancybox({
    touch: false,
    beforeShow: function () {
      $("html").css({ "overflow-y": "hidden" });
    },
    afterClose: function () {
      $("html").css({ "overflow-y": "visible" });
    },
  });

  $(".js-category-image").fancybox({
    beforeShow: function () {
      $("html").css({ "overflow-y": "hidden" });
    },
    afterClose: function () {
      $("html").css({ "overflow-y": "visible" });
    },
  });

  // Initialise slider
  const categoriesSlider = $(".categories__list");
  if (categoriesSlider) {
    categoriesSlider.slick({
      slidesToShow: 6,
      arrows: false,
      variableWidth: true,
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

    categoriesSlider.on("afterChange", function () {
      observer.observe();
    });
  }

  // Accordion
  $(".js-accordion-btn").on("click", function (event) {
    const currentNode = event.target.closest(".js-accordion-btn");
    const accordionHeader = $(this).parents(".js-accordion-header");
    const group = $(this).parents(".js-accordion-group");

    if (!currentNode) return;

    const targetNode = $(accordionHeader).siblings(".js-accordion-body");

    if (targetNode.is(":visible")) {
      $(accordionHeader).removeClass("active");
      targetNode.slideUp();
    } else {
      group.find(".js-accordion-header.active").removeClass("active");
      group.find(".js-accordion-body").slideUp();
      accordionHeader.addClass("active");
      targetNode.slideDown({
        start: function () {
          $(this).css({
            display: "flex",
          });
        },
      });
    }
  });

  let accordionContainer = $(".js-accordion-header-to-hide");
  let catalogContainer = $(".js-catalog-action");
  if (window.innerWidth >= 1200) {
    $(document).on("mouseup", function (e) {
      let accordion = $(".js-accordion-body-to-hide");
      let catalog = $(".js-main-list");

      if (
        accordionContainer.has(e.target).length === 0 &&
        accordion.has(e.target).length === 0
      ) {
        $(accordion).slideUp();
        $(accordionContainer).removeClass("active");
      }

      if (
        catalogContainer.has(e.target).length === 0 &&
        catalog.has(e.target).length === 0
      ) {
        catalog.removeClass("active");
        $(".js-hamburger").removeClass("active");
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
      $(".js-mobile-sublist.mobile-sublist_opened").removeClass(
        "mobile-sublist_opened"
      );
      bodyUnlock();
    }
  });

  // Scroll to button
  $(".js-scroll-to").on("click", function (e) {
    e.preventDefault();
    const target = $(this).attr("href");

    document.querySelector(target).scrollIntoView({
      behavior: "smooth",
    });
  });

  $(".js-coockie-btn").on("click", function () {
    $(this).parents(".js-coockie").removeClass("active");
  });

  // Button appears from bottom
  setTimeout(function () {
    $(".js-coockie").addClass("active");
  }, 2000);

  $(window).on("resize", function () {
    $(".js-footer .js-accordion").each(function () {
      const body = $(this).find(".js-accordion-body");
      const header = $(this).find(".js-accordion-header");

      if (window.innerWidth >= 450) {
        if (!body.is(":visible")) {
          body.css("display", "flex");
        }
      } else if (window.innerWidth < 450) {
        if (body.is(":visible")) {
          body.css("display", "none");
          header.removeClass("active");
        }
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
    $(".js-mobile-sublist.mobile-sublist_opened").removeClass(
      "mobile-sublist_opened"
    );
    bodyUnlock();
  });

  // Remove an item from the basket
  $(".js-basket-popup-remove").on("click", function () {
    const elem = $(".js-cart-button .js-cart-count");
    const count = +elem.text();

    $(this).parents(".js-basket-popup-item").remove();
    elem.text(count - 1);

    if (+elem.text() <= 0) {
      elem.addClass("hidden");
    }
  });

  $(".js-basket-popup-button").on("click", function () {
    const action = $(this).attr("data-basket-action");
    const elem = $(this).siblings(".js-basket-popup-text").find("span");
    let val = +elem.text();

    if (action == "plus") {
      val++;
    } else if (action == "minus" && val > 0) {
      val--;
    }

    if (val != +elem.text()) {
      elem.text(val);
    }
  });

  $(".js-catalog-action").on("click", function () {
    const menu = $(this).siblings(".js-main-list");
    const hamburger = $(this).find(".js-hamburger");

    if (!menu.hasClass("active")) {
      menu.addClass("active");
      hamburger.addClass("active");
    } else {
      menu.removeClass("active");
      hamburger.removeClass("active");
    }
  });

  $(".js-main-list-item").on("mouseenter", function () {
    const id = $(this).attr("data-category-id");
    const target = $(`.js-main-sublist-item[data-category-id='${id}']`);

    if (!target.hasClass("active")) {
      $(".js-main-sublist-item.active").removeClass("active");
      target.addClass("active");
    }
  });

  $(".js-main-mobile-list-item").on("click", function () {
    const menu = $(this).attr("data-menu");
    const target = $(`.js-mobile-sublist[data-menu="${menu}"]`);

    target.addClass("mobile-sublist_opened");
  });

  $(".js-mobile-sublist-back").on("click", function () {
    $(this).parents(".js-mobile-sublist").removeClass("mobile-sublist_opened");
  });
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
  root.style.paddingRight = lockPaddingValue;
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
    root.style.paddingRight = "0px";
    root.classList.remove("lock");
  }, timeout);

  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}
