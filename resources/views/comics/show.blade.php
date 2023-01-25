@extends('layouts.main')
@section('page-content')
<div class="container">
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->price }} €</p>
    <p>{{ $comic->type }}</p>
    <p>{{ $comic->series }}</p>
    
    <p>{!! $comic->description !!}</p>
    <button class="btn btn-primary"><a href="{{ route('comics.index')}}" class="text-white">Torna alla lista dei fumetti</a></button>

</div>
    
@endsection