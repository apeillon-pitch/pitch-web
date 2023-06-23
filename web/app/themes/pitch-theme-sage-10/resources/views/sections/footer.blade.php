<footer class="content-info @php echo is_page(313) ? 'd-none' : '' @endphp">
  <div class="container">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
      <div class="text-start">
        <a href="{{ home_url() }}" aria-label="Accueil">
          <img src="@asset('images/pitch-white.svg')"
               class="logo mb-3" alt="Logo Le Pitch" width="200px" height="48px" style="max-width: 200px">
        </a>
        <p>
          15 rue de Vandrezanne - 75013 Paris <br>7 rue d'Autun - 06000 Nice
          <br>09 72 14 94 25 - contact[@]lepitch.fr
        </p>
      </div>

      <div class="text-start">
        <div class="d-flex flex-column">
          <a href="{{ home_url() }}/agence/" aria-label="L'agence">L'agence</a>
          <a href="{{ home_url() }}/realisations/" aria-label="Réalisations">Réalisations</a>
          <a href="{{ home_url() }}/clients/" aria-label="Références">Références</a>
          <a href="{{ home_url() }}/nos-actualites/" aria-label="Actualités">Actualités</a>
        </div>
      </div>

      <div class="text-start">
        <div class="d-flex flex-column">
          <a href="{{ home_url() }}/agence/#section-5" aria-label="Faq">Faq</a>
          <a href="{{ home_url() }}/lexique/" aria-label="Lexique">Lexique</a>
          <a href="{{ home_url() }}/partenaires/" aria-label="Partenaires">Partenaires</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-start mt-4">
        <p class="mentions">
          <a href="<?php echo home_url(); ?>/mentions-legales" aria-label="Mentions légales" target="_blank"> Mentions légales</a> - <a href="<?php echo home_url(); ?>/politique-de-confidentialite" aria-label="Politique de confidentialité" target="_blank"> Politique de confidentialité</a> - Paris - Nice - ©2023 Le Pitch Web
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

  (function(d, s) {
    var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
    e.async = true; e.src = "//static.axept.io/sdk.js";
    t.parentNode.insertBefore(e, t);
  })(document, "script");
</script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/27225427.js"></script>
<!-- End of HubSpot Embed Code -->

