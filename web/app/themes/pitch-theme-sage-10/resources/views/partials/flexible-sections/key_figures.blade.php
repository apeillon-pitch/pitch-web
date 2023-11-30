<div id="section-{{ $row }}"
     class="section-key-figures d-none d-lg-block {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        <div class="row justify-content-center">

          @foreach($section['key_figures_repeater'] as $block)
            <div class="col-6 col-sm-3 mb-3 ps-4 pe-4 mb-lg-0 text-start block">
              <div class="d-block w-100">
                <div class="d-inline-block mx-auto position-relative wp">
              <span class="d-none d-md-block number purecounter text-center font-weight-bold"
                    data-purecounter-start="0" data-purecounter-duration="1"
                    data-purecounter-delay="15" data-purecounter-once="true"
                    data-purecounter-end="{{ $block['data'] }}">0</span>
                  <span class="d-block d-md-none numbzer text-center font-weight-bold">{{ $block['data'] }}</span>
                  @if ($block['suffix'])
                    <span class="suffix">{!! $block['suffix'] !!}</span>
                  @endif
                </div>
              </div>
              @if($block['title'] )
                <strong>{!! $block['title'] !!}</strong>
              @endif
              @if($block['text'] )
                <p class="pe-5">{!! $block['text'] !!}</p>
              @endif
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <script>
    new PureCounter();
  </script>
</div>

