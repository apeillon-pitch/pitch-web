@extends('layouts.app')

@section('content')
  <div class="section-news pt pb mt mb">
    <div class="container">
      <div class="d-flex flex-column">
        @if (! have_posts())
          <h1 class="section-title mb-5">Cette page d'existe plus :(</h1>
          <a href="{{ home_url() }}" aria-label="Retour à l'accueil" class="btn btn-primary">Retour à l'accueil</a>
        @endif
      </div>
    </div>
  </div>
@endsection
