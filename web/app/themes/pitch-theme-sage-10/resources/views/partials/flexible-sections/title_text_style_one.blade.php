<div id="section-{{ $row }}"
     class="section section-title-text pt {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-10 col-xx-9">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        @if($section['text'])
          <div class="wp-text">
            {!! $section['text'] !!}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
