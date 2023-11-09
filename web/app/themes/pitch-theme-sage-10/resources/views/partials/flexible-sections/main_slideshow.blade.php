<div class="main-slideshow" data-aos="fade-up">
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
                    <span class="overtitle" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                      {!! $slide['title'] !!}
                    </span>
                  @endif
                  @if ($slide['text'])
                    <h1 class="title" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                      {!! $slide['text'] !!}
                    </h1>
                  @endif
                  <div class="h1">
                    <span class="typer" data-typer="créative| technique| réactive| SEO &amp; UX first"></span>
                    <span class="typed-cursor"></span>
                  </div>
                  @if ($slide['introduction'])
                    <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="300">
                      <div class="col-12 col-lg-8">
                        <p>{!! $slide['introduction'] !!}</p>
                      </div>
                    </div>
                  @endif
                  @if ($slide['link'])
                    <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="300">
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
