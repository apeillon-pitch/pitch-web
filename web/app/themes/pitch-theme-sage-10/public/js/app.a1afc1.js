"use strict";(self.webpackChunksage=self.webpackChunksage||[]).push([[143],{537:function(e,s,i){var n=i(575),o=i(567),t=i.n(o),a=(i(138),i(459),i(129),i(711));i.n(a)().init({duration:300,startEvent:"load",easing:"ease-out",offset:100,useClassNames:!1,disableMutationObserver:!1,debounceDelay:30,throttleDelay:30,once:!0,mirror:!1,disable:"mobile"});const l=async e=>{var s,i,n;e&&console.error(e),s=t()(".section.client .slideshow"),i=t()(".section.client #slick-prev"),n=t()(".section.client #slick-next"),s.slick({infinite:!1,slidesToShow:3,slidesToScroll:1,arrows:!0,dots:!1,autoplay:!1,speed:800,nextArrow:n,prevArrow:i,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),t()(".main-slideshow").slick({dots:!1,fade:!0,cssEase:"linear",infinite:!0,speed:300,autoplay:!0,autoplaySpeed:4e3}),t()(".slideshow-testimonials").slick({arrows:!1,dots:!0,infinite:!0,speed:400,fade:!0,cssEase:"linear",autoplay:!1,autoplaySpeed:3e3,pauseOnHover:!0}),function(){var e=t()(".section-achievements"),s=t()(e).find(".slideshow-achievements");if(!s.hasClass("slick-initialized"))var i=t()(e).find("#slick-prev"),n=t()(e).find("#slick-next");s.hasClass("slick-initialized")||s.slick({slidesToShow:1,autoplay:!1,autoplaySpeed:8e3,infinite:!1,arrows:!0,nextArrow:n,prevArrow:i})}(),function(){var e=t()(".section-technologies"),s=t()(e).find(".slideshow");if(!s.hasClass("slick-initialized"))var i=t()(e).find("#slick-prev"),n=t()(e).find("#slick-next");s.hasClass("slick-initialized")||s.slick({slidesToShow:1,autoplay:!0,autoplaySpeed:800,infinite:!0,speed:1800,arrows:!0,nextArrow:n,prevArrow:i})}(),function(){var e=document.documentElement,s=document.body;function i(){var i,n;i=window.pageYOffset||s.scrollTop,n=e.className.match(/(nav-is-stuck)/i),i>0&&!n?(e.classList.add("nav-is-stuck"),s.style.paddingTop="0"):i<=2&&n&&(e.classList.remove("nav-is-stuck"),s.style.paddingTop="0")}window.addEventListener("scroll",(function(){window.requestAnimationFrame(i)}))}()};(0,n.Z)(l)},713:function(){},567:function(e){e.exports=window.jQuery}},function(e){var s=function(s){return e(e.s=s)};e.O(0,[575,138,459],(function(){return s(537),s(713)})),e.O()}]);