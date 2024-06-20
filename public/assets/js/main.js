(function ($) {
    "use strict";

    $(document).ready(function($){
        
        // testimonial sliders
        $(".testimonial-sliders").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:false,
                    loop:true
                }
            }
        });

        // homepage slider
        $(".homepage-slider").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            nav: true,
            dots: false,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    loop:true
                },
                600:{
                    items:1,
                    nav:true,
                    loop:true
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });

        // logo carousel
        $(document).ready(function() {
            $(".logo-carousel-inner").owlCarousel({
              items: 5,
              loop: true,
              autoplay: true,
              autoplayTimeout: 1000,  // 1 second
              margin: 30,
              responsive: {
                0: {
                  items: 1,
                  nav: false
                },
                600: {
                  items: 3,
                  nav: false
                },
                1000: {
                  items: 5,
                  nav: false,
                  loop: true
                }
              }
            });
          });

        // count down
        if($('.time-countdown').length){  
            $('.time-countdown').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                var $this = $(this).html(event.strftime('' + '<div class="counter-column"><div class="inner"><span class="count">%D</span>Days</div></div> ' + '<div class="counter-column"><div class="inner"><span class="count">%H</span>Hours</div></div>  ' + '<div class="counter-column"><div class="inner"><span class="count">%M</span>Mins</div></div>  ' + '<div class="counter-column"><div class="inner"><span class="count">%S</span>Secs</div></div>'));
            });
         });
        }

        // projects filters isotop
        $(".product-filters li").on('click', function () {
            
            $(".product-filters li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');

            $(".product-lists").isotope({
                filter: selector,
            });
            
        });
        
        // isotop inner
        $(".product-lists").isotope();

        // magnific popup
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        // light box
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });

        // homepage slides animations
        $(".homepage-slider").on("translate.owl.carousel", function(){
            $(".hero-text-tablecell .subtitle").removeClass("animated fadeInUp").css({'opacity': '0'});
            $(".hero-text-tablecell h1").removeClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.3s'});
            $(".hero-btns").removeClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.5s'});
        });

        $(".homepage-slider").on("translated.owl.carousel", function(){
            $(".hero-text-tablecell .subtitle").addClass("animated fadeInUp").css({'opacity': '0'});
            $(".hero-text-tablecell h1").addClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.3s'});
            $(".hero-btns").addClass("animated fadeInUp").css({'opacity': '0', 'animation-delay' : '0.5s'});
        });

       

        // stikcy js
        $("#sticker").sticky({
            topSpacing: 0
        });

        //mean menu
        $('.main-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "992"
        });
        
         // search form
        $(".search-bar-icon").on("click", function(){
            $(".search-area").addClass("search-active");
        });

        $(".close-btn").on("click", function() {
            $(".search-area").removeClass("search-active");
        });
    
    });


    jQuery(window).on("load",function(){
        jQuery(".loader").fadeOut(1000);
    });
    
    // anim1
        document.addEventListener('DOMContentLoaded', function() {
            if ('IntersectionObserver' in window) {
                let options = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.1
                };

                let observer = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            let products = document.querySelectorAll('.single-product-item');
                            products.forEach((product, index) => {
                                setTimeout(() => {
                                    product.style.opacity = '1';
                                    product.style.transform = 'translateY(0)';
                                }, index * 500);  // Adjusted the delay for staggered effect
                            });
                            observer.unobserve(entry.target);
                        }
                    });
                }, options);

                let target = document.querySelector('.product-section');
                observer.observe(target);
            } else {
                let products = document.querySelectorAll('.single-product-item');
                products.forEach((product, index) => {
                    setTimeout(() => {
                        product.style.opacity = '1';
                        product.style.transform = 'translateY(0)';
                    }, index * 500);  // Adjusted the delay for staggered effect
                });
            }
        });
    //anim 2  x->x 

    document.addEventListener('DOMContentLoaded', function() {
        if ('IntersectionObserver' in window) {
            let options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            let observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            let targets = document.querySelectorAll('.image-column, .content-column');
            targets.forEach(target => {
                observer.observe(target);
            });
        } else {
            // Fallback for browsers that do not support IntersectionObserver
            let targets = document.querySelectorAll('.image-column, .content-column');
            targets.forEach(target => {
                target.classList.add('animated');
            });
        }
    });


    // animation produçct


    document.addEventListener('DOMContentLoaded', function() {
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
      };
  
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);
  
      document.querySelectorAll('.carousel-items').forEach(item => {
        observer.observe(item);
      });

    const nosProduitsObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('active');
      observer.unobserve(entry.target);
    } else {
      entry.target.classList.remove('active');
    }
  });
}, observerOptions);

// Target the animated "Nos Produits" section
const nosProduitsSection = document.querySelector('.fade-text');
if (nosProduitsSection) {
  nosProduitsObserver.observe(nosProduitsSection);
}
});
  


}(jQuery));