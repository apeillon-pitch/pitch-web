<header id="o-wrapper" class="banner o-wrapper @php echo is_page(313) ? 'd-none' : '' @endphp">
  <div class="container-lg">
    <div class="wp-nav">
      <div class="d-flex flex-row justify-content-between align-items-center gx-0">
        <div class="d-block">
          <a href="{{ home_url() }}" aria-label="Accueil">
            <img src="@asset('images/logo-lepitch.png')"
                 class="logo" alt="Agence Wordpress Paris et Nice" width="200px" height="48px" style="max-width: 200px">
          </a>
        </div>
        <div class="d-flex flex-row justify-content-end align-items-center gx-0">
          @if(!is_page(2000))
            @if (has_nav_menu('primary_navigation'))
              <div id="nav-wrapper" class="d-none d-xl-block p-0">
                <nav class="nav-primary navbar navbar-expand-xl justify-content-end">
                  {!! wp_nav_menu($mainMenu) !!}
                </nav>
              </div>
            @endif
          @endif
        </div>
        <div class="d-flex flex-row align-items-center justify-content-end">
          <a class="d-none d-sm-block link me-4" aria-label="contact" href="<?php echo home_url(); ?>/partenaires/">Vous
            êtes une agence ? </a>
          <a class="d-none d-sm-block nav-link cta" aria-label="contact" href="<?php echo home_url(); ?>/contact/">Contact</a>
          <div class="d-flex d-xl-none flex-row align-items-center ms-4">
            <div id="menu-button">
              <div class="c-buttons">
                <a href="#" rel="nofollow noindex" id="c-button--slide-right" aria-label="Menu"
                   class="hamburger c-button">
                  <div class="top-bun"></div>
                  <div class="meat"></div>
                  <div class="bottom-bun"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
