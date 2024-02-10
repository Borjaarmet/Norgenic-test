@extends('base')
@section('content')

<div class="container mt-5">
    <h1 class="display-4 mb-5">Contacto</h1>
    <form action="{{ route('contact-form.send') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="contact_email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="contact_email" id="contact_email" required >
          @error('contact_email')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="contact_message" class="form-label">Mensaje</label>
          <textarea name="contact_message" class="form-control" id="contact_message" required ></textarea>
          @error('contact_message')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      
        @if (session('contact_success'))
            <div class="alert alert-success mt-3">{{ session('contact_success') }}</div>
        @endif
    </form>
    <p>{{__('contact.title-test')}}</p>
</div>
@endsection