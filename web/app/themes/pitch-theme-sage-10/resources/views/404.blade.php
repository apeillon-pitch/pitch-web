@extends('layouts.app')

@section('content')
  <div class="section pt pb">
    <div class="container">
      @if (! have_posts())
       <h1>Cette page d'existe plus :(</h1>
        <a href="{{ home_url() }}" aria-label="Retour à l'accueil" class="btn btn-primary">Retour à l'accueil</a>
      @endif
    </div>
  </div>
@endsection
