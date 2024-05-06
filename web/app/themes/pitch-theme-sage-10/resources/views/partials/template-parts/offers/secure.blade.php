<div class="d-flex flex-column">
  <div class="d-flex flex-row align-items-center justify-content-between">
    <div class="d-flex flex-row align-items-center">
      @if($offer != "one")
        <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="non inclus">
      @endif
      @if($offer === "one")
        <img src="@asset('images/checkmark-circle-grey.svg')" class="me-2" alt="inclus">
      @endif
      <strong>Sécurisation du CMS</strong>
    </div>
    @if($offer != "one")
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSecure-{{ $offer }}" aria-expanded="false"
              aria-controls="collapseSecure-{{ $offer }}">
        +
      </button>
    @endif
  </div>
  <div class="d-flex flex-column">
    <div class="collapse" id="collapseSecure-{{ $offer }}">
      <div class="card card-body border-0 p-0">
        <ul>
          <li>Protection du site contre les principaux
            spams, virus et malware
          </li>
          <li>Protection renforcée des fichiers
            sensibles
          </li>
          <li>Personnalisation de l'url d'accès à
            l'admin
          </li>
          <li>Mise en place de Captcha</li>
          <li>Double authentication</li>
          <li>Obligation de mot de passe renforcé</li>
          <li>Blocage des IPs suspectes</li>
          <li>Reporting des fichiers modifiés</li>
          <li>...</li>
        </ul>
      </div>
    </div>
  </div>
</div>
