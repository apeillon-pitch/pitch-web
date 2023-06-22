<div class="section wrapper-title pt pb-0">
  <div class="container">
    <a href="{{ home_url() }}/lexique" class="btn btn-secondary mb-4">< Retour</a>

    <h1 class="section-title">
      {!! get_the_title() !!}
    </h1>
  </div>
</div>
<div class="section pb pt-0">
  <div class="container">
    {!! get_the_content() !!}
  </div>
</div>
<div class="section-news section-bg-color pb pt">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span class="section-title">Découvrez aussi ...</span>
        @include('partials.flexible-sections.news_list')
      </div>
    </div>
  </div>
</div>

