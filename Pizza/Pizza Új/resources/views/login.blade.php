@extends('layout')
@section('content')
<div class="container py-3">
    <h1 class="text-center display-5">Bejelentkezés</h1>
    <div class="card w-50 mx-auto">
        <div class="card-body">
            <form action="/login" method="post">
                @csrf
                <div class="my-2">
                    <label for="credentials" class="form-label">Felhasználónév vagy e-mail cím:</label>
                    <input type="text" name="credentials" id="credentials" class="form-control" value="{{ old('credentials')}}">
                    @error('credentials')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="my-2">
                    <label for="password" class="form-label">Jelszó</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Regisztráció</button>
            </form>
        </div>
    </div>
</div>
@endsection