@extends('layouts.main')



@section('main-content')
    <h1>Lista dei fumetti</h1><button><a href="{{route('home')}}">torna indietro</a></button>


    <div class="container">
        <div class="row">
            <div class="col d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <li class="list-group-item">{{ $comic->price }}</li>
                            <li class="list-group-item">{{ $comic->series }}</li>
                            <li class="list-group-item">{{ $comic->sale_date }}</li>
                            <li class="list-group-item">{{ $comic->type }}</li>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Vai al dettaglio</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>






    {{-- <div class="card" style="width: 18rem;">
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
    
  </div> --}}
@endsection
