<div id="section-{{ $row }}"
     class="section-key-figures {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h1 class="section-title">Portfolio</h1>
        <div class="row">
          @php echo '[ess_grid alias="portfolio"][/ess_grid]' @endphp
        </div>
      </div>
    </div>
  </div>
</div>

