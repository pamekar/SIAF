/*=========================================

Template Name: Startup
Author: HidraTheme
Version: 1.0
Design and Developed by: HidraTheme

NOTE: This is the custom js file for the template

=========================================*/



(function ($) {

  
    "use strict"; 
    
    /*=================== preloader ===================*/
    $(window).on('load',function() { 
        $(".preloading").fadeOut("slow"); 
    });


    /*=================== sticky menu ===================*/ 
    $(window).on('scroll', function(){
        if(jQuery(this).scrollTop() > 50) {
           $('header').addClass('sticky');
        } else {
           $('header').removeClass('sticky'); 
        }
     });

    /*=================== active menu ===================*/
     $('.navbar-nav > li a').on("click", function() {
        $('.navbar-nav').find('li.active').removeClass('active'); 
        $(this).parents("li").addClass('active');
    }); 
 
    // ======================= jQuery for page scrolling feature  ======================= // 
    $('a.page-scroll').on("click", function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

      // ======================= Counter  ======================= //
      $('#counter').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
          $(this).find('.count').each(function () {
            var $this = $(this);
            $({ Counter: 0 }).animate({ Counter: $this.text() }, {
              duration: 12000,
              easing: 'swing',
              step: function () {
                $this.text(Math.ceil(this.Counter));
              }
            });
          });
          $(this).unbind('inview');
        }
      });

          /*=================== Animate ===================*/
    function onScrollInit( items, trigger ) {
      items.each( function() {
        var osElement = $(this),
            osAnimationClass = osElement.attr('data-os-animation'),
            osAnimationDelay = osElement.attr('data-os-animation-delay');
          
            osElement.css({
              '-webkit-animation-delay':  osAnimationDelay,
              '-moz-animation-delay':     osAnimationDelay,
              'animation-delay':          osAnimationDelay
            });

            var osTrigger = ( trigger ) ? trigger : osElement;
            
            osTrigger.waypoint(function() {
              osElement.addClass('animated').addClass(osAnimationClass);
              },{
                  triggerOnce: true,
                  offset: '90%'
            });
      });
    }

     onScrollInit( $('.os-animation') );
     onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') ); 

    /*=================== filtering function ===================*/
    $(".filter-button").on("click", function() {
        var value = $(this).attr('data-filter');
        
        if(value == "gallery-no-filter")
        {
            $('.gallery-img-box').removeClass("gallery-hidden");
        }
        else
        { 
            $(".gallery-img-box").not('.'+value).addClass("gallery-hidden");   
            $('.gallery-img-box').filter('.'+value).removeClass("gallery-hidden");
            
        }
    });

    $('.filter-gallery .filter-button').on("click", function() {
        $('.filter-gallery').find('.filter-button.active').removeClass('active');  
        $(this).addClass('active');
    });

  /*=================== GALLERY FUNCTIONS ===================*/ 
    loadGallery(true, 'a.viewthumb');

    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }


    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').on("click", function() {
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }


    // ======================= Team  ======================= // 
       
    if($('#team-carousel').length > 0){
        $("#team-carousel").owlCarousel({

          dots: false,
          loop: true,
          autoplay: true,
          slideSpeed : 2000,
          margin: 5,
          responsiveClass: true,
          nav: true,
          navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"], 
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            480: {
              items: 2,
              nav: true
            },
            600: {
              items: 3,
              nav: true
            },
            1000: {
              items: 4,
              nav: true,
              loop: true,
              margin: 5
            }
          }
           
        });
    }


    // ======================= Featured  ======================= // 
       
    if($('#featured-carousel').length > 0){
        $("#featured-carousel").owlCarousel({

          dots: false,
          loop: true,
          autoplay: true,
          slideSpeed : 2000,
          margin: 30,
          responsiveClass: true,
          nav: false, 
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            480: {
              items: 2,
              nav: true
            },
            600: {
              items: 3,
              nav: true
            },
            1000: {
              items: 5,
              nav: true,
              loop: true,
              margin: 30
            }
          }
           
        });
    }


    // ======================= NEWS  ======================= // 
       
    if($('#carousel-news').length > 0){
        $("#carousel-news").owlCarousel({
        dots: false,
        loop: true,
        autoplay: true,
        slideSpeed : 1000,
        margin: 30,
        responsiveClass: true,
        nav: true,
          
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            480: {
              items: 2,
              nav: true
            },
            600: {
              items: 3,
              nav: true
            },
            1000: {
              items: 4,
              nav: true,
              loop: true,
              margin: 30
            }
          }
           
        });
    }



    /*=================== Testimonial ===================*/
    $('#carousel-landscape').carousel({ 
               interval: 4000 
     }); 

     $(".carousel.zoom").carousel().on("slide.bs.carousel", function (data) {
      var n = $(data.target).find(".item").length;
      var active = data.relatedTarget;
      if(active===undefined){
        active = $(data.target).find(".item.active");
      }else{
        active = $(data.relatedTarget);
      }
      console.log(active);
      $(data.target).find(".item.next").removeClass("next");
      var next = $(data.target).find(".item").eq(active.index()-n+1);
      next.addClass("next");
      $(data.target).find(".item.prev").removeClass("prev");
      var prev = $(data.target).find(".item").eq(active.index()-1);
      prev.addClass("prev");
    }).trigger("slide.bs.carousel"); 



     
     /*======================= Go to top function  =======================*/
     $(window).on('scroll', function(){
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').on("click", function() {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');



    /*=================== THEME COLOR PANEL FUNCTIONS ===================*/
    $(".style-option-wrap #style-btn").on("click", function() {
        $(this).parent(".style-option-wrap").toggleClass("open-style");
    });


    /*=================== THEME COLOR FUNCTIONS ===================*/
    $(".theme-panel #theme-custom").on("click", function() {
        $("body").removeAttr('class');
    });

    $('#theme-green,#theme-blue,#theme-red,#theme-yellow,#theme-purple').on("click", function() {
        var style = this.id;
        $("body").attr('class', style);
    });


 })(jQuery);

