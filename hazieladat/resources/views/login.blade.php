@extends('layout')

@section('title')
    Login
@endsection

@section('content')
<main class="container pb-2">
    <h1 class="py-3 text-center display-6"><b>Bejelentkezés</b></h1>
    <form action="/login" method="post" class="p-3 mb-5 bg-white rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Név</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Jelszó</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password">
            </div>
            @error('password') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Bejelentkezés</button>
    </form>
</main>
@endsection

@section('footer-text')
    Login
@endsection