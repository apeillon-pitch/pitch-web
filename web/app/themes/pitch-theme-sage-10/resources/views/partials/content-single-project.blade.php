<article @php post_class() @endphp>
  <header class="mb-5">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6">
        @if($portfolio_data['image'])
          {!! wp_get_attachment_image( $portfolio_data['image']['id'], 'full','', array( "class" => "img-fluid")) !!}
        @endif
      </div>
      <div class="col-12 col-lg-6 p-4 text-center text-lg-left">
        <figure class="logo mb-4">
          {!! wp_get_attachment_image( $portfolio_data['logo']['id'], 'full','', array( "class" => "img-fluid h-auto")) !!}
        </figure>
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 col-xl-7 col-xxl-6">
        @if ($portfolio_data['excerpt'])
          <h1 class="entry-title mb-4">{!! $portfolio_data['excerpt'] !!}</h1>
        @endif
          </div>
        </div>
        <ul class="post-categories">
          <li><a href="#" rel="category tag mt-4">{!! $portfolio_data['category']->name !!}</a></li>
        </ul>
      </div>
    </div>
  </header>
  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-8">
        <div class="entry-content">
          @php the_content() @endphp
          @php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); @endphp
          <time class="updated" datetime="{{ get_post_time('c', true) }}">Mis à jour
            le {{ get_the_modified_date() }}</time>
        </div>
      </div>
      <div class="col-11 col-lg-4 mt-4 mt-lg-0">
        <div class="wrapper section-bg-color w-100 p-5 text-center">
          <span class="section-title minus mb-4">A propos </span>
          <p>Le Pitch Web est une agence web basée à Nice et à Paris. Sa spécialité est la conception de site
            web
            pour le CMS Wordpress.</p>
          <a href="{{ home_url() }}" class="d-inline-block cta mt-4">Décourvir l'agence</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-news section-bg-color pb pt">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <span class="section-title minus">Actualités</span>
          @include('partials.flexible-sections.news_list')
        </div>
      </div>
    </div>
  </div>
</article>
