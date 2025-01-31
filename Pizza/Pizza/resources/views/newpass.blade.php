@extends('layout')
@section('content')
<div class="container py-3 fs-5">
    <h1 class="text-center display-5">Jelszómódosítás</h1>

    <form action="/newpass" method="post">
        @csrf
        <div class="mb-3">
            <label for="oldpass" class="form-label">Régi jelszó</label>
            <input type="password" class="form-control" id="oldpass" name="oldpass" value=" {{ Auth::user() -> password }} " disabled>
            @error('oldpass')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Új jelszó</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Új jelszó újra</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success ">Módosítás</button>
    </form>
</div>
@endsection
