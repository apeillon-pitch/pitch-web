<div id="section-{{ $row }}"
     class="section-image-text-2col animated-section {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center justify-content-center">
      <div
        class="d-none d-lg-block col-lg-6 @php echo $section['img_position'] == 'right' ? 'order-2 ps-5' : 'pe-5' @endphp">
        <figure class="mb-0">
          <div class="image-wrapper">
            {!! wp_get_attachment_image( $section['image']['id'], 'full','', array( "class" => "animated-img")) !!}
          </div>
        </figure>
      </div>
      <div class="col-11 col-lg-6 @php echo $section['img_position'] == 'right' ? 'order-1' : '' @endphp">
        <div class="row">
          <div class="col-9">
            @if ( $section['section_title'])
              @include('partials.flexible-sections.section_title')
            @endif
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-9">
            @if ( $section['text'])
              {!! $section['text'] !!}
            @endif
            @if ($section['link'])
              <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="300">
                <div class="col-12 col-lg-8 mt-3">
                  <a href="{{ $section['link']['url'] }}" aria-label="{!! $section['link']['title'] !!}"
                     class="cta">{!! $section['link']['title'] !!}</a>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

