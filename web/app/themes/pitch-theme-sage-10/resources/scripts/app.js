import {domReady} from '@roots/sage/client';
import $ from 'jquery';
import 'bootstrap';
import './slide-menu';

/**
 * Addons
 */
import 'slick-carousel/slick/slick.min';
import AOS from 'aos';

AOS.init({
  duration: 300,
  startEvent: 'load',
  easing: 'ease-out',
  offset: 100,
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 30, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 30, // the delay on throttle used while scrolling the page (advanced),
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  disable: 'mobile',
})

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }


  getMainSlideshow();
  getTestimonialsSlideshow();
  getAchivementsSlideshow();
  gettechnologiesSlideshow();
  getStickyMenu();

  var lastScrollTop = 0; // Cette variable permettra de suivre la direction du scroll

  $(window).on('scroll', function() {
    var st = $(this).scrollTop();
    var direction = (st > lastScrollTop) ? -1 : 1; // Si la position actuelle est supérieure à la dernière, on scroll vers le bas, sinon on scroll vers le haut

    $('.animated-section').each(function() {
      var windowTop = $(window).scrollTop();
      var sectionTop = $(this).offset().top;
      var sectionBottom = sectionTop + $(this).outerHeight();

      if (windowTop > sectionTop && windowTop < sectionBottom) {
        var img = $(this).find('.animated-img');
        var currentTransform = parseInt(img.css('transform').split(',')[5]);
        var newTransform = currentTransform + (10 * direction);

        img.css({
          transform: 'translateY(' + newTransform + 'px)',
        });
      }
    });

    lastScrollTop = st; // On met à jour la position du dernier scroll pour le prochain évènement
  });


  function getMainSlideshow() {
    $('.main-slideshow').slick({
      dots: false,
      fade: true,
      cssEase: 'linear',
      infinite: true,
      speed: 300,
      autoplay: true,
      autoplaySpeed: 4000,
    });
  }

  function getTestimonialsSlideshow() {
    $('.slideshow-testimonials').slick({
      arrows:false,
      dots: true,
      infinite: true,
      speed: 400,
      fade: true,
      cssEase: 'linear',
      autoplay: false,
      autoplaySpeed: 3000,
      pauseOnHover: true,
    });
  }

  function getAchivementsSlideshow() {
    var $section = $('.section-achievements');
    var $slideshow = $($section).find('.slideshow-achievements');

    if (!$slideshow.hasClass('slick-initialized')) {
      var slickPrev = $($section).find('#slick-prev');
      var slickNext = $($section).find('#slick-next');
    }

    if (!$slideshow.hasClass('slick-initialized')) {
      $slideshow.slick({
        slidesToShow: 1,
        autoplay: false,
        autoplaySpeed: 8000,
        infinite: false,
        arrows: true,
        nextArrow: slickNext,
        prevArrow: slickPrev,
      });
    }
  }

  function gettechnologiesSlideshow() {
    var $section = $('.section-technologies');
    var $slideshow = $($section).find('.slideshow');

    if (!$slideshow.hasClass('slick-initialized')) {
      var slickPrev = $($section).find('#slick-prev');
      var slickNext = $($section).find('#slick-next');
    }

    if (!$slideshow.hasClass('slick-initialized')) {
      $slideshow.slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 800,
        infinite: true,
        speed: 1800,
        arrows: true,
        nextArrow: slickNext,
        prevArrow: slickPrev,
      });
    }
  }

  function getStickyMenu() {
    var el_html = document.documentElement;
    var el_body = document.body;
    var scrollValue = 0;

    function menuIsStuck() {
      var wScrollTop = window.pageYOffset || el_body.scrollTop;
      var regexp = /(nav-is-stuck)/i;
      var classFound = el_html.className.match(regexp);

      if (wScrollTop > scrollValue && !classFound) {
        el_html.classList.add('nav-is-stuck');
        el_body.style.paddingTop = '0';
      } else if (wScrollTop <= 2 && classFound) {
        el_html.classList.remove('nav-is-stuck');
        el_body.style.paddingTop = '0';
      }
    }

    function onScrolling() {
      menuIsStuck();
    }

    window.addEventListener('scroll', function () {
      window.requestAnimationFrame(onScrolling);
    });
  }
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
