@extends('Layout.main')

@section('content')
    <main class="container pb-2">
        <form action="/kereses" method="post">
            @csrf
            <div class="my-4 row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="text" name="search" class="form-control" placeholder="Lorem ipsum dolor sit amet">
                        <button class="btn btn-dark" type="submit">Keresés</button>
                    </div>
                </div>
                @error('search')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </form>
        @isset($result)
            @if (count($result) > 0)  
                <p class="fs-5">A keresés eredménye</p>
                @foreach ($result as $data)
                    <p class="fs-5"><a href="/megallo/{{ $data->megallo_id }}">{{ $data->nev }}</a></p>
                @endforeach
            @else
                <p class="fs-5">Nincs találat</p>
            @endif
        @endisset
    </main>
@endsection
