@extends('Layouts.main')

@section('content')
<div class="col-md-9">
    @if(session('success'))
    <div class="pt-3">
        <div class="text-center alert alert-success">
            {{ session('success') }}
        </div>
    </div>
    @elseif(session('error'))
        <div class="pt-3">
            <div class="text-center alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif
    <h1 class="pt-3 text-center">Üdv {{ Auth::user() -> nev}}! </h1>

    <div class="py-3">
        <h2 class="text-center">Profil</h2>
        <p class="text-center">E-mail cím: {{ Auth::user() -> email }}</p>

        <div class="text-center">
            <a href="/logout" class="btn btn-danger">Kijelentkezés</a>
        </div>

        <h2 class="pt-3 text-center">Jelszóváltoztatás</h2>
        <form action="/profil" method="post">
            @csrf
            <div class="py-2">
                <label for="old_password" class="form-label">Régi jelszó:</label>
                <input type="password" name="old_password" id="old_password" class="form-control">
                @error('old_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="py-2">
                <label for="password" class="form-label">Új jelszó :</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="py-2">
                <label for="password_confirmation" class="form-label">Új jelszó megerősítése:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <div class="py-2">
                <button type="submit" class="btn btn-primary w-100">Jelszóváltoztatás</button>
            </div>
        </form>
    </div>
</div>
@endsection