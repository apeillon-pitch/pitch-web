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
        <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4  mb-5 mb-lg-0">
          <div class="card-offer h-100 mb-4">
            <div class="wp-card">
              <div class="card-header text-center">
                <h4 class="title">Essentiel</h4>
              </div>
              <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex flex-column wp-heading">
                  <span class="price">60€</span>
                  <span class="mention mb-1">ht par mois</span>
                  <span class="baseline">Offre sans engagement</span>
                </div>
                <div class="wp-excerpt">
                  @include('partials.template-parts.offers.backup', ['offer' => 'one'])
                  @include('partials.template-parts.offers.restauration', ['offer' => 'one'])
                  @include('partials.template-parts.offers.update', ['offer' => 'one'])
                  @include('partials.template-parts.offers.secure', ['offer' => 'one'])
                  @include('partials.template-parts.offers.monitoring', ['offer' => 'one'])
                  @include('partials.template-parts.offers.cloudflare', ['offer' => 'one'])
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4 mb-5 mb-lg-0">
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
                  <span class="price">110€</span>
                  <span class="mention mb-1">ht par mois</span>
                  <span class="baseline">Offre sans engagement</span>
                </div>
                <div class="wp-excerpt">
                  @include('partials.template-parts.offers.backup', ['offer' => 'two'])
                  @include('partials.template-parts.offers.restauration', ['offer' => 'two'])
                  @include('partials.template-parts.offers.update', ['offer' => 'two'])
                  @include('partials.template-parts.offers.secure', ['offer' => 'two'])
                  @include('partials.template-parts.offers.monitoring', ['offer' => 'two'])
                  @include('partials.template-parts.offers.cloudflare', ['offer' => 'two'])
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
                  <span class="price">150€</span>
                  <span class="mention mb-1">ht par mois</span>
                  <span class="baseline">Engagement 12 mois</span>
                </div>
                <div class="wp-excerpt">
                  @include('partials.template-parts.offers.backup', ['offer' => 'three'])
                  @include('partials.template-parts.offers.restauration', ['offer' => 'three'])
                  @include('partials.template-parts.offers.update', ['offer' => 'three'])
                  @include('partials.template-parts.offers.secure', ['offer' => 'three'])
                  @include('partials.template-parts.offers.monitoring', ['offer' => 'three'])
                  @include('partials.template-parts.offers.cloudflare', ['offer' => 'three'])
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-row justify-content-center mt-5">
        <a href="https://lepitch-web.fr/contact/" aria-label="Souscrire une offre"
           class="cta">Souscrire une offre</a>
      </div>
      <div class="d-flex flex-row justify-content-center mt-3">
        ou applez-nous au <strong>09 72 14 94 25</strong>
      </div>
    </div>
    </div>
  </div>
</div>
