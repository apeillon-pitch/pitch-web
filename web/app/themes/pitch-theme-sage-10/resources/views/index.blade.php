@extends('layouts.app')

@section('content')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="section-news section-bg-color pt pb mt-none mb-none">
    <div class="container">
      <div class="d-flex flex-column">
        <h1 class="section-title mb-5">Nos actualités</h1>
        <div class="row justify-content-start mb-4">
          @while(have_posts())
            @php the_post() @endphp
            @php
              $article = array(
               'permalink' => get_the_permalink(),
               'title' => get_the_title(),
               'thumbnail' => get_field('thumbnail'),
               'excerpt' => get_field('excerpt'),
               'date' => get_the_date('d/m/Y'),
              );
            @endphp
            <div class="col-12 col-lg-4 mb-4">
              <div class="inner-content bg-white h-100">
                <div class="hovereffect mb-3">
                  @php
                    $bg = $article['thumbnail']['sizes']['medium_large'];
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
          @endwhile
        </div>
        {!! the_posts_pagination( array('prev_text' => __( '&lt;', 'pitch' ), 'next_text' => __('&gt;', 'pitch' ))) !!}
      </div>
    </div>
  </div>

@endsection
