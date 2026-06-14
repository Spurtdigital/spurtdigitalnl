window.$ = window.jQuery = require("jquery");
import "slick-slider";
import "@fancyapps/ui";

const mq = {
    sm: 576,
    md: 768,
    lg: 992,
    xl: 1200,
    xxl: 1400
};

// Toggle panel
$(document).on("click", ".js-toggle-panel", function (e) {
    e.preventDefault();
    $(this).toggleClass("is-active");
    $("body").toggleClass("lock");
});

// Close Panel
$(document).on("click", ".js-close-panel", function (e) {
    e.preventDefault();
    $(".js-toggle-panel").removeClass("is-active");
    $("body").removeClass("lock");
});

$(document).on("click", ".js-footer-toggle", function (e) {
    if ($(window).width() >= mq.lg) {
        return;
    }

    e.preventDefault();

    const $toggle = $(this);
    const $column = $toggle.closest(".col-lg-4");
    const $nav = $column.find(".footer__nav").first();
    const isActive = $column.hasClass("is-active");

    $column.toggleClass("is-active", !isActive);
    $toggle.attr("aria-expanded", String(!isActive));
    $nav.stop(true, true).slideToggle(220);
});

var replaceMenu = function () {
    if ($(window).width() < mq.xl) {
        $(".js-panel").append($(".js-main-menu"));
    } else {
        $(".js-main-nav").prepend($(".js-main-menu"));
        $(".js-panel").removeClass("panel-active");
        $(".js-toggle-panel").removeClass("is-active");
        $("body").removeClass("lock");
    }
};

replaceMenu();

$(window).on("resize", function () {
    replaceMenu();

    if ($(window).width() >= mq.lg) {
        $(".js-footer-toggle").attr("aria-expanded", "false");
        $(".footer__nav").removeAttr("style");
        $(".footer .col-lg-4").removeClass("is-active");
    }
});
