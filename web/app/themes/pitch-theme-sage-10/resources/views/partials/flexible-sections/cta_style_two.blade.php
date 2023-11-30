<div id="section-{{ $row }}"
     class="section section-cta-style-two {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center justify-content-lg-start mb-5">
      <div class="col-11 col-lg-8">
        <span class="section-title mb-0">Nos prestations</span>
        <h2 class="subtitle">Découvrez les expertises de notre agence web</h2>
      </div>
    </div>
    @if($section['item_repeater'])
      <div class="row">
        @foreach($section['item_repeater'] as $item)
          <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card text-center">
              @if($item['picto'])
                <img src="{{ $item['picto']['url'] }}" class="img-fluid d-block mx-auto"
                     alt="Conception web" width="82px" height="82px">
              @endif
              @if($item['title'])
                <h3>{!! $item['title'] !!}</h3>
              @endif
              @if($item['texte'])
                <p>{!! $item['texte'] !!}</p>
              @endif
                <a href="{!! $item['link']['url'] !!}" class="btn btn-primary mx-auto d-block" aria-label="+">
                  <span>+</span>
                </a>
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>