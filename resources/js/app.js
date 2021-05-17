import "./import-jquery";
import "slick-carousel";
import SimpleBar from "simplebar";
import "@fancyapps/fancybox";
import lozad from "lozad";
import "ion-rangeslider";
import MobileDetect from "mobile-detect";
const md = new MobileDetect(window.navigator.userAgent);

$(document).ready(function () {
  // Create an observer for lazyload
  const observer = lozad();
  observer.observe();

  // Check if browser supports WebP
  testWebP(function (support) {
    if (support === true) {
      document.querySelector("body").classList.add("webp");
    } else {
      document.querySelector("body").classList.add("no-webp");
    }
  });

  // Check if user uses mobile device
  if (!md.mobile()) {
    const scrollbar = document.querySelector(".js-scrollbar");

    // Create a scrollbar component
    if (scrollbar) {
      new SimpleBar(scrollbar);
    }

    // Show cart info on mouseenter or hide cart info on mouseleave
    $(".js-cart-button").hover(
      function () {
        $(this).find(".js-cart-info").addClass("active");
      },
      function () {
        $(this).find(".js-cart-info").removeClass("active");
      }
    );
  } else if (md.mobile()) {
    // Create gestures events
    const mobileMenu = $(".js-mobile");
    const burger = $(".js-main-hamburger");
    const blur = $(".js-main-blur");
    const gestureZone = document;

    // Coordinates of a gesture
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

      // Don't recognize gestures on slider or scrollbar areas
      if (sliderArea || scrollbarArea) return;

      // Don't recognize gestures when popup is shown
      if ($("body").hasClass("fancybox-active")) return;

      // Don't recognize horizontal gestures on vertical gestures
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

  // Open basket popup
  $(".js-popup").fancybox({
    touch: false,
    beforeShow: function () {
      $("html").css({ "overflow-y": "hidden" });
    },
    afterClose: function () {
      $("html").css({ "overflow-y": "visible" });
    },
  });

  // Disable scroll when popup gallery is shown
  $(".js-category-image").fancybox({
    beforeShow: function () {
      $("html").css({ "overflow-y": "hidden" });
    },
    afterClose: function () {
      $("html").css({ "overflow-y": "visible" });
    },
  });

  // Initialize slider
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

  // Sidebar's toggle blocks
  $(".js-sidebar-header").on("click", function () {
    const targetNode = $(this).siblings(".js-sidebar-body");

    if (targetNode.is(":visible")) {
      $(this).removeClass("active");
      targetNode.slideUp();
    } else {
      $(this).addClass("active");
      targetNode.slideDown({
        start: function () {
          $(this).css({
            display: "flex",
          });
        },
      });
    }
  });

  // Accordion
  $(".js-accordion-btn").on("click", function (event) {
    const accordionHeader = $(this).parents(".js-accordion-header");
    const group = $(this).parents(".js-accordion-group");

    const targetNode = accordionHeader.siblings(".js-accordion-body");

    if (targetNode.is(":visible")) {
      accordionHeader.removeClass("active");
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

  const accordionContainer = $(".js-accordion-header-to-hide");
  const catalogContainer = $(".js-catalog-action");
  const selectContainer = $(".js-select__header");
  if (window.innerWidth >= 1200) {
    $(document).on("mouseup", function (e) {
      const accordion = $(".js-accordion-body-to-hide");
      const catalog = $(".js-main-list");
      const select = $(".js-select__body");

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

      if (
        selectContainer.has(e.target).length === 0 &&
        select.has(e.target).length === 0
      ) {
        select.removeClass("active");
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

  // Hide coockie message
  $(".js-coockie-btn").on("click", function () {
    $(this).parents(".js-coockie").removeClass("active");
  });

  // Show coockie message
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

  // Change amount of the product
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

  // Show catalog menu
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

  // Show catalog submenu
  $(".js-main-list-item").on("mouseenter", function () {
    const id = $(this).attr("data-category-id");
    const target = $(`.js-main-sublist-item[data-category-id='${id}']`);

    if (!target.hasClass("active")) {
      $(".js-main-sublist-item.active").removeClass("active");
      target.addClass("active");
    }
  });

  // Show mobile submenu
  $(".js-main-mobile-list-item").on("click", function (event) {
    const menu = $(this).attr("data-menu");
    const target = $(`.js-mobile-sublist[data-menu="${menu}"]`);
    const link = event.target.closest("a");

    if (link) return;

    target.addClass("mobile-sublist_opened");
  });

  // Hide mobile submenu
  $(".js-mobile-sublist-back").on("click", function () {
    $(this).parents(".js-mobile-sublist").removeClass("mobile-sublist_opened");
  });

  // Custom select
  $(".js-select").on("click", function () {
    const selectBody = $(this).find(".js-select__body");

    if (!selectBody.hasClass("active")) {
      $(".js-select").find(".js-select__body").removeClass("active");
      selectBody.addClass("active");
    } else {
      selectBody.removeClass("active");
    }
  });

  // Change a value of custom select
  $(".js-select-item").on("click", function () {
    const text = $(this).children("span").text();
    const parent = $(this).parents(".js-select").children(".js-select__header");

    parent.children("span").text(text);
  });

  // Create price's range slider
  const range = $(".js-range-slider");
  const inputFrom = $(".js-range-from");
  const inputTo = $(".js-range-to");
  let instance;
  let min = 1847;
  let max = 19717;
  let from = 0;
  let to = 0;

  range.ionRangeSlider({
    skin: "round",
    type: "double",
    min: 1847,
    max: 19717,
    from: 1847,
    to: 19717,
    grid: false,
    hide_from_to: true,
    hide_min_max: true,
    onStart: updateInputs,
    onChange: updateInputs,
    onFinish: updateInputs,
  });
  instance = range.data("ionRangeSlider");

  // Update input fields when price's range slider is changed
  function updateInputs(data) {
    from = data.from;
    to = data.to;

    inputFrom.prop("value", from);
    inputTo.prop("value", to);
  }

  // Update price's range slider when input fields are changed
  inputFrom.on("change", function () {
    let val = $(this).prop("value");

    if (val < min) {
      val = min;
    } else if (val > to) {
      val = to;
    }

    instance.update({
      from: val,
    });

    $(this).prop("value", val);
  });

  // Update price's range slider when input fields are changed
  inputTo.on("change", function () {
    let val = $(this).prop("value");

    if (val < from) {
      val = from;
    } else if (val > max) {
      val = max;
    }

    instance.update({
      to: val,
    });

    $(this).prop("value", val);
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

// Compensate scroll width
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
