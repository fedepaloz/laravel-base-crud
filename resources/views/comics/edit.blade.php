@extends('layouts.main')



@section('main-content')
<h1>modifica fumetto</h1>
<button><a href="{{route('home')}}">torna indietro</a></button>

<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <label for="title">title:</label><br>
    <input type="text" id="title" name="title" value=""><br>
    
    <label for="description">description:</label><br>
    <input type="text" id="description" name="description" value=""><br>
    
    <label for="thumb">thumb:</label><br>
    <input type="text" id="thumb" name="thumb" value=""><br>
    
    <label for="price">price:</label><br>
    <input type="number" id="price" name="price" value=""><br>
    
    <label for="series">series:</label><br>
    <input type="text" id="series" name="series" value=""><br>
    
    <label for="sale_date">sale_date:</label><br>
    <input type="text" id="sale_date" name="sale_date" value=""><br>
    
    <label for="type">type:</label><br>
    <input type="text" id="type" name="type" value=""><br><br>
    
    <input type="submit" value="Submit">
  </form> 
@endsection