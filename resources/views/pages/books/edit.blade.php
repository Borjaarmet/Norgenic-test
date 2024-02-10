@extends('base')
@section('content')

<div class="container">
    <h1 class="display-4 my-5">{{ __('books.edit-book') }}</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('books.title') }}</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">{{ __('books.author') }}</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ __('books.save-changes') }}</button>
    </form>
</div>

@endsection
