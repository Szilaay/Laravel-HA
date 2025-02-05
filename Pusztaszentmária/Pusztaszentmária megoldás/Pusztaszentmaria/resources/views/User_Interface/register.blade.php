@extends('Layouts.main')

@section('content')
<div class="col-md-9">
    <h1 class="pt-3 text-center">Regisztráció</h1>
    
    <form action="/register" method="post">
        @csrf
        <div class="py-2">
            <label for="nev" class="form-label">Felhasználónév: </label>
            <input type="text" name="nev" id="nev" class="form-control" value="{{ old('nev') }}">
            @error('nev')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="py-2">
            <label for="email" class="form-label">E-mail: </label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
            @error('email')
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
            <label for="password_confirmation" class="form-label">Jelszó megerősítése:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="py-2">
            <button type="submit" class="btn btn-primary w-100">Regisztráció</button>
        </div>
    </form>
</div>
@endsection