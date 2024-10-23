<div class="main-slideshow @php echo is_front_page() ? '' : 'small' @endphp section d-flex flex-column justify-content-between  align-items-center">
  @foreach($section['slideshow_repeater'] as $block)
    @foreach($block['slide_style'] as $slide)
      <div class="container position-relative h-100">
        <div
          class="row justify-content-center @php echo is_front_page() ? 'justify-content-lg-start' : '' @endphp align-items-center h-100">
          <div class="col-11  @php echo is_front_page() ? 'col-lg-7' : 'col-lg-8' @endphp">
            @if ($slide['acf_fc_layout'] == 'reference_type')
              <div class="wrapper-text d-flex flex-column fadeInLeft  @php echo is_front_page() ? 'pb-5 pb-lg-0' : '' @endphp">
                @if ($slide['title'])
                  <div class="d-flex flex-row align-items-center @php echo is_front_page() ? 'justify-content-center justify-content-lg-start' : 'justify-content-center text-center' @endphp mb-0">
                    @if(is_front_page())
                      <img src="@asset('images/wordpress-simple-brands-solid.svg')" width="20px" height="20px"
                           alt="Wordpress" class="me-2">
                    @endif
                    <h1 class="overtitle mb-0">
                      {!! $slide['title'] !!}
                    </h1>
                  </div>
                @endif
                @if ($slide['text'])
                  <h2 class="title mb-0 @php echo is_front_page() ? '' : 'text-center' @endphp">
                    {!! $slide['text'] !!}
                  </h2>
                @endif
                {{--@if(is_front_page())
                  <div class="d-none d-md-block mt-3">
                    <strong class="text-uppercase place">Paris & Nice</strong>
                  </div>
                @endif--}}
                @if ($slide['introduction'])
                  <div class="row @php echo is_front_page() ? '' : 'justify-content-center' @endphp">
                    <div class="col-12 col-lg-9">
                      <p class="mb-0 @php echo is_front_page() ? '' : 'text-center' @endphp">{!! $slide['introduction'] !!}</p>
                    </div>
                  </div>
                @endif
                @if(!is_page(1986))
                  <div class="row @php echo is_front_page() ? '' : 'justify-content-center' @endphp">
                    <div class="col-12 col-lg-7 mt-3">
                      {{gravity_form(2, false, false, false, false, true, -1 )}}
                    </div>
                  </div>
                @else
                  <div class="row @php echo is_front_page() ? '' : 'justify-content-center' @endphp">
                    <div class="col-12 col-lg-7 mt-3">
                      <a href="{{ home_url() }}" aria-label="Voir le site"
                         class="cta">
                        <span>Retour à l'accueil</span>
                      </a>
                    </div>
                  </div>
                @endif
                <div class="d-flex flex-row align-items-center @php echo is_front_page() ? '' : 'justify-content-center' @endphp wp-reviews">
                  <img src="@asset('images/star-sharp-solid.svg')" width="16" height="auto"
                       alt="Star" class="me-1">
                  <img src="@asset('images/star-sharp-solid.svg')" width="16" height="auto"
                       alt="Star" class="me-1">
                  <img src="@asset('images/star-sharp-solid.svg')" width="16" height="auto"
                       alt="Star" class="me-1">
                  <img src="@asset('images/star-sharp-solid.svg')" width="16" height="auto"
                       alt="Star" class="me-1">
                  <img src="@asset('images/star-sharp-solid.svg')" width="16" height="auto"
                       alt="Star" class="me-2">
                  <span class="me-2">5/5 avis</span>
                  <figure class="mb-0">
                    <img src="@asset('images/google-sigle.png')" width="25px" height="auto"
                         alt="Google">
                  </figure>
                </div>
              </div>
            @endif
          </div>
          @if(is_front_page())
            <div class="d-none d-lg-block col-lg-5">
              @if($slide['video'])
                <div class="d-flex flex-column justify-content-center h-100">
                  <video autoplay muted loop>
                    <source src="{{ $slide['video']['url'] }}" type="video/mp4">
                    Votre navigateur ne supporte pas la balise vidéo.
                  </video>
                </div>
              @else
                @if($slide['item_repeater'])
                  <div class="main-project-slideshow">
                    @foreach($slide['item_repeater'] as $item)
                      <div class="slide">
                        <figure class="flex mb-0">
                          {!! wp_get_attachment_image( $item['bg_image']['id'], 'medium_large', '', array( "class" => "first img-fluid", "fetchpriority" => "high") ) !!}
                        </figure>
                      </div>
                    @endforeach
                  </div>
                @endif
              @endif
            </div>
          @endif
        </div>
      </div>
    @endforeach
  @endforeach
  @if($section['logo_repeater'])
    <div class="wp-slideshow-logo">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <strong class="title text-uppercase pb-5">Ils nous font confiance ...</strong>
            <div class="slideshow-logo mt-5">
              @foreach($section['logo_repeater'] as $item)
                <div class="slide">
                  <figure class="mb-0">
                    {!! wp_get_attachment_image( $item['logo']['id'], 'medium','', array( "class" => "", "fetchpriority" => "high")) !!}
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
