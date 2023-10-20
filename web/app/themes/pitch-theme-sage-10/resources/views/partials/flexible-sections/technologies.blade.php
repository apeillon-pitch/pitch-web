<div id="section-{{ $row }}"
     class="section-technologies overflow-hidden section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container">
    @if ( $section['section_title'])
      @include('partials.flexible-sections.section_title')
    @endif
    @if($section['logos_repeater'])
      <div class="row justify-content-center">
        <div class="col-11 col-lg-4">
          <div class="slideshow">
            @php $i =0; @endphp
            @foreach($section['logos_repeater'] as $index => $logo)
              @if($index < 12)
                <div class="slide ps-4 pe-4">
                  <div class="logo-container">
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
  </div>
</div>

