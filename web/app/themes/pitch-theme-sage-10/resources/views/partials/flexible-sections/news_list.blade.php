<div class="row">
  @php $number = $section['posts_number'] ?? 3; @endphp
  @if(is_single())
    @php
      $id = get_the_ID();
      $articles = get_related_articles($number, $id);
    @endphp
  @else
    @php $articles = get_articles($number); @endphp
  @endif
  @foreach($articles as $article)
    <div class="col-12 col-lg-4 mb-4">
      <div class="inner-content bg-white h-100">
        <div class="hovereffect mb-3">
          @php
            $bg = $article['thumbnail']['url'];
          @endphp
          <div class="bg" style="background-image: url({{ $bg }})"></div>
          <div class="overlay">
            <a class="info" href="{{ $article['permalink'] }}">Lire l'article</a>
          </div>
        </div>
        <div class="wrapper">
          <a class="title" href="{{ $article['permalink'] }}"><h4> {!! $article['title'] !!} </h4></a>
          <time class="d-block updated mt-2 mb-2"
                datetime="{{ get_post_time('c', true) }}">{{ $article['date'] }}</time>
          <p> {{ $article['excerpt'] }}</p>
        </div>

      </div>
    </div>
  @endforeach
</div>
<div class="d-block text-center">
  @if( $number != -1)
    <a href="{{ home_url() }}/nos-actualites" class="d-inline-block cta mt-4 mx-auto">Toutes nos actualités</a>
  @endif
</div>
