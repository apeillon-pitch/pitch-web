<div class="d-flex flex-column">
  <div class="d-flex flex-row align-items-center justify-content-between">
    <div class="d-flex flex-row align-items-center">
      @if($offer != "one")
        <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="non inclus">
      @endif
      @if($offer === "one")
        <img src="@asset('images/checkmark-circle-grey.svg')" class="me-2" alt="inclus">
      @endif
      <strong>Monitoring</strong>
    </div>
    @if($offer != "one" AND $offer != "two")
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseMonitoring-{{ $offer }}" aria-expanded="false"
              aria-controls="collapseMonitoring-{{ $offer }}">
        +
      </button>
    @endif
  </div>
  <div class="collapse" id="collapseMonitoring-{{ $offer }}">
    <div class="card card-body border-0 p-0">
      <ul>
        <li>Alerte en cas d'interruption de service 7jrs/7 - 24h/24</li>
      </ul>
    </div>
  </div>
</div>
