import {domReady} from '@roots/sage/client';
import $ from 'jquery';
import 'bootstrap';
import './slide-menu';
import 'select2';

/**
 * Addons
 */
import 'slick-carousel/slick/slick.min';

/* import AOS from 'aos';
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
}) */

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  setSelect2();
  dropdownMenu();
  getSlideshowLogos();
  getSlideshowClients();
  getTestimonialsSlideshow();
  getMainProjectSlideshow();
  getAchivementsSlideshow();
  getSlideshowStep1();
  gettechnologiesSlideshow();
  getStickyMenu();

  function setSelect2() {
    $('.ginput_container_select select').select2({
      minimumResultsForSearch: Infinity,
    });
  }

  function getSlideshowLogos() {
    var slideshowClient = $('.wp-slideshow-logo .slideshow-logo');
    slideshowClient.slick(
      {
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        speed: 1000,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
          {
            breakpoint: 1250,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
        ],
      }
    );
  }

  function getSlideshowClients() {
    var slideshowClient = $('.section.client .slideshow');
    var slickPrevClient = $('.section.client #slick-prev');
    var slickNextClient = $('.section.client #slick-next');
    slideshowClient.slick(
      {
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 800,
        infinite: true,
        nextArrow: slickNextClient,
        prevArrow: slickPrevClient,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      }
    );
  }

  function getTestimonialsSlideshow() {
    $('.slideshow-testimonials').slick({
      arrows: false,
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

  function getMainProjectSlideshow() {
    $('.main-project-slideshow').slick({
      arrows: false,
      dots: false,
      infinite: true,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 3500,
      pauseOnHover: false,
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
        infinite: true,
        arrows: true,
        nextArrow: slickNext,
        prevArrow: slickPrev,
      });
    }
  }

  function getSlideshowStep1() {

    $('.slideshow-step-by-step button[data-bs-toggle="pill"]').on('shown.bs.tab', function () {
      $('.slideshow-step-by-step .slideshow').slick('setPosition');
    });


    var $section = $('.slideshow-step-by-step');
    var $slideshow = $($section).find('.slideshow');

    if (!$slideshow.hasClass('slick-initialized')) {
      $slideshow.slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: false,
        autoplaySpeed: 800,
        infinite: false,
        speed: 1800,
        arrows: false,
        dots: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
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

  function dropdownMenu() {
    const navLinks = document.querySelectorAll('#o-wrapper .nav-link.dropdown-toggle');
    const dropdownMenus = document.querySelectorAll('#o-wrapper .dropdown-menu');

    navLinks.forEach(navLink => {
      navLink.addEventListener('mouseenter', () => {
        navLink.classList.add('show');
      });

      navLink.addEventListener('mouseleave', () => {
        navLink.classList.remove('show');
      });
    });

    dropdownMenus.forEach(dropdownMenu => {
      dropdownMenu.addEventListener('mouseenter', () => {
        Array.from(dropdownMenu.parentElement.children).forEach(child => {
          child.classList.add('show');
        });
      });

      dropdownMenu.addEventListener('mouseleave', () => {
        Array.from(dropdownMenu.parentElement.children).forEach(child => {
          child.classList.remove('show');
        });
      });
    });
  }

  function getStickyMenu() {
    var el_html = document.documentElement;
    var el_body = document.body;
    var lastScrollTop = 0; // Stocke la dernière position de défilement

    function onScrolling() {
      var wScrollTop = window.pageYOffset || el_body.scrollTop;

      // Si tout en haut de la page, ajouter 'nav-transparent'
      if (wScrollTop <= 0) {
        el_html.classList.add('nav-transparent');
      } else {
        el_html.classList.remove('nav-transparent');
      }

      // Défilement vers le bas
      if (wScrollTop > lastScrollTop) {
        el_html.classList.remove('nav-visible');
        el_html.classList.add('nav-hidden');
      }
      // Défilement vers le haut
      else if (wScrollTop < lastScrollTop) {
        el_html.classList.remove('nav-hidden');
        el_html.classList.add('nav-visible');
      }

      // Mettre à jour lastScrollTop pour la prochaine invocation
      lastScrollTop = wScrollTop <= 0 ? 0 : wScrollTop; // Pour éviter les valeurs négatives
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
