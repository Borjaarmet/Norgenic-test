@extends('base')
@section('content')

<div class="container">
    <h1 class="display-4 my-5">Agregar Nuevo Libro</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection
