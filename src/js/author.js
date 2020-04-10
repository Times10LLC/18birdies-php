var main = {
    init: function() {
        console.log("Init");
        main.jobs();
        if($("#feature-slider").length > 0){
          main.slider();
        }
        main.nav();
        main.quotes();
        main.feed();
        main.press();

        console.log(main.detect());
        AOS.init({
          delay: 200,
          duration: 600
        });

        var player = new Plyr('#player');

        $(".open-video").magnificPopup({
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
    },
    detect: function(){
      var OSName="Unknown";
      if(navigator.platform.indexOf("iPhone")!=-1) OSName="iOS";
      if(navigator.platform.indexOf("Android")!=-1) OSName="Android";
      if(navigator.platform.indexOf("Mac")!=-1) OSName="OSX";
      if(navigator.platform.indexOf("Win")!=-1) OSName="Windows";

      return OSName;
    },
    jobs: function() {
      $(".position h3").click(function() {
        $(this).find('i').toggleClass("fa-plus-circle fa-minus-circle")
        $(this).parent().find('.description').slideToggle();
      });
    },
    nav: function(){
      $(".menu-icon").click(function(){
        $(this).toggleClass("open");
        $("body").toggleClass("nav-open");
        $("#mobile-nav").toggleClass("open");
        if($("body").hasClass("nav-open")){
          bodyScrollLock.disableBodyScroll();
        }else{
          bodyScrollLock.clearAllBodyScrollLocks();
        }
      });

      $(".close").click(function(){
        $("#mobile-nav").removeClass("open");
        bodyScrollLock.clearAllBodyScrollLocks();
      });
    },
    press: function(){
      if($("body").hasClass("our-story")){
        var press = tns({
          container: '#press-slider',
          controls: false,
          nav: true,
          navPosition: 'bottom',
          items: 1,
          speed: 500,
          // fixedWidth: 100,
          autoplayButtonOutput: false,
          autoplay: false,
          mouseDrag: true,
          swipeAngle: false,
          gutter: 0,
          // center: true,
          slideBy: 1,
          navAsThumbnails: true,
          preventScrollOnTouch: 'auto',
          responsive: {
            768: {
              edgePadding: 175,
              items: 1,
              gutter: 40
            },
            1024: {
              edgePadding: 300,
              items: 1
            },
            1200: {
              edgePadding: 500,
              items: 1,
            },
            2000: {
              items: 2
            }
          }
        });
      };

    },
    slider: function(){
      var slider = tns({
        container: '#feature-slider',
        controls: false,
        nav: true,
        items: 1,
        speed: 1000,
        // fixedWidth: 100,
        autoplayButtonOutput: false,
        mode: 'gallery',
        autoplay: true,
        mouseDrag: false,
        swipeAngle: false,
        gutter: 40,
        preventScrollOnTouch: 'auto',
        touch: false
      });

      var reviews = tns({
        container: '#reviews-slider',
        controls: false,
        nav: true,
        navPosition: 'bottom',
        items: 1,
        speed: 500,
        // fixedWidth: 100,
        autoplayButtonOutput: false,
        autoplay: false,
        mouseDrag: true,
        swipeAngle: false,
        gutter: 40,
        preventScrollOnTouch: 'auto'
      });
    },
    quotes: function(){
      if($("body").hasClass("ai-coach")){
        var quotes = tns({
          container: '#quotes-slider',
          controls: false,
          nav: true,
          navPosition: 'bottom',
          items: 1,
          speed: 500,
          edgePadding: 50,
          // fixedWidth: 100,
          autoplayButtonOutput: false,
          autoplay: false,
          mouseDrag: true,
          swipeAngle: false,
          gutter: 30,
          // center: true,
          slideBy: 1,
          navAsThumbnails: true,
          preventScrollOnTouch: 'auto',
          responsive: {
            340: {
              edgePadding: 75
            },
            768: {
              items: 2,
              edgePadding: 150
            },
            1024: {
              items: 3
            },
            1200: {
              items: 4
            },
            2000: {
              items: 6
            }
          }
        });
      }
    },
    feed: function(){
      if($("#ig-feed").length > 0){
        var feed = tns({
          container: '#ig-feed',
          controls: false,
          nav: true,
          navPosition: 'bottom',
          items: 1,
          speed: 500,
          edgePadding: 50,
          // fixedWidth: 100,
          autoplayButtonOutput: false,
          autoplay: false,
          mouseDrag: true,
          swipeAngle: false,
          gutter: 30,
          // center: true,
          slideBy: 1,
          navAsThumbnails: true,
          preventScrollOnTouch: 'auto',
          responsive: {
            340: {
              edgePadding: 75
            },
            768: {
              items: 2,
              edgePadding: 150
            },
            1024: {
              items: 3
            },
            1200: {
              items: 4
            },
            2000: {
              items: 6
            }
          }
        });
      }
    }
};

$(window).on('load',function() {
  $("body").removeClass("preload");

  $(document).ready(function() {
      main.init();
  });

});
