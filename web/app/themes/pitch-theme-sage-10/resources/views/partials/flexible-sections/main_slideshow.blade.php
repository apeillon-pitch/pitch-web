<div class="main-slideshow">
  @foreach($section['slideshow_repeater'] as $block)
    @foreach($block['slide_style'] as $slide)
      <div class="slide">
        <div class="container position-relative h-100">
          <div class="wp-bg">
            <div class="row align-items-center justify-content-end h-100">
              <div class="col-12 col-lg-6 col-xl-5 h-100 ps-5 mb-5 mb-lg-0">
                <figure class="flex mb-0">
                  {!! wp_get_attachment_image( $slide['bg_image']['id'], 'full', '', array( "class" => "first img-fluid", "fetchpriority" => "high") ) !!}
                </figure>
              </div>
            </div>
          </div>
          <div class="row justify-content-center justify-content-lg-start align-items-center h-100">
            <div class="col-11 col-lg-8">
              @if ($slide['acf_fc_layout'] == 'reference_type')
                <div class="wrapper-text fadeInLeft">
                  @if ($slide['title'])
                    <h1 class="overtitle mb-3">
                      {!! $slide['title'] !!}
                    </h1>
                  @endif
                  @if ($slide['text'])
                    <h2 class="title">
                      {!! $slide['text'] !!}
                    </h2>
                  @endif
                  @if(is_front_page())
                    <div class="h1">
                      <span class="typer" data-typer="créative| spécialiste Wordpress| Paris et Nice| SEO &amp; UX first|"></span>
                      <span class="typed-cursor"></span>
                    </div>
                  @endif
                  @if ($slide['introduction'])
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8">
                        <p>{!! $slide['introduction'] !!}</p>
                      </div>
                    </div>
                  @endif
                  @if ($slide['link'])
                    <div class="row">
                      <div class="col-12 col-lg-8 mt-3">
                        <a href="{{ $slide['link']['url'] }}" aria-label="{!! $slide['link']['title'] !!}"
                           class="cta">{!! $slide['link']['title'] !!}</a>
                      </div>
                    </div>
                  @endif
                </div>
              @endif
            </div>
          </div>
          <div class="d-none d-lg-block scroll-btn">
            <a href="#section-1" aria-label="Scroll" rel='m_PageScroll2id' class="page-scroll">
              <div class="mouse">
                <div class="weel">
                  <span></span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    @endforeach
  @endforeach
</div>
