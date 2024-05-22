<div class="row justify-content-center align-items-center">
  <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4  mb-5 mb-lg-0">
    <div class="card-offer h-100 mb-4">
      <div class="wp-card">
        <div class="card-header text-center">
          <h4 class="title">Essentiel</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div class="d-flex flex-column wp-heading">
            <span class="price">35€</span>
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
            <a href="#"  data-bs-toggle="modal" data-bs-target="#essentielTabEurlModal" aria-label="Souscrire une offre"
               class="cta text-center">Souscrire à l'offre</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-lg-4 col-xxl-3 ps-4 pe-4 mb-5 mb-lg-0">
    <div class="card-offer h-100 mb-4 best-seller">
      <div class="wp-card">
        <div class="card-header text-center">
          <h4 class="title">Sérénité</h4>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div class="d-flex flex-column wp-heading">
            <span class="price">60€</span>
            <span class="mention mb-1">ht par mois</span>
            <span class="baseline">Engagement 12 mois</span>
          </div>
          <div class="wp-excerpt">
            @include('partials.template-parts.offers.backup', ['offer' => 'two'])
            @include('partials.template-parts.offers.restauration', ['offer' => 'two'])
            @include('partials.template-parts.offers.update', ['offer' => 'two'])
            @include('partials.template-parts.offers.secure', ['offer' => 'two'])
            @include('partials.template-parts.offers.monitoring', ['offer' => 'two'])
            @include('partials.template-parts.offers.cloudflare', ['offer' => 'two'])
            <a href="#"  data-bs-toggle="modal" data-bs-target="#sereniteTabEurlModal" aria-label="Souscrire une offre"
               class="cta text-center">Souscrire à l'offre</a>
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
            @include('partials.template-parts.offers.backup', ['offer' => 'three'])
            @include('partials.template-parts.offers.restauration', ['offer' => 'three'])
            @include('partials.template-parts.offers.update', ['offer' => 'three'])
            @include('partials.template-parts.offers.secure', ['offer' => 'three'])
            @include('partials.template-parts.offers.monitoring', ['offer' => 'three'])
            @include('partials.template-parts.offers.cloudflare', ['offer' => 'three'])
            <a href="#"  data-bs-toggle="modal" data-bs-target="#premiumTabEurlModal" aria-label="Souscrire une offre"
               class="cta text-center">Souscrire à l'offre</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="essentielTabEurlModal" tabindex="-1" aria-labelledby="essentielTabEurlModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h1 class="modal-title fs-5" id="essantielModalLabel">Souscrire au plan "Essentiel"</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ gravity_form(5, false, false, false, false, true, -1 ) }}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sereniteTabEurlModal" tabindex="-1" aria-labelledby="seriniteTabEurlModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h1 class="modal-title fs-5" id="sereniteModalLabel">Souscrire au plan "Sérénité"</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ gravity_form(4, false, false, false, false, true, -1 ) }}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="premiumTabEurlModal" tabindex="-1" aria-labelledby="premiemTabEurlModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Souscrire au plan "Premium"</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ gravity_form(3, false, false, false, false, true, -1 ) }}
      </div>
    </div>
  </div>
</div>
