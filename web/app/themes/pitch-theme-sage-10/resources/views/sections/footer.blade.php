<footer class="content-info @php echo is_page(313) ? 'd-none' : '' @endphp">
  <div class="container-lg">
    <a href="{{ home_url() }}" aria-label="Accueil">
      <img src="@asset('images/logo-white.png')"
           class="logo mb-3" alt="Agence Wordpress Paris et Nice" width="200px" height="48px" style="max-width: 200px">
    </a>
    <div class="row justify-content-center text-start">
      <div class="col-11 col-md-3 mb-4 mb-md-0">
        <div class="d-flex flex-column wp-col">
          <p>
            Agence web Paris <br>
            15 rue de Vandrezanne <br> 75013 Paris </p>
          <p>Agence web Nice <br> 7 rue d'Autun <br> 06000 Nice </p>
{{--          <a href="https://www.linkedin.com/company/pitch-web/" title="Linkedin" target="_blank"><i--}}
{{--              class="fa-brands fa-linkedin-in"></i></a>--}}
        </div>
      </div>
      <div class="col-11 col-md-3 mb-4 mb-md-0">
        <div class="d-flex flex-column wp-col">
          <strong>Actualités</strong>
          @php $articles = get_articles(3); @endphp
          @foreach($articles as $article)
            <a href="{{ $article['permalink'] }}" class="mb-2 mb-sm-0"
               aria-label="{!! $article['title'] !!}">{!! $article['title'] !!}</a>
          @endforeach
        </div>
      </div>
      <div class="col-11 col-md-3 mb-4 mb-md-0">
        <div class="d-flex flex-column wp-col">
          <strong>Agence</strong>
          <a href="{{ home_url() }}/agence/" class="mb-2 mb-sm-0" aria-label="Découvrir l'agence">Découvrir l'agence WordPress</a>
          <a href="{{ home_url() }}/realisations/" class="mb-2 mb-sm-0" aria-label="Nos réalisations Wordpress">Nos réalisations WordPress</a>
          <a href="{{ home_url() }}/clients/" class="mb-2 mb-sm-0" aria-label="Nos références clients">Nos références clients</a>
          <a href="{{ home_url() }}/nos-actualites/" class="mb-2 mb-sm-0" aria-label="Toute l'actualité Wordpress">Toute l'actualité WordPress</a>
        </div>
      </div>
      <div class="col-11 col-md-3 mb-4 mb-md-0">
        <div class="d-flex flex-column wp-col last">
          <strong>Expertises</strong>
          <a href="{{ home_url() }}/creation-site-wordpress/" class="mb-2 mb-sm-0" aria-label="Création de site web WordPress">Création de site web WordPress</a>
          <a href="{{ home_url() }}/maintenance-site-wordpress/" class="mb-2 mb-sm-0" aria-label="Maintenance de site WordPress">Maintenance de site WordPress</a>
          <a href="{{ home_url() }}/hebergement-site-wordpress/" class="mb-2 mb-sm-0" aria-label="Hébergement we">Hébergement web</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center mt-5">
        <p class="mentions">
          <a href="<?php echo home_url(); ?>/mentions-legales/" aria-label="Mentions
            légales" target="_blank">Mentions légales</a> - <a href="<?php echo home_url(); ?>/politique-de-confidentialite/"
                             aria-label="Politique de confidentialité" target="_blank">Politique de confidentialité</a>
          - Agence web Paris - Agence web Nice - ©2023 Le Pitch Web
        </p>
      </div>
    </div>
  </div>
</footer>
@include('components.mobile-menu')

