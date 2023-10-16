@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>

    <div class="card" style="width: 18rem;">
      @foreach ($movies as $movie)
      <div class="card-header">
        {{ $movie->title}}
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">  {{ $movie->nationality }} </li>
        <li class="list-group-item"> {{ $movie->date}}</li>
        <li class="list-group-item">  {{ $movie->vote}} at eros</li>
      </ul>
    </div>
    @endforeach
  </section>
@endsection
