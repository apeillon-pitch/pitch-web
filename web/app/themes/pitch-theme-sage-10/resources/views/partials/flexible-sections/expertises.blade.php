<div id="section-{{ $row }}"
     class="section-expertises {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="d-none d-lg-block">
    @if ($section['first_picture'])
      <div class="parallax" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
        <figure class="mb-0">
          <img src="{{ $section['first_picture']['url'] }}"
               alt="Illustration site Wordpress" class="img-fluid out picture-first"/>
        </figure>
      </div>
    @endif
    @if ($section['second_picture'])
      <div class="parallax" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="600">
        <figure class="mb-0">
          <img src="{{ $section['second_picture']['url'] }}"
               alt="Illustration site Wordpress" class="img-fluid out picture-second"/>
          <figure>
      </div>
    @endif
    @if ($section['third_picture'])
      <div class="parallax" data-aos="fade-right">
        <figure class="mb-0" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
          <img src="{{ $section['third_picture']['url'] }}"
               alt="Illustration site Wordpress" class="img-fluid out picture-third"/>
        </figure>
      </div>
    @endif
  </div>
  <div class="container">
    <div class="wrapper text-center mb-5">
      @if ( $section['section_title'])
        @include('partials.flexible-sections.section_title')
      @endif
      @if ($section['text'])
        <div class="row justify-content-center">@if(empty($section['first_picture']) && empty($section['second_picture']) && empty($section['third_picture']))
            @php
              $introSize = 'col-10 col-lg-8'
            @endphp
          @else
            @php
              $introSize = 'col-10'
            @endphp
          @endif
          <div class="{{ $introSize }}">
            <div class="introduction">
              {!! $section['text'] !!}
            </div>
          </div>
        </div>
      @endif
    </div>
    @if(empty($section['first_picture']) && empty($section['second_picture']) && empty($section['third_picture']))
      @php
        $justification = 'justify-content-center'
      @endphp
      @else
      @php
        $justification = 'justify-content-end'
      @endphp
    @endif
    @if($section['blocks'])
      <div class="row {{ $justification }}">
        <div class="col-12 col-lg-9">
          <div class="row">
            @foreach($section['blocks'] as $block)
              <div class="col-12 col-md-6 mb-4">
                <div class="block">
                  <div class="row no-gutters align-items-center">
                    <div class="col-3">
                      @if($block['image'])
                        <img src="{{ $block['image']['url'] }}"
                             class="img-fluid" alt="Conception web" width="82px" height="82px"/>
                      @endif
                    </div>
                    <div class="col-9">
                      @if($block['title'])
                        <h3 class="mb-2">{!! $block['title'] !!}</h3>
                      @endif
                    </div>
                  </div>
                  <div class="row no-gutters justify-content-end">
                    <div class="col-9">
                      @if($block['text'])
                        <p>{!! $block['text'] !!}</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    @endif
  </div>
</div>

