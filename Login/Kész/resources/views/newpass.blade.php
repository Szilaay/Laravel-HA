@extends('layout')
@section('content')
<main class="container pb-2">
    <h1 class="py-3 text-center display-6">Jelszó módosítás</h1>
    <div class="p-3 mx-auto bg-white border border-black rounded" style="width: 30rem">
        <form action="/newpass" method="post">
            @csrf
            <div class="py-2">
                <label for="old_password" class="form-label">Régi jelszó:</label>
                <input type="password" name="old_password" id="old_password" class="form-control" value="">
                @error('old_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="py-2">
                <label for="new_password" class="form-label">Új jelszó:</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
                @error('new_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="py-2">
                <label for="new_password_confirmation" class="form-label">Új jelszó2:</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                @error('new_password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="py-2">
                <button type="submit" class="btn btn-dark">Megerősítés</button>
            </div>
        </form>
    </div>
</main>
@endsection
