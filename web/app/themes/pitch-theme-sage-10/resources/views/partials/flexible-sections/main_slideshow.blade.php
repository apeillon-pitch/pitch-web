<div class="main-slideshow d-flex flex-column justify-content-between  align-items-center">
  @foreach($section['slideshow_repeater'] as $block)
    @foreach($block['slide_style'] as $slide)
      <div class="slide">
        <div class="container position-relative h-100">
          <div class="wp-bg">
            <div class="row align-items-center justify-content-end h-100">
              <div class="d-none d-lg-block col-12 col-lg-6 col-xl-5 h-100 ps-5 mb-5 mb-lg-0">
                @if($slide['video'])
                  <div class="d-flex flex-column justify-content-center h-100">
                    <video autoplay muted loop>
                      <source src="{{ $slide['video']['url'] }}" type="video/mp4">
                      Votre navigateur ne supporte pas la balise vidéo.
                    </video>
                  </div>
                @else
                  <figure class="flex mb-0">
                    {!! wp_get_attachment_image( $slide['bg_image']['id'], 'medium_large', '', array( "class" => "first img-fluid", "fetchpriority" => "high") ) !!}
                  </figure>
                @endif
              </div>
            </div>
          </div>
          <div class="row justify-content-center justify-content-lg-start align-items-center h-100" style="position: relative; z-index: 88;">
            <div class="col-11 col-lg-8">
              @if ($slide['acf_fc_layout'] == 'reference_type')
                <div class="wrapper-text fadeInLeft">
                  @if ($slide['title'])
                    <h1 class="overtitle mb-2">
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
                      <span class="typer"
                            data-typer="Paris et Nice| Création &amp; refonte de site Wordpress"></span>
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
                           class="cta">
                          <span>{!! $slide['link']['title'] !!}</span>
                        </a>
                      </div>
                    </div>
                  @endif
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endforeach
  @if($section['logo_repeater'])
    <div class="wp-slideshow-logo">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="slideshow-logo">
              @foreach($section['logo_repeater'] as $item)
                <div class="slide">
                  <figure class="mb-0">
                    {!! wp_get_attachment_image( $item['logo']['id'], 'medium','', array( "class" => "")) !!}
                  </figure>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
</div>
