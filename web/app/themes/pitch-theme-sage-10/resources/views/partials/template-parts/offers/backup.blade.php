<div class="d-flex flex-column">
  <div class="d-flex flex-row align-items-center justify-content-between">
    <div class="d-flex flex-row align-items-center">
      <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="inclus">
      <strong>Gestion des sauvegardes</strong>
    </div>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBackup-{{ $offer }}"
            aria-expanded="false" aria-controls="collapseBackup-{{ $offer }}">
      +
    </button>
  </div>
  <div class="collapse" id="collapseBackup-{{ $offer }}">
    <div class="card card-body border-0 p-0">
      <ul>
        <li>Sauvegarde hebdomadaire avec possibilité de sauvegarde journalière</li>
        <li>Conservation des sauvegardes sur le Cloud</li>
        <li>Conservation de 12 jeux de sauvegardes</li>
      </ul>
    </div>
  </div>
</div>
