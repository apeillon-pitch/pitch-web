<div id="section-{{ $row }}"
     class="section section-cta-style-two section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    @if(!is_page(2000))
      <div class="row mb-5 pb-4">
        <div class="col-12 text-center">
          <span class="section-title mb-0">Nos expertises</span>
          <h2 class="subtitle">vous accompagnez à toutes les étapes de votre projet</h2>
        </div>
      </div>
    @endif
    @if($section['item_repeater'])
      <div class="row">
        @foreach($section['item_repeater'] as $item)
          <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="card d-flex flex-column justify-content-between text-center">
              @if($item['picto'])
                <img src="{{ $item['picto']['url'] }}" class="img-fluid d-block mx-auto"
                     alt="Conception web" width="82px" height="82px">
              @endif
              @if($item['title'])
                <h3 class="mb-0">{!! $item['title'] !!}</h3>
              @endif
              @if($item['texte'])
                <p class="mb-0">{!! $item['texte'] !!}</p>
              @endif
              @if($item['link'])
                <a href="{!! $item['link']['url'] !!}" class="btn btn-primary mx-auto d-block" aria-label="+">
                  <span>+</span>
                </a>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>
