<div id="section-{{ $row }}"
     class="section banner-cta mt-none mb">
  <div class="container text-start">
    <div class="row justify-content-between align-items-center">
      <div class="col-4 pe-5">
        @if($section['image'])
          {!! wp_get_attachment_image( $section['image']['id'], 'full','', array( "class" => "img-fluid")) !!}
        @endif
      </div>
      <div class="col-8 ps-5">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        @if($section['text'])
          <p>{!! $section['text'] !!}</p>
        @endif
        {{gravity_form(2, false, false, false, false, true, 12 )}}
      </div>
    </div>
  </div>
</div>