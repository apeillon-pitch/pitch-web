import {domReady} from '@roots/sage/client';
import $ from 'jquery';
import 'bootstrap';
import './slide-menu';
import 'select2';

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
  setSelect2();
  dropdownMenu();
  getSlideshowClients();
  getMainSlideshow();
  getTestimonialsSlideshow();
  getAchivementsSlideshow();
  gettechnologiesSlideshow();
  getStickyMenu();

  function setSelect2()
  {
    $('.ginput_container_select select').select2({
      minimumResultsForSearch: Infinity,
    });
  }

  function getSlideshowClients() {
    var slideshowClient =  $('.section.client .slideshow');
    var slickPrevClient =  $('.section.client #slick-prev');
    var slickNextClient =  $('.section.client #slick-next');
    slideshowClient.slick(
      {
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 800,
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
