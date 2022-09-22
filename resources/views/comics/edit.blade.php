@extends('layouts.main')



@section('main-content')
<h1>modifica fumetto</h1>
<button><a href="{{route('home')}}">torna indietro</a></button>

<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">title:</label><br>
    <input type="text" id="title" name="title" value="{{ $comic->title }}"><br>
    
    <label for="description">description:</label><br>
    <input type="text" id="description" name="description" value="{{ $comic->description }}"><br>
    
    <label for="thumb">thumb:</label><br>
    <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}"><br>
    
    <label for="price">price:</label><br>
    <input type="number" id="price" name="price" value="{{ $comic->price }}"><br>
    
    <label for="series">series:</label><br>
    <input type="text" id="series" name="series" value="{{ $comic->series }}"><br>
    
    <label for="sale_date">sale_date:</label><br>
    <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"><br>
    
    <label for="type">type:</label><br>
    <input type="text" id="type" name="type" value="{{ $comic->type }}"><br><br>
    
    <input type="submit" value="Submit">
  </form> 
@endsection