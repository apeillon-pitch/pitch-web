<div id="section-{{ $row }}"
     class="section-projects {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        <div class="row">
          {!! $section['content'] !!}
        </div>
      </div>
    </div>
  </div>
</div>

