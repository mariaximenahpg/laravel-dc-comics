@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h1>Lista Fumetti</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic )
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                     <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Vedi</a>
                     <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
                     <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancella</button>
                     </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('comics.create')}}" class="btn btn-success">Inserisci un nuovo fumetto</a>

    </div>
    
@endsection