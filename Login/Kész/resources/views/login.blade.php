@extends('layout')
@section('content')
<main class="container pb-2">
    <h1 class="text-center display-6 py-3">Belépés</h1>
    <div class="bg-white border border-black rounded p-3 mx-auto" style="width: 30rem">
        <form action="/login" method="post">
            @csrf
            <div class="py-2">
                <label for="name" class="form-label">Usernév:</label>
                <input type="text" name="name" id="name" class="form-control">
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
                <button type="submit" class="btn btn-dark">Belépés</button>
            </div>
        </form>
    </div>
</main>
@endsection
