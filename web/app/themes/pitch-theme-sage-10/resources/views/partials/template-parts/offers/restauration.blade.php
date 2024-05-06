<div class="d-flex flex-column">
  <div class="d-flex flex-row align-items-center justify-content-between">
    <div class="d-flex flex-row align-items-center">
      <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="inclus">
      <strong>Restauration du site</strong>
    </div>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRestauration-{{ $offer }}"
            aria-expanded="false" aria-controls="collapseRestauration-{{ $offer }}">
      +
    </button>
  </div>
  <div class="collapse" id="collapseRestauration-{{ $offer }}">
    <div class="card card-body border-0 p-0">
      <ul>
        <li>Restauration du site dans un délais de 24h</li>
        <li>Recette et scan anti-virus</li>
        <li>Mise à jour de la sécurité</li>
      </ul>
    </div>
  </div>
</div>
