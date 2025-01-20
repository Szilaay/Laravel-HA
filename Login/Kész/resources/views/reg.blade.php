    @extends('layout')
    @section('content')
    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Regisztráció</h1>
        <div class="bg-white border border-black rounded p-3 mx-auto" style="width: 30rem">
            <form action="/reg" method="post">
                @csrf
                <div class="py-2">
                    <label for="name" class="form-label">Usernév:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
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
                    <label for="password_confirmation" class="form-label">Jelszó2:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    @error('password_confirmation')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="bio" class="form-label">Bemutatkozás</label>
                    <textarea name="bio" id="bio" cols="40" rows="10" class="form-control">{{old('bio')}}</textarea>
                    @error('bio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="py-2">
                    <button type="submit" class="btn btn-dark">Regisztráció</button>
                </div>
            </form>
        </div>
    </main>
    @endsection
