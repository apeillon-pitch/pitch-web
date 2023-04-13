<div id="section-{{ $row }}"
     class="section-image-text-2col {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    @if ( $section['section_title'])
      @include('partials.flexible-sections.section_title')
    @endif
    <div class="row align-items-center justify-content-center">
      <div class="d-none d-lg-block col-lg-3 pe-5">
        {!! wp_get_attachment_image( $section['image']['id'], 'medium','', array( "class" => "img-fluid")) !!}
      </div>
      <div class="col-11 col-lg-8">
        @if ( $section['text'])
          {!! $section['text'] !!}
        @endif
        <div class="d-flex flex-row mt-4">
          <a class="button button-arrow me-4" href="{{ home_url() }}/#section-7">
            <span class="button-shift"><span class="button-underline">nos clients</span></span>
          </a>
          <a class="button button-arrow me-4" href="{{ home_url() }}/#section-6">
            <span class="button-shift"><span class="button-underline">nos expertises</span></span>
          </a>
          <a class="button button-arrow" href="{{ home_url() }}/contact/">
            <span class="button-shift"><span class="button-underline">contact</span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

