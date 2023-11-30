@php $clients = get_testimony(); @endphp
@if($clients)
  <div
    class="section client overflow-hidden {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
    <div class="container">
      <div class="row justify-content-center align-items-end mb-5">
        <div class="col-11 col-lg-8">
          @if ( $section['section_title'])
            @include('partials.flexible-sections.section_title')
          @endif
         {{-- @if ($section['text'])
            <div class="row justify-content-center">
              <div class="col-12 col-sm-11 col-md-10">
                {!! $section['text'] !!}
              </div>
            </div>
          @endif--}}
        </div>
        <div class="col-11 col-lg-4">
          <div class="wp-nav d-none d-sm-flex flex-row justify-content-end">
            <div id="slick-prev" class="me-4">
              <svg width="39px" height="39px" viewBox="0 0 39 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>44589612-A457-4642-B284-D6467263C45B</title>
                <g id="maquettes" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="04---Clients-V2" transform="translate(-1164.000000, -372.000000)" fill="#000000" fill-rule="nonzero">
                    <g id="arrow-pointing-left" transform="translate(1164.000000, 372.146850)">
                      <path d="M37.4309978,18.2179489 L2.68379984,18.2179489 L19.7081988,1.19594993 C19.9793988,0.922949945 19.9793988,0.477749972 19.7081988,0.204749988 C19.4345988,-0.0682499959 18.9887989,-0.0682499959 18.7169989,0.204749988 L0.49739997,18.4243489 C0.49739997,18.4243489 0.49739997,18.4243489 0.49499997,18.4255489 L0,18.9181489 L0.49499997,19.4131488 C0.49739997,19.4131488 0.49739997,19.4131488 0.49739997,19.4149488 L18.7169989,37.6339478 C18.8531989,37.7719477 19.0319989,37.8379477 19.2113989,37.8379477 C19.3907988,37.8379477 19.5701988,37.7695477 19.7081988,37.6339478 C19.9805988,37.3603478 19.9805988,36.9157478 19.7081988,36.6433478 L2.68379984,19.6189488 L37.4309978,19.6189488 C37.8155977,19.6189488 38.1317977,19.3057488 38.1317977,18.9181489 C38.1317977,18.5323489 37.8155977,18.2179489 37.4309978,18.2179489 Z" id="Path"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <div id="slick-next">
              <svg width="39px" height="39px" viewBox="0 0 39 39" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>0A4227EE-9834-4F37-B058-A4ED6955B901</title>
                <g id="maquettes" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="04---Clients-V2" transform="translate(-1245.000000, -372.000000)" fill="#000000" fill-rule="nonzero">
                    <g id="arrow-pointing-left-copy" transform="translate(1264.934101, 391.065824) scale(-1, 1) translate(-1264.934101, -391.065824) translate(1245.868202, 372.146850)">
                      <path d="M37.4309978,18.2179489 L2.68379984,18.2179489 L19.7081988,1.19594993 C19.9793988,0.922949945 19.9793988,0.477749972 19.7081988,0.204749988 C19.4345988,-0.0682499959 18.9887989,-0.0682499959 18.7169989,0.204749988 L0.49739997,18.4243489 C0.49739997,18.4243489 0.49739997,18.4243489 0.49499997,18.4255489 L0,18.9181489 L0.49499997,19.4131488 C0.49739997,19.4131488 0.49739997,19.4131488 0.49739997,19.4149488 L18.7169989,37.6339478 C18.8531989,37.7719477 19.0319989,37.8379477 19.2113989,37.8379477 C19.3907988,37.8379477 19.5701988,37.7695477 19.7081988,37.6339478 C19.9805988,37.3603478 19.9805988,36.9157478 19.7081988,36.6433478 L2.68379984,19.6189488 L37.4309978,19.6189488 C37.8155977,19.6189488 38.1317977,19.3057488 38.1317977,18.9181489 C38.1317977,18.5323489 37.8155977,18.2179489 37.4309978,18.2179489 Z" id="Path"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container p-0">
      <div class="slideshow">
        @php $i = 1 @endphp
        @foreach($clients as $client)
          @if ($client)
            @if ($i > 3)
              @php $i = 1 @endphp
            @endif
            <div class="slide">
              @include('partials.template-parts.cards.card-client', ['item' => $client])
            </div>
          @endif
          @php $i++ @endphp
        @endforeach
      </div>
    </div>
  </div>
@endif
