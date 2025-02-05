@extends('Layouts.main')

@section('content')
    <div class="col-md-9">
        <h1 class="pt-3 text-center">Vendégkönyv</h1>

        @guest
            <h3 class="text-center text-danger">A vendégkönyvbe való bejegyzéshez be kell jelentkezned!</h3>
        @else
        <form action="/guestbook" method="post">
            @csrf
            <div class="py-2">
                <label for="nev" class="form-label">Név: <span class="red"><b>*</b></span></label>
                <input type="text" name="nev" id="nev" class="form-control" value="{{ Auth::user() -> nev }}">
                @error('nev')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="py-2">
                <label for="email" class="form-label">E-mail: </label>
                <input type="text" name="email" id="email" class="form-control" value="{{ Auth::user() -> email }}">
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
            <span class="red"><b>* kötelező mező</b></span>
            <div class="py-2">
                <button type="submit" class="btn btn-primary w-100">Regisztráció</button>
            </div>
        </form>
        @endguest

        <hr>

        @foreach ($guestbook as $item)
            <h5>{{ $item -> nev}} - <a href="mailto:{{ $item -> email }}"> {{ $item -> email }} </a></h5>
            <p> {{ date('Y. m. d.', strtotime($item -> date)) }} </p>
            <p> {{ $item -> message }} </p>
        @endforeach
    </div>
@endsection