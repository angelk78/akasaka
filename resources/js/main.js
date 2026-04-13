// $(window).load(function () {
//     $('.loader').fadeOut();
//     $('.page-loader').delay(350).fadeOut('slow');
// });
$(window).on("load", function () {
  $(".loader").fadeOut();
  $(".page-loader").delay(350).fadeOut("slow");
});

function Helper() {
  var methods = this;

  methods.initSlickSlider = function () {
    if ($(".regular1").length) {
      $(".regular1").on("init", function (event, slick) {
        $(".navbar-category .category").css(
          "min-height",
          $(".regular1").height()
        );
      });
      $(window).on("resize", function () {
        $(".navbar-category .category").css(
          "min-height",
          $(".regular1").height()
        );
      });
    }

    $(".regular1")
      .not("slick-initialized")
      .slick({
        dots: true,
        infinite: true,
        speed: 900,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        customPaging: function (slider, i) {
          var thumb = $(slider.$slides[i]).data();
          return "<a>" + [i + 1] + "</a>";
        },
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

    $(".regular2")
      .not("slick-initialized")
      .slick({
        dots: false,
        infinite: false,
        speed: 900,
        prevArrow: '<button class="fa fa-angle-left"></button>',
        nextArrow: '<button class="fa fa-angle-right"></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

    $(".regular3")
      .not("slick-initialized")
      .slick({
        dots: true,
        infinite: true,
        speed: 1500,
        prevArrow: false,
        fade: true,
        nextArrow: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });

    $(".regular4")
      .not("slick-initialized")
      .slick({
        dots: true,
        infinite: true,
        speed: 1500,
        prevArrow: false,
        nextArrow: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
  };

  methods.initToTop = function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() >= 50) {
        $("#top").fadeIn("fast");
      } else {
        $("#top").fadeOut("fast");
      }
    });
    $("#top").click(function () {
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        500
      );
    });
  };

  methods.initFixTop = function () {
    jQuery(function ($) {
      function fixDiv() {
        if ($(window).width() > 992) {
          var $cache = $("#menu");
          var $addget = $("#fixedmobile");
          if ($(window).scrollTop() > 30) {
            // $('#fixed-mobile').removeClass('fix-mobile-ipad');
            $cache.addClass("getFixed-1");
            $("#menu .logo").hide();
          } else {
            // $('#fixedmobile').addClass('fix-mobile-ipad');
            $cache.removeClass("getFixed-1");
            $("#menu .logo").show();
          }
        }
      }

      $(window).scroll(fixDiv);
      fixDiv();
      $(window).resize(function () {
        fixDiv();
      });
    });
  };

  methods.initMenu = function () {
    var open = false;
    $("#btn-toggle").on("click", function () {
      if (open) {
        $("#open-menu").removeClass("open");
        $("#btn-toggle").removeClass("active");
      } else {
        $("#open-menu").addClass("open");
        $("#btn-toggle").addClass("active");
      }
      open = !open;
    });
  };

  methods.initIE = function () {
    window.onload = function () {
      var userAgent, ieReg, ie;
      userAgent = window.navigator.userAgent;
      ieReg = /msie|Trident.*rv[ :]*11\./gi;
      ie = ieReg.test(userAgent);

      if (ie) {
        $(
          ".header .header-navbar nav .navbar-collapse1 > ul > li:last-child > a"
        ).addClass("ed-padbt");
        $(".index-4 .slide-news .regular1 .slick-dots > li > a").addClass(
          "ed-lh1"
        );
        // $('.page-loader .icon-spin3').addClass('ed-loader1');
      }
    };
  };

  methods.initLoader = function () {
    document.onreadystatechange = function () {
      var state = document.readyState;
      if (state == "complete") {
        alert(213);
        document.getElementById("interactive");
        document.getElementById("loader").style.visibility = "hidden";
        document.getElementById("loader").style.opacity = "0";
      }
    };
  };

  methods.initCheckButton = function () {
    $(".btn-submit>input").attr("id", "myButton");
    $("#myCheckbox").click(function () {
      if ($(this).is(":checked")) {
        $("#myButton").removeAttr("disabled");
        $("#myButton").addClass("opac50");
      } else {
        $("#myButton").attr("disabled", "true");
        $("#myButton").removeClass("opac50");
      }
    });
  };

  methods.scrollHere = function () {
    if (window.location.hash) {
      var hash = window.location.hash;

      if ($(window).width() >= 768) {
        $offsetpx = 150;
      } else {
        $offsetpx = 90;
      }

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top - $offsetpx,
        },
        2000
      );
    }
  };

  methods.handleContentPostOnlyText = function () {
    $(".blog-content .content").map(function () {
      let str = $.trim($(this).text().replace(/\s+/g, " "));
      $(this).empty().append(str);
    });
  };

  methods.init = function () {
    methods.initToTop();
    methods.initFixTop();
    methods.initMenu();
    methods.initSlickSlider();
    methods.initIE();
    // methods.initLoader();
    methods.initCheckButton();
    methods.scrollHere();
    methods.handleContentPostOnlyText();
  };

  return methods;
}

$(function () {
  var helper = new Helper();
  helper.init();
});
