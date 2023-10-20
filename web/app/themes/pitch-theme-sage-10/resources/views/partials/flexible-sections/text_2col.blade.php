<div id="section-{{ $row }}"
     class="section-text-2col animated-section {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-4">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
      </div>
      <div class="col-12 col-lg-8 ps-lg-5">
        @if($section['item_repeater'])
          @foreach($section['item_repeater'] as $item)
            <div class="row @php echo $loop->iteration % 2 == 0 ? 'justify-content-end' : '' @endphp">
              <div class="col-12 col-lg-7 mt-5 @if($loop->last) mb-0 @else mb-5 @endif">
                @if ( $item['section_subtitle'])
                  <div class="d-block mb-3">
                  <span class="number">{{  $loop->iteration }}.</span>
                  <span class="title mb-2">{!! $item['section_subtitle'] !!}</span>
                  </div>
                @endif
                {!! $item['text'] !!}
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>

