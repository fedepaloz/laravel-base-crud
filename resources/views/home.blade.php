@extends('layouts.main')

@section('menu-content')

<header>
    <h1>
        <a href="{{route('comics.index')}}">lista fumetti</a>
        <a href="{{route('comics.create')}}">aggiungi fumetto</a>
    </h1>
</header>
    
@endsection

