<div id="section-{{ $row }}"
     class="section section-cta-style-two pt {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-8 col-xxl-7">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        @if($section['text'])
          {!! $section['text'] !!}
        @endif
      </div>
    </div>
  </div>
</div>
