{{--
  Template Name: Template glossary
--}}

@extends('layouts.app')

@section('content')
  <div class="section section-glossary pt pb">
    <div class="container">

      <div class="d-flex flex-row justify-content-center">
        <h1 class="section-title mb-5">{!! get_the_title() !!}</h1>
      </div>

      @php $alphabet = range('A', 'Z') @endphp
      <div class="d-flex flex-row justify-content-between mb-5 ps-5 pe-5">
        @foreach($alphabet as $letter)
          <a href="#lexique-letter-{!! $letter !!}">{!! $letter !!}</a>
        @endforeach
      </div>

      @foreach($alphabet as $letter)
        <h2 id="lexique-letter-{!! $letter !!}" class="lexique-letter">{!! $letter !!}</h2>

        @php
          add_filter( 'posts_where', function($where) use($letter) {
            $where .= " AND post_title LIKE '{$letter}%'";
            return $where;
        });
        @endphp

        @php $glossary = get_glossary() @endphp

        @php remove_all_filters( 'posts_where' ); @endphp

        @if ($glossary)
          <ul class="lexique-words">

            @foreach($glossary as $item)
              <li><a href="{!! $item['permalink'] !!}">{!! $item['title'] !!}</a></li>
            @endforeach
          </ul>
        @endif
      @endforeach
    </div>
  </div>
@endsection
