<article @php post_class() @endphp>
  <header class="mb-5">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-5 p-4">
          <figure class="logo mb-4">
            {!! wp_get_attachment_image( $portfolio_data['logo']['id'], 'full','', array( "class" => "img-fluid h-auto")) !!}
          </figure>

          <ul class="post-categories">
            <li><a href="#" rel="category tag mt-4">{!! $portfolio_data['category']->name !!}</a></li>
          </ul>
          <div class="row">
            <div class="col-12 col-lg-10">
              @if ($portfolio_data['excerpt'])
                <h1 class="section-title mb-4">{!! $portfolio_data['title'] !!}</h1>
              @endif
              @if ($portfolio_data['excerpt'])
                <h2 class="title mb-4">{!! $portfolio_data['excerpt'] !!}</h2>
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5 ps-5">
          @if($portfolio_data['thumbnail'])
            <figure class="thumbnail">
              {!! wp_get_attachment_image( $portfolio_data['thumbnail'], 'full','', array( "class" => "img-fluid")) !!}
            </figure>
          @endif
        </div>
      </div>
    </div>
  </header>

  <div class="container mb-5">
    <div class="entry-content">
      <div class="row mb-5">
        @if($portfolio_data['challenge'])
          <div class="col-12 col-lg-4">
            <h2>Challenge</h2>
            {!! $portfolio_data['challenge'] !!}
          </div>
        @endif
        @if($portfolio_data['solution'])
          <div class="col-12 col-lg-4">
            <h2>Solution</h2>
            {!! $portfolio_data['solution'] !!}
          </div>
        @endif
        @if($portfolio_data['result'])
          <div class="col-12 col-lg-4">
            <h2>Résultat</h2>
            {!! $portfolio_data['result'] !!}
          </div>
        @endif
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
          @if($portfolio_data['image'])
            <figure>
              {!! wp_get_attachment_image( $portfolio_data['image']['id'], 'full','', array( "class" => "img-fluid")) !!}
            </figure>
          @endif
          @php the_content() @endphp
          @php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>'); @endphp
          <time class="updated" datetime="{{ get_post_time('c', true) }}">Mis à jour
            le {{ get_the_modified_date() }}</time>
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
