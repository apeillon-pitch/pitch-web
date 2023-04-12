import {domReady} from '@roots/sage/client';
import $ from 'jquery';
import 'bootstrap';
import './slide-menu';

/**
 * Addons
 */
import 'slick-carousel/slick/slick.min';

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
  getStickyMenu();

  function getMainSlideshow() {
    $('.main-slideshow').slick({
      dots: false,
      infinite: true,
      speed: 500,
      autoplay: true,
      autoplaySpeed: 6000,
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
    $('.slideshow-achievements').slick({
      slidesToShow: 1,
      fade: true,
      autoplay: false,
      autoplaySpeed: 8000,
      cssEase: 'linear',
      infinite: true,
      arrows:true,
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
