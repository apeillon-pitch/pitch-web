<div id="section-{{ $row }}"
     class="section-key-figures {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        <div class="row">

          @foreach($section['key_figures_repeater'] as $block)
            <div class="col-6 col-sm-3 mb-3 ps-4 pe-4 mb-lg-0 text-center block">
              @if($block['picto'])
                {!! wp_get_attachment_image($block['picto'], 'full','', array( "class" => "picto")) !!}
              @endif
              <span class="d-none d-md-block number purecounter text-center font-weight-bold"
                    data-purecounter-start="0" data-purecounter-duration="1"
                    data-purecounter-delay="10" data-purecounter-once="true"
                    data-purecounter-end="{{ $block['data'] }}">0</span>
                <span class="d-block d-md-none number text-center font-weight-bold">{{ $block['data'] }}</span>
              {!! $block['title'] !!}
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

