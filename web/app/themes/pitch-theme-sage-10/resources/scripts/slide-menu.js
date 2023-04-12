(function(window) {
  "use strict";

  class Menu {
    constructor(options) {
      this.options = {
        wrapper: "#o-wrapper",
        type: "slide-left",
        menuOpenerClass: ".c-button",
        maskId: "#c-mask",
        ...options,
      };
      this._init();
    }

    _init() {
      this.body = document.body;
      this.wrapper = document.querySelector(this.options.wrapper);
      this.mask = document.querySelector(this.options.maskId);
      this.menu = document.querySelector("#c-menu--" + this.options.type);
      this.closeBtn = this.menu.querySelector(".c-menu__close");
      this.menuOpeners = document.querySelectorAll(this.options.menuOpenerClass);
      this._initEvents();
    }

    _initEvents() {
      this.closeBtn.addEventListener("click", (event) => {
        event.preventDefault();
        this.close();
      });

      this.mask.addEventListener("click", (event) => {
        event.preventDefault();
        this.close();
      });
    }

    open() {
      this.body.classList.add("has-active-menu");
      this.wrapper.classList.add("has-" + this.options.type);
      this.menu.classList.add("is-active");
      this.mask.classList.add("is-active");
      this._toggleMenuOpeners(true);
    }

    close() {
      this.body.classList.remove("has-active-menu");
      this.wrapper.classList.remove("has-" + this.options.type);
      this.menu.classList.remove("is-active");
      this.mask.classList.remove("is-active");
      this._toggleMenuOpeners(false);
    }

    _toggleMenuOpeners(disabled) {
      this.menuOpeners.forEach((menuOpener) => {
        menuOpener.disabled = disabled;
      });
    }
  }

  window.Menu = Menu;
})(window);

const slideRight = new window.Menu({
  wrapper: "#o-wrapper",
  type: "slide-right",
  menuOpenerClass: ".c-button",
  maskId: "#c-mask",
});

const slideRightBtn = document.querySelector("#c-button--slide-right");

if (slideRightBtn) {
  slideRightBtn.addEventListener("click", function(event) {
    event.preventDefault();
    slideRight.open();
  });
}
