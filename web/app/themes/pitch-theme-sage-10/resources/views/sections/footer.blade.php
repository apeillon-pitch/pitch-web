<footer class="content-info @php echo is_page(313) ? 'd-none' : '' @endphp">
  <div class="container-lg">
    <a href="{{ home_url() }}" aria-label="Accueil">
      <img src="@asset('images/pitch-white.svg')"
           class="logo mb-3" alt="Logo Le Pitch" width="200px" height="48px" style="max-width: 200px">
    </a>
    <div class="row text-start">
      <div class="col-12 col-md-3">
        <div class="d-flex flex-column wp-col">
          <p>
            15 rue de Vandrezanne <br> 75013 Paris </p>
          <p>7 rue d'Autun <br> 06000 Nice </p>
          <a href="https://www.linkedin.com/company/pitch-web/" title="Linkedin" target="_blank"><i
              class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="d-flex flex-column wp-col">
          <strong>Actualités</strong>
          @php $articles = get_articles(3); @endphp
          @foreach($articles as $article)
            <a href="{{ $article['permalink'] }}" class="mb-2 mb-sm-0"
               aria-label="{!! $article['title'] !!}">{!! $article['title'] !!}</a>
          @endforeach
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="d-flex flex-column wp-col">
          <strong>Agence</strong>
          <a href="{{ home_url() }}/agence/" class="mb-2 mb-sm-0" aria-label="L'agence">Découvrir l'agence</a>
          <a href="{{ home_url() }}/realisations/" class="mb-2 mb-sm-0" aria-label="Réalisations">Nos réalisations
            Wordpress</a>
          <a href="{{ home_url() }}/clients/" class="mb-2 mb-sm-0" aria-label="Références">Nos références clients</a>
          <a href="{{ home_url() }}/nos-actualites/" class="mb-2 mb-sm-0" aria-label="Actualités">Toute l'actualité
            Wordpress</a>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="d-flex flex-column wp-col last">
          <strong>Expertises</strong>
          <a href="#" class="mb-2 mb-sm-0" aria-label="L'Création de site web">Création de site web</a>
          <a href="{{ home_url() }}/maintenance-corrective-wordpress/" class="mb-2 mb-sm-0" aria-label="Maintenance corrective">Maintenance
            corrective</a>
          <a href="{{ home_url() }}/maintenance-evolutive-wordpress/" class="mb-2 mb-sm-0" aria-label="Maintenance évolutive">Maintenance
            évolutive</a>
          <a href="{{ home_url() }}/nos-actualites/" class="mb-2 mb-sm-0" aria-label="Hébergement">Hébergement</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center mt-5">
        <p class="mentions">
          <a href="<?php echo home_url(); ?>/mentions-legales/" aria-label="Mentions légales" target="_blank">Mentions
            légales</a> - <a href="<?php echo home_url(); ?>/politique-de-confidentialite/"
                             aria-label="Politique de confidentialité" target="_blank"> Politique de confidentialité</a>
          - Paris - Nice - ©2023 Le Pitch Web
        </p>
      </div>
    </div>
  </div>
</footer>
@include('components.mobile-menu')
<script>
  window.axeptioSettings = {
    clientId: "6436bc57c1f32a3562578bd5",
  };

  (function (d, s) {
    var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
    e.async = true;
    e.src = "//static.axept.io/sdk.js";
    t.parentNode.insertBefore(e, t);
  })(document, "script");
</script>


