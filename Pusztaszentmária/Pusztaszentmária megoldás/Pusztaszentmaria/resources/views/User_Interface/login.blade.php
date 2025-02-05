@extends('Layouts.main')

@section('content')
    @if (session('error'))
        <div class="pt-3">
            <div class="text-center alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif
<div class="col-md-9">
    <h1 class="pt-3 text-center">Bejelentkezés</h1>

    <form action="/login" method="post">
        @csrf
        <div class="py-2">
            <label for="email" class="form-label">E-mail cím: </label>
            <input type="text" name="email" id="email" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="py-2">
            <label for="password" class="form-label">Jelszó:</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="py-2">
            <button type="submit" class="btn btn-dark w-100">Belépés</button>
        </div>
    </form>
</div>
@endsection