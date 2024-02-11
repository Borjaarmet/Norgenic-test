@extends('base')
@section('content')

<div class="container mt-5">
    <h1 class="display-4 mb-5">{{ __('contact.contact') }}</h1>
    <form action="{{ route('contact-form.send') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="contact_email" class="form-label">{{ __('contact.email') }}</label>
          <input type="email" class="form-control @error('contact_email') is-invalid @enderror" name="contact_email" id="contact_email" value="{{ old('contact_email') }}">
          @error('contact_email')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="contact_message" class="form-label">{{ __('contact.message') }}</label>
          <textarea name="contact_message" class="form-control @error('contact_message') is-invalid @enderror" id="contact_message" value="{{ old('contact_message') }}"></textarea>
          @error('contact_message')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('contact.send') }}</button>
      
        @if (session('contact_success'))
            <div class="alert alert-success mt-3">{{ session('contact_success') }}</div>
        @endif
    </form>
</div>
@endsection