@extends('layouts.app')

@section('content')
  <div class="section-news pt pb mt mb">
    <div class="container">
      <div class="d-flex flex-column align-items-center">
        @if (! have_posts())
          <h1 class="section-title mb-5">Cette page n'existe plus !</h1>
          <div class="d-flex flex-row justify-content-center mb-5 pb-5">
            <a href="{{ home_url() }}" aria-label="Retour à l'accueil" class="btn btn-primary">Retour à l'accueil</a>
            <a href="{{ home_url() }}" aria-label="Retour à l'accueil" class="btn btn-primary ms-3">Nous contacter</a>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection
