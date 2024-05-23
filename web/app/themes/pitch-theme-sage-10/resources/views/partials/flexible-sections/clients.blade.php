<div id="section-{{ $row }}"
     class="section-clients section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-12">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
      </div>
    </div>
  </div>
  <div class="ps-5 pe-5">
    <div class="row justify-content-center">
      @if($section['logos_repeater'])
        @php $i =0; $t = count($section['logos_repeater']); @endphp
        @if ($t === 1)
          <div class="d-flex flex-column flex-md-row justify-content-between">
            @foreach($section['logos_repeater'] as $index => $logo)
              <div class="mb-4">
                <div class="logo-container">
                  {!! wp_get_attachment_image(  $logo['logo']['id'], 'full', '', array( "class" => "img-fluid") ) !!}
                </div>
              </div>
            @endforeach
          </div>
        @else
          <div class="row justify-content-center">
            @foreach($section['logos_repeater'] as $index => $logo)
              @if($index < 60)
                <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                  <div class="logo-container">
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
                @if($index >= 60)
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                    <div class="logo-container">
                      {!! wp_get_attachment_image(  $logo['logo']['id'], 'full', '', array( "class" => "img-fluid") ) !!}
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      @endif
      @if($t >= 60)
        <div class="text-center">
          <a class="cta d-inline-block mx-auto"
             data-bs-toggle="collapse" href="#collapseExample" role="button"
             aria-expanded="false"
             aria-controls="collapseExample">
            Voir plus
          </a>
        </div>
      @endif
    </div>
  </div>
</div>

