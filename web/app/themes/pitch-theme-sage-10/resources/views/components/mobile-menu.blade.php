<div id="c-menu--slide-right" class="c-menu c-menu--slide-right">
  <div class="container-fluid h-100">
    <div class="row align-items-center">
      <div class="col-2">
        <button title="Fermer le menu" class="c-menu__close">
          <i class="fa-light fa-xmark"></i>
        </button>
      </div>
      <div class="col-8">
        <a href="<?php echo site_url(); ?>">
          <img src="@asset('images/lepitch.svg')" alt="Logo Le Pitch" class="d-block logo mx-auto" style="max-width: 200px">
        </a>
      </div>
      <div class="col-2">
        <?php /*echo do_shortcode('[wpml_language_selector_widget]'); */?>
      </div>
    </div>
    <div class="row h-100">
      <div class="col-12 mt-5">
        <nav id="navbar-mobile" class="nav-primary navbar">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu($mainMenu) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</div>
<div id="c-mask" class="c-mask"></div>
