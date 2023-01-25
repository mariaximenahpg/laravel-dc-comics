@extends('layouts.main')
@section('page-content')
    <div class="container">
    <h2>Inserisci un nuovo fumetto</h2>
    </div>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title*</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="insert title" maxlength="50" required>
        </div>
        <div class="mb-3 custom-file">
            <label class="custom-file-label" for="image">Thumb</label>
            <div>
            <input type="file" class="custom-file-input" id="thumb" name="thumb">
            </div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price*</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="insert price" maxlength="10" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type*</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="insert type" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="insert series" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="insert sale date" maxlength="10" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description*</label>
            <textarea class="form-control" name="description" id="description" maxlength="250" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mb-5">Send</button>

        </form>
    </div>
    
@endsection