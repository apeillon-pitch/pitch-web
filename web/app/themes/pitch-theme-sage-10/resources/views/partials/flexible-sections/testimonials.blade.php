<div
  class="d-none d-lg-block section-testimonials section-bg-color {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}"
  id="section-{{ $row }}">
  <div class="container">
    @if($section['section_title'])
      <h2>{!! $section['section_title'] !!}</h2>
    @endif
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <div class="slideshow-testimonials">
          @if($section['testimonials_repeater'])
            @foreach($section['testimonials_repeater'] as $testimony)
              <div class="slide">
                {{ $testimony['testimony'] }}
                @if($testimony['client-name'])
                  <span class="client-name">{{ $testimony['client-name'] }}</span>
                @endif
                @if($testimony['client-company'])
                  <span class="client-company">{{ $testimony['client-company'] }}</span>
                @endif
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
    <div class="d-block d-md-block">
      @php
        $index = 0;
      @endphp
      @if ($section['logos_repeater'])
        @php $i = 0; @endphp
        @foreach($section['logos_repeater'] as $logo)
          @if ($logo['logo'])
            <img src="{{ $logo['logo']['url'] }}" alt="Client Le Pitch - Site Wordpress" data-aos="flip-left" data-aos-duration="500" data-aos-delay="{{ $i += 150 }}"
                 class="logo-{{ $index }}"/>
          @endif
          @php
            $index++;
          @endphp
        @endforeach
      @endif
    </div>
  </div>
</div>

