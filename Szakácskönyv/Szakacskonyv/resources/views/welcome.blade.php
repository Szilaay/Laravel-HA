@extends('Layout.app')

@section('content')
    <main class="container pb-2 mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="cols d-flex mb-2">
                <div class="card">
                    <img src="{{asset('img/category-soup.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Levesek</h5>
                        @foreach ($etelek as $data)
                            @if ($data->besorolas == 'l')
                                <p class="card-text"><a href="/etel/{{$data->etelid}}">{{$data->nev}}</a></p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="cols d-flex mb-2">
                <div class="card">
                    <img src="{{asset('img/category-soup.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Készételek</h5>
                        @foreach ($etelek as $data)
                            @if ($data->besorolas == 'k')
                                <p class="card-text"><a href="/etel/{{$data->etelid}}">{{$data->nev}}</a></p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="cols d-flex mb-2">
                <div class="card">
                    <img src="{{asset('img/category-stew.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Főzelékek</h5>
                        @foreach ($etelek as $data)
                            @if ($data->besorolas == 'f')
                                <p class="card-text"><a href="/etel/{{$data->etelid}}">{{$data->nev}}</a></p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="cols d-flex mb-2">
                <div class="card">
                    <img src="{{asset('img/category-dessert.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Édességek</h5>
                        @foreach ($etelek as $data)
                            @if ($data->besorolas == 'é')
                                <p class="card-text"><a href="/etel/{{$data->etelid}}">{{$data->nev}}</a></p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
