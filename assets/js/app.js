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

$(function () {
    $(".faq-content").hide();
    $(".faq-header__icon").text("+");

    $(document).on("click", ".js-faq-header", function () {
        const $header = $(this);
        const $item = $header.closest(".faq-item");
        const $content = $item.find(".faq-content").first();
        const $icon = $header.find(".faq-header__icon").first();

        const isActive = !$item.hasClass("is-active");

        $item.toggleClass("is-active", isActive);
        $icon.text(isActive ? "-" : "+");
        $content.stop(true, true).slideToggle(220);
    });
});

const initPartnerMarquee = function () {
    const $sliders = $(".js-partner-marquee");

    if (!$sliders.length) {
        return;
    }

    $sliders.each(function () {
        const $slider = $(this);
        const $slides = $slider.children(".partner__slide");

        // Ensure enough items for a seamless ticker loop on wide screens.
        if ($slides.length > 0 && $slides.length < 12) {
            const repeatCount = Math.ceil((12 - $slides.length) / $slides.length);

            for (let i = 0; i < repeatCount; i += 1) {
                $slides.clone().appendTo($slider);
            }
        }

        if ($slider.hasClass("slick-initialized")) {
            return;
        }

        $slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            arrows: false,
            dots: false,
            infinite: true,
            rows:0,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 9000,
            cssEase: "linear",
            pauseOnHover: false,
            pauseOnFocus: false,
            swipe: false,
            draggable: false,
            touchMove: false,
            rtl: false,
            waitForAnimate: false,
            responsive: [
                {
                    breakpoint: mq.xl,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: mq.lg,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: mq.md,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: mq.sm,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
};

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
initPartnerMarquee();

$(window).on("resize", function () {
    replaceMenu();

    if ($(window).width() >= mq.lg) {
        $(".js-footer-toggle").attr("aria-expanded", "false");
        $(".footer__nav").removeAttr("style");
        $(".footer .col-lg-4").removeClass("is-active");
    }
});
