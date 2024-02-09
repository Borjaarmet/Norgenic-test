@extends('base')
@section('content')

<div class="container">
    <h1 class="display-4 my-5">Listado de Libros</h1>
    <div class="mb-3">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Crear Libro</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Acciones</th> <!-- Columna para las acciones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este libro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
