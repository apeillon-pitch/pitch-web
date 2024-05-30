<div id="section-{{ $row }}" style="background-color: {{ $section['bg_color'] }}";
     class="section-contact {!! $section['padding_top'] !!} {!! $section['padding_bottom'] !!} {!! $section['margin_top'] !!} {!! $section['margin_bottom'] !!}">
  <div class="container-fluid">
    <div class="row  no-gutters justify-content-center">
      <div class="col-10">
        @if ( $section['section_title'])
          @include('partials.flexible-sections.section_title')
        @endif
        <div class="row justify-content-between">
          <div class="col-12 col-lg-6">
            {{gravity_form(1, false, false, false, false, true, -1 )}}
            <!-- Start of Meetings Embed Script -->
            {{--<div class="meetings-iframe-container" data-src="https://meetings-eu1.hubspot.com/amaury-peillon?embed=true"></div>
            <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>--}}
            <!-- End of Meetings Embed Script -->
          </div>
          <div class="col-12 col-lg-5 text-center">
            <a href="{{ home_url() }}" aria-label="Accueil">
              <img src="@asset('images/logo-lepitch.png')"
                   class="logo" alt="Agence Wordpress Paris et Nice" class="logo mb-4 mt-4" width="200px" height="48px" style="max-width: 200px">
            </a>
            <span class="d-block">09 72 14 94 25</span>
            <span class="d-block">contact[@]lepitch.fr</span>
            <div class="row align-items-center mt-4">
              <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h3 class="d-block mb-2">Agence web Paris</h3>
                <span class="d-block mb-4">15 Rue Vandrezanne - 75013 Paris</span>
                {{--<div class="ratio ratio-16x9">
                  <iframe
                    title="Map Paris"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.58758381038!2d2.3530185515265014!3d48.82792987918287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6718fb114b69b%3A0x7121054a2d09dc67!2s15%20Rue%20Vandrezanne%2C%2075013%20Paris!5e0!3m2!1sfr!2sfr!4v1588343834517!5m2!1sfr!2sfr"
                    width="600" height="450" frameborder="0" style="border:0;"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>--}}
              </div>
              <div class="col-12 col-lg-6">
                <h3 class="d-block mb-2">Agence web Nice</h3>
                <span class="d-block mb-4">7 rue d'Autun - 06000 Nice</span>
                {{--<div class="ratio ratio-16x9">
                  <iframe
                    title="Map Nice"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d46152.036826509626!2d7.281990284283433!3d43.70010937649066!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2bffbaf16cdf9917!2sLe%20Pitch%20Web!5e0!3m2!1sfr!2sfr!4v1588343783282!5m2!1sfr!2sfr"
                    width="600" height="450" frameborder="0" style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
                </div>--}}
              </div>
            </div>
            <img width="2048" height="1365" class="mt-4" style="border-radius: 20px;" src="https://lepitch-web.fr/app/uploads/2023/12/RW7A1165-1.jpg" alt="Agence WordPress" fetchpriority="high" decoding="async" srcset="https://lepitch-web.fr/app/uploads/2023/12/RW7A1165-1.jpg 2048w, https://lepitch-web.fr/app/uploads/2023/12/RW7A1165-1-300x200.jpg 300w, https://lepitch-web.fr/app/uploads/2023/12/RW7A1165-1-1024x683.jpg 1024w, https://lepitch-web.fr/app/uploads/2023/12/RW7A1165-1-768x512.jpg 768w, https://lepitch-web.fr/app/uploads/2023/12/RW7A1165-1-1536x1024.jpg 1536w" sizes="(max-width: 2048px) 100vw, 2048px">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

