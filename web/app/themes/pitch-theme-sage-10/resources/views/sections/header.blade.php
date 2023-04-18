<header id="o-wrapper" class="banner o-wrapper @php echo is_page(313) ? 'd-none' : '' @endphp">
  <div class="d-block d-lg-none">
    <div class="container">
      <div class="row gx-0 align-items-center">
        <div class="col-3 menu" data-wow-duration="2s" data-wow-delay="1.5s">
          <a id="c-button--slide-right" href="#" rel="nofollow noindex" aria-label="Menu" class="hamburger c-button">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
          </a>
        </div>
        <div class="col-6">
          <a class="brand" aria-label="Site Le Pitch" href="<?= esc_url(home_url('/')); ?>">
            <img src="@asset('images/lepitch.svg')"
                 alt="Agence Web Le Pitch"
                 width="235px" height="56px"
                 class="d-block logo mx-auto" style="max-width: 235px">
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
              <a class="nav-link" aria-label="agence" href="<?php echo home_url(); ?>/#section-2"
                 rel="m_PageScroll2id">Agence</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-label="réalisations" href="<?php echo home_url(); ?>/#section-5" rel="m_PageScroll2id">Réalisations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-label="expertises" href="<?php echo home_url(); ?>/#section-6" rel="m_PageScroll2id">Expertises</a>
            </li>
            <li class="nav-item p-0">
              <a class="nav-link brand pt-0 pb-0 ps-5 pe-5" aria-label="Site le Pitch" href="<?= esc_url(home_url('/')); ?>"
                 rel="m_PageScroll2id">
                <img src="@asset('images/lepitch.svg')"
                     class="logo" alt="Logo Le Pitch" width="200px" height="48px" style="max-width: 200px">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-label="références" href="<?php echo home_url(); ?>/#section-7" rel="m_PageScroll2id">Références</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-label="actualités" href="<?php echo home_url(); ?>/nos-actualites/"
                 rel="m_PageScroll2id">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link c-buttons-4" aria-label="contact" href="<?php echo home_url(); ?>/contact/">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div href="#" rel="nofollow noindex" aria-label="Menu" class="d-block d-lg-none menu wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.5s">
      <a  href="#" rel="nofollow noindex" aria-label="Menu" id="c-button--slide-top" class="hamburger c-button">
        <div class="top-bun"></div>
        <div class="meat"></div>
        <div class="bottom-bun"></div>
      </a>
    </div>
  </div>
</header>
