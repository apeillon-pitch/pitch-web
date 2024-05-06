<div class="d-flex flex-column">
  <div class="d-flex flex-row align-items-center justify-content-between">
    <div class="d-flex flex-row align-items-center">
      <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="inclus">
      <strong>Gestion des sauvegardes</strong>
    </div>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMAJ-{{ $offer }}"
            aria-expanded="false" aria-controls="collapseMAJ-{{ $offer }}">
      +
    </button>
  </div>
  <div class="collapse" id="collapseMAJ-{{ $offer }}">
    <div class="card card-body border-0 p-0">
      <ul>
        <li>Sauvegardes hebdomadaire avec possibilité de sauvegarde journalière</li>
        <li>Conservation des sauvegardes sur un espace sécurisé</li>
        <li>Conservation de 12 jeux de sauvegardes</li>
      </ul>
      <strong>Restauration du site</strong>
      <ul>
        <li>Restauration du site dans un délais de 24h</li>
        <li>Recette et scan anti-virus</li>
        <li>Mise à jour de la sécurité</li>
      </ul>
      <strong>Mises à jour plugins & CMS</strong>
      <ul>
        <li>Gestion de la sauvegarde avant mise à jour</li>
        <li>Gestion des mises à jour</li>
        <li>Recette post mises à jour</li>
        <li>Restauration du site en cas de bugs</li>
      </ul>
    </div>
  </div>
</div>
