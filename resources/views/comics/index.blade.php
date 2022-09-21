@extends('layouts.main')



@section('main-content')
<h1>qui ci vanno tutti i fumetti in lista</h1>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src={{$comic->thumb}} alt="Card image cap">
    <div class="card-body">
      <a href="{{route('comics.show', $comic->id)}}"><h5 class="card-title">{{$comic->title}}</h5></a>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$comic->description}}</li>
      <li class="list-group-item">{{$comic->price}}</li>
      <li class="list-group-item">{{$comic->series}}</li>
      <li class="list-group-item">{{$comic->sale_date}}</li>
      <li class="list-group-item">{{$comic->type}}</li>

      
      
    </ul>
    
  </div>
@endsection