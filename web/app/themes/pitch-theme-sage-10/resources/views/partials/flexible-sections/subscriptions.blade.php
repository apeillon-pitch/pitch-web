<div id="section-{{ $row }}" class="section subscriptions style-one">
  <div class="container">
    <div class="d-flex flex-column wp-section">
      <div class="row justify-content-center mb-5">
        <div class="col-11 col-lg-9 col-xl-8 col-xxl-7">
          <div class="d-flex flex-column wp-heading text-center">
            <h2 class="section-title">Offres de maintenance <br> <span>sites Wordpress<span></h2>
          </div>
        </div>
      </div>


      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4">
          <div class="card-offer h-100 mb-4">
            <div class="wp-card">
              <div class="card-header text-center">
                <h4 class="title">Essentiel</h4>
              </div>
              <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex flex-column wp-heading">
                  <span class="price">55€</span>
                  <span class="mention mb-1">ht par mois</span>
                  <span class="baseline">Offre sans engagement</span>
                </div>
                <div class="wp-excerpt">
                  @include('partials.template-parts.offers.essential', ['offer' => 'one'])
                  @include('partials.template-parts.offers.default', ['offer' => 'one'])
                  <div class="d-flex flex-row align-items-center justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <img src="@asset('images/checkmark-circle-grey.svg')" class="me-2" alt="non inclus">
                      <strong>Cloudflare</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4">
          <div class="card-offer h-100 mb-4 best-seller">
            <div class="wp-best">
              <span>Best seller</span>
            </div>
            <div class="wp-card">
              <div class="card-header text-center">
                <h4 class="title">Sérénité</h4>
              </div>
              <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex flex-column wp-heading">
                  <span class="price">70€</span>
                  <span class="mention mb-1">ht par mois</span>
                  <span class="baseline">Offre sans engagement</span>
                </div>
                <div class="wp-excerpt">
                  @include('partials.template-parts.offers.essential', ['offer' => 'two'])
                  @include('partials.template-parts.offers.default', ['offer' => 'two'])
                  <div class="d-flex flex-row align-items-center justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <img src="@asset('images/checkmark-circle-grey.svg')" class="me-2" alt="non inclus">
                      <strong>Cloudflare</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4">
          <div class="card-offer h-100 mb-4">
            <div class="wp-card">
              <div class="card-header text-center">
                <h4 class="title">Premium</h4>
              </div>
              <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex flex-column wp-heading">
                  <span class="price">90€</span>
                  <span class="mention mb-1">ht par mois</span>
                  <span class="baseline">Engagement 12 mois</span>
                </div>
                <div class="wp-excerpt">
                  @include('partials.template-parts.offers.essential', ['offer' => 'three'])
                  @include('partials.template-parts.offers.default', ['offer' => 'three'])
                  <div class="d-flex flex-row align-items-center justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <img src="@asset('images/checkmark-circle-green.svg')" class="me-2" alt="non inclus">
                      <strong>Cloudflare</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-row justify-content-center mt-5">
        <a href="#" aria-label=""
           class="cta">Souscrire une offre</a>
      </div>
    </div>
  </div>
</div>
