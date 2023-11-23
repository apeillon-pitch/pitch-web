<div id="section-{{ $row }}"
     class="section-text-2col animated-section {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-4">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
      </div>
      <div class="col-11 col-lg-8 ps-lg-5">
        @if($section['item_repeater'])
          <div class="row">
            @foreach($section['item_repeater'] as $item)
              <div class="col-12 col-lg-6 text-center mt-3 @if($loop->last) mb-0 @else mb-5 @endif">
                @if ( $item['section_subtitle'])
                  <div class="d-block mb-3">
                    <span class="title mb-2">{!! $item['section_subtitle'] !!}</span>
                  </div>
                @endif
                {!! $item['text'] !!}
                @if($item['text_collapse'])
                  <div class="collapse" id="collapse-{{ $row }}-{{ $loop->iteration }}">
                    <div class="card card-body">
                      {!! $item['text_collapse'] !!}
                    </div>
                  </div>
                @endif
                @if($item['text_collapse'])
                  <button class="btn btn-primary mx-auto d-block" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-{{ $row }}-{{ $loop->iteration }}" aria-expanded="false"
                          aria-controls="collapse-{{ $row }}-{{ $loop->iteration }}">
                    <span>+</span>
                  </button>
                @endif
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

