    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Regisztráció</h1>
        @error('sv')
            <div class="alert alert-success my-3">
                {{$message}}
            </div>
        @enderror
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <form action="/reg" method="post">
                    @csrf
                    <div class="my-2">
                        <label for="name" class="form-label">Usernév:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="email" class="form-label">E-mail cím:</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ old('email')}}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="password" class="form-label">Jelszó</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{ old('password')}}">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="password_confirmation" class="form-label">Jelszó újra</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation')}}">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Regisztrál</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
