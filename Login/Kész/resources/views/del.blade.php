@extends('layout')
@section('content')
<main class="container pb-2">
    <h1 class="py-3 text-center display-6">Felhasználó törlése</h1>
    <div class="p-3 mx-auto bg-white border border-black rounded" style="width: 30rem">
        <form action="/del" method="post">
            @csrf
            <div class="py-2">
                <label for="password" class="form-label">Jelszó:</label>
                <input type="password" name="password" id="password" class="form-control" value="">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="py-2">
                <button type="submit" class="btn btn-danger">Törlés</button>
            </div>
        </form>
    </div>
</main>
@endsection
