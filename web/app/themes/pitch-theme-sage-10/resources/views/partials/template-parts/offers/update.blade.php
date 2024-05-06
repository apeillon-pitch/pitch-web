<div class="d-flex flex-column">
  <div class="d-flex flex-row align-items-center justify-content-between">
    <div class="d-flex flex-row align-items-center">
      <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="inclus">
      <strong>Mise à jour plugins & CMS</strong>
    </div>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMAJ-{{ $offer }}"
            aria-expanded="false" aria-controls="collapseMAJ-{{ $offer }}">
      +
    </button>
  </div>
  <div class="collapse" id="collapseMAJ-{{ $offer }}">
    <div class="card card-body border-0 p-0">
      <ul>
        <li>Création d'une sauvegarde avant la mise à jour</li>
        <li>Gestion des mises à jour du CMS et des plugins*</li>
        <li>Recette post-mise à jour</li>
        <li>Restauration du site web en cas de bugs</li>
      </ul>
      <em>*Plugins gratuits ou plugins dont vous bénéficiez toujours de la licence.</em>
    </div>
  </div>
</div>
