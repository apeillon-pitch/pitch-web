<div id="section-{{ $row }}"
     class="section slideshow-step-by-step {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    @if(!is_page(2000))
      <div class="row justify-content-center mb-5">
        <div class="col-11 col-lg-8 text-center">
          <span class="section-title mb-0">Comment ça marche ?</span>
          {{--<h2 class="subtitle">Quelles sont les étapes pour votre projet ?</h2>--}}
        </div>
      </div>
    @endif

    @if($section['item_repeater'])
      <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
        @foreach($section['item_repeater'] as $item)
          <li class="nav-item" role="presentation">
            <button class="nav-link {{ $loop->first === true ? 'active' : '' }}"
                    id="pills-{{ $row }}-{{ $loop->iteration }}-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-{{ $row }}-{{ $loop->iteration }}"
                    type="button" role="tab" aria-controls="pills-{{ $row }}-{{ $loop->iteration }}"
                    aria-selected="{{ $loop->first === true ? true : false }}">
              {!! $item['title']!!}
            </button>
          </li>
        @endforeach
      </ul>

      <div class="tab-content" id="pills-{{ $row }}-tabContent">
        @foreach($section['item_repeater'] as $item)
          <div class="tab-pane fade {{ $loop->first === true ? 'active show' : '' }}"
               id="pills-{{ $row }}-{{ $loop->iteration }}" role="tabpanel"
               aria-labelledby="pills-{{ $row }}-{{ $loop->iteration }}-tab"
               tabindex="0">
           @if($item['introduction'])
              <div class="d-block text-center subtitle mb-5">
                {!! $item['introduction'] !!}
              </div>
            @endif
            <div class="slideshow">
              @if($item['slideshow'])
                @foreach($item['slideshow'] as $slide)
                  <div class="slide">
                    <div class="wp-block">
                      <span class="number">{{ $loop->iteration }}.</span>
                      <h3 class="mb-0">{!! $slide['title'] !!}</h3>
                      <p>{!! $slide['text'] !!}</p>
                    </div>
                  </div>
                @endforeach
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>
