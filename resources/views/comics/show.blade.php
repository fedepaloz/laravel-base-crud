@extends('layouts.main')

<div class="container">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <p class="card-text">{{ $comic->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $comic->price }}</li>
          <li class="list-group-item">{{ $comic->series }}</li>
          <li class="list-group-item">{{ $comic->sale_date }}</li>
          <li class="list-group-item">{{ $comic->type }}</li>
         
        </ul>
        <div class="card-body">
          <a href="{{route('comics.index')}}" class="card-link">torna indietro</a>
          <a href="{{route('comics.edit', $comic->id)}}">modifica fumetto</a>
          
        </div>
      </div>
</div>