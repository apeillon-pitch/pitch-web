<div id="section-{{ $row }}"
     class="section-clients section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    @if ( $section['section_title'])
      @include('partials.flexible-sections.section_title')
    @endif
    @if($section['logos_repeater'])
      @php $i =0; $t = count($section['logos_repeater']); @endphp
      @if ($t === 5)
        <div class="d-flex flex-column flex-md-row justify-content-between">
          @foreach($section['logos_repeater'] as $index => $logo)
            <div class="mb-4">
              <div class="logo-container" data-aos="zoom-out-down"
                   data-aos-duration="500"
                   data-aos-delay="{{ $i += 200 }}">
                {!! wp_get_attachment_image(  $logo['logo']['id'], 'full', '', array( "class" => "img-fluid") ) !!}
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="row">
          @foreach($section['logos_repeater'] as $index => $logo)
            @if($index < 12)
              <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="logo-container" data-aos="zoom-out-down"
                     data-aos-duration="500"
                     data-aos-delay="{{ $i += 200 }}">
                  {!! wp_get_attachment_image(  $logo['logo']['id'], 'full', '', array( "class" => "img-fluid") ) !!}
                </div>
              </div>
            @endif
          @endforeach
        </div>
      @endif
      <div class="collapse" id="collapseExample">
        <div class="card card-body bg-transparent p-0 border-0">
          <div class="row">
            @php $i = -200; @endphp
            @foreach($section['logos_repeater'] as $index => $logo)
              @if($index >= 12)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                  <div class="logo-container" data-aos="zoom-out-down"
                       data-aos-duration="500"
                       data-aos-delay="{{ $i + 200 }}">
                    <img src="{{ $logo['logo']['url'] }}" alt="Client Le Pitch - Site Wordpress"
                         class="img-fluid"/>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    @endif
    @if($t >= 12)
      <div class="text-center">
        <a class="cta d-inline-block mx-auto" data-aos="fade-up" data-aos-duration="500" data-aos-delay="2000"
           data-bs-toggle="collapse" href="#collapseExample" role="button"
           aria-expanded="false"
           aria-controls="collapseExample">
          Voir plus
        </a>
      </div>
    @endif
  </div>
</div>

