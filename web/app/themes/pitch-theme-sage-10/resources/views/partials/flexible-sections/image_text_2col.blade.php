<div id="section-{{ $row }}"
     class="section-image-text-2col {{ $section['gradient'] }} {{ $section['img_position'] }} img-{{ $section['img_size'] }} animated-section {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  @if($section['img_size'] == 'full')
    <div class="d-none d-lg-block wp-image h-100">
      <div class="row gx-0 h-100">
        <div
          class="d-none d-lg-block col-lg-6 h-100 @php echo $section['img_position'] == 'right' ? 'order-1 order-lg-2 ps-lg-5' : 'order-1 pe-lg-5' @endphp">
          <figure class="mb-0 h-100">
            <div class="image-wrapper">
              {!! wp_get_attachment_image( $section['image']['id'], 'full','', array( "class" => "animated-img")) !!}
            </div>
          </figure>
        </div>
      </div>
    </div>
  @endif
  <div class="container" data-aos="fade-up">
    <div
      class="row align-items-center justify-content-center @php echo $section['img_size'] == 'container' ? '' : 'justify-content-lg-end' @endphp">
      @if($section['img_size'] != 'full')
        <div
          class="col-12 col-lg-6 mb-5 mb-lg-0 @php echo $section['img_position'] == 'right' ? 'order-1 order-lg-2 ps-lg-5' : 'order-1 pe-lg-5' @endphp">
          @if($section['img_size'] == 'container')
            {!! wp_get_attachment_image( $section['image']['id'], 'medium_large','', array( "class" => "d-block d-lg-none")) !!}
            <figure class="d-none d-lg-block mb-0">
              <div class="image-wrapper @php echo empty($section['image_hover']) ? "" : "hover" @endphp">
                {!! wp_get_attachment_image( $section['image']['id'], 'medium_large','', array( "class" => "animated-img")) !!}
                @if($section['image_hover'])
                  {!! wp_get_attachment_image( $section['image_hover']['id'], 'medium_large','', array( "class" => "animated-img-hover")) !!}
                @endif
              </div>
            </figure>
          @else
            {!! wp_get_attachment_image( $section['image']['id'], 'medium_large','', array( "class" => "d-block mx-auto img-fluid b-radius")) !!}
          @endif
        </div>
      @endif
      <div
        class="col-11 col-lg-6 @php echo $section['img_size'] != 'full' ? '' : 'ps-5 pt-lg-5' @endphp @php echo $section['img_position'] == 'right' ? 'order-2 order-lg-1 pe-lg-5' : 'order-2 ps-lg-5' @endphp">
        <div class="row">
          <div class="col-12">
            @if ( $section['section_title'])
              @include('partials.flexible-sections.section_title')
            @endif
          </div>
        </div>
        <div class="row @php echo $section['img_size'] == 'container' ? 'justify-content-center' : '' @endphp">
          <div class="wp-text @php echo $section['img_size'] == 'container' ? 'col-12' : 'col-12' @endphp">
            @if ( $section['text'])
              {!! $section['text'] !!}
            @endif
            @if ($section['link'])
              <div class="row">
                <div class="col-12 mt-4">
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

