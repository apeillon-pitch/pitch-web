<div id="section-{{ $row }}"
     class="section-projects {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-left">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        <div class="row">
          {!! $section['content'] !!}
        </div>
        @if($section['link'])
          <div class="col-12 text-center mt-5">
            <a href="{{ $section['link']['url'] }}" class="cta mt-5"
               target="{{ $section['link']['target'] }}">{!! $section['link']['title'] !!}</a>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

