<div class="card-article style-one h-100">
  <div class="d-flex flex-column justify-content-start h-100">
    @if($article['thumbnail'])
      <a href="{{ $article['permalink'] }}">
        <figure class="mb-0">
          {!! wp_get_attachment_image( $article['thumbnail']['id'], 'medium_large','', array( "class" => "img-fluid")) !!}
        </figure>
      </a>
    @endif
    <div class="border style-{{ $i }}"></div>
    <div class="wrapper-content d-flex flex-column">
      <div class="d-flex flex-row mb-2">
        <span class="date me-2">{!! $article['date'] !!}</span>
        @if ($article['category'])
          <a href="{{ get_category_link($article['category']) }}" class="category text-end">
            {!! $article['category']->name !!}
          </a>
        @endif
      </div>
      <a href="{{ $article['permalink'] }}">
        <h2 class="block-title">{!! $article['title'] !!}</h2>
      </a>
    </div>
  </div>
</div>
