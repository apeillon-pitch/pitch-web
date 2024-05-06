<div class="d-flex flex-row align-items-center justify-content-between">
  <div class="d-flex flex-row align-items-center">
    @if($offer != "one" AND $offer != "two")
      <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="non inclus">
    @endif
    @if($offer === "one" OR $offer === "two"))
    <img src="@asset('images/checkmark-circle-grey.svg')" class="me-2" alt="inclus">
    @endif
    <strong>Cloudflare</strong>
  </div>
</div>
