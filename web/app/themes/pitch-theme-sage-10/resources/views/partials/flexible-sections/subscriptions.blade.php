<div id="section-{{ $row }}" class="section subscriptions style-one pt">
  <div class="container">
    <div class="d-flex flex-column wp-section">
      <div class="row justify-content-center mb-3">
        <div class="col-11 col-lg-9 col-xl-8 col-xxl-7">
          <div class="d-flex flex-column wp-heading text-center">
            <h2 class="section-title">Offres de maintenance 🚀 <br>
              <span>dédiées aux sites <strong>WordPress</strong></span></h2>
          </div>
        </div>
      </div>

      <div class="d-flex flex-row justify-content-center pb-4 mb-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active"
                    id="home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#eurl-tab-pane"
                    type="button" role="tab" aria-controls="eurl-tab-pane" aria-selected="true">Auto-entrepreneur / EURL
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pme-tab" data-bs-toggle="tab" data-bs-target="#pme-tab-pane"
                    type="button" role="tab" aria-controls="pme-tab-pane" aria-selected="false">TPE / PME
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="group-tab" data-bs-toggle="tab" data-bs-target="#group-tab-pane"
                    type="button" role="tab" aria-controls="group-tab-pane" aria-selected="false">Grand Groupe
            </button>
          </li>
        </ul>
      </div>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="eurl-tab-pane" role="tabpanel" aria-labelledby="eurl-tab"
             tabindex="0">
          @include('partials.template-parts.offers.tab-eurl')
        </div>
        <div class="tab-pane fade" id="pme-tab-pane" role="tabpanel" aria-labelledby="pme-tab" tabindex="0">
          @include('partials.template-parts.offers.tab-tpe')
        </div>
        <div class="tab-pane fade" id="group-tab-pane" role="tabpanel" aria-labelledby="group-tab" tabindex="0">
          @include('partials.template-parts.offers.tab-group')
        </div>
      </div>


      <div class="d-flex flex-row justify-content-center mt-5">
        {{gravity_form(2, false, false, false, false, true, -1 )}}
    {{--    <a href="https://lepitch-web.fr/contact/" aria-label="Souscrire une offre"
           class="cta">Demande de renseignement</a>--}}
      </div>
      <div class="d-flex flex-row justify-content-center mt-3">
        ou appelez-nous au <strong class="ms-1">09 72 14 94 25</strong>
      </div>
    </div>
  </div>
</div>

