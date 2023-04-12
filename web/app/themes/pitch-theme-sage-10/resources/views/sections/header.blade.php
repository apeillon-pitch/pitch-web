<header id="o-wrapper" class="banner o-wrapper @php echo is_page(313) ? 'd-none' : '' @endphp">
  <div class="d-block d-lg-none">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-3 menu" data-wow-duration="2s" data-wow-delay="1.5s">
          <a id="c-button--slide-right" class="hamburger c-button">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
          </a>
        </div>
        <div class="col-6">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <img src="@asset('images/lepitch.svg')"
                 alt="Agence Web Le Pitch" class="d-block logo mx-auto" style="max-width: 235px">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="d-none d-lg-block">
    <nav class="navbar navbar-expand-lg"
         id="ftco-navbar">
      <div class="container">
        <div class="collapse navbar-collapse">
          <ul class="main-menu navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url(); ?>/#section-2"
                 rel="m_PageScroll2id">Agence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url(); ?>/#section-5" rel="m_PageScroll2id">Réalisations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url(); ?>/#section-6" rel="m_PageScroll2id">Expertises</a>
            </li>
            <li class="nav-item p-0">
              <a class="nav-link brand p-0" href="<?php echo home_url(); ?>/#sections"
                 rel="m_PageScroll2id">
                <img src="@asset('images/lepitch.svg')"
                     class="logo" style="max-width: 200px">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url(); ?>/#section-7" rel="m_PageScroll2id">Références</a>
            </li>
            <li class="nav-item">
              @if(is_front_page())
                <a class="nav-link" href="<?php echo home_url(); ?>/#section-9"
                   rel="m_PageScroll2id">Actualités</a>
              @else
                <a class="nav-link" href="<?php echo home_url(); ?>/nos-actualites/"
                   rel="m_PageScroll2id">Actualités</a>
              @endif
            </li>
            <li class="nav-item">
              <a class="nav-link c-buttons-4" href="<?php echo home_url(); ?>/#section-10">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="d-block d-lg-none menu wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.5s">
      <a id="c-button--slide-top" class="hamburger c-button">
        <div class="top-bun"></div>
        <div class="meat"></div>
        <div class="bottom-bun"></div>
      </a>
    </div>
  </div>
</header>
