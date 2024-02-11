@extends('base')
@section('content')

<div class="container">
    <h1 class="display-4 my-5">{{ __('books.title-catalogue') }}</h1>
    <div class="mb-3">
        <a href="{{ route('books.create') }}" class="btn btn-primary">{{ __('books.create-book') }}</a>
    </div>
    @if (session('success'))
        <div id="succesMessage" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('books.title') }}</th>
                <th>{{ __('books.author') }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-secondary">{{ __('books.edit') }}</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este libro?')">{{ __('books.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@push('scripts')
    <script>
        setTimeout(function() {
            $('#successMessage').fadeOut('fast');
        }, 3000);
    </script>
@endpush
