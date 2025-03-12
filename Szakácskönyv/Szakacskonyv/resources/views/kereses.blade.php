@extends('Layout.app')
@section('content')
<main class="container pb-2">
    <h1 class="text-center display-6 py-3">Étel keresés</h1>
    <div class="kereso">
        <form action="/kereses" method="post">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="w-80">
                    <input type="search" name="s" class="form-control" placeholder="Keresendő étel: pl.: Spenót">
                </div>
                <div class="w-20">
                    <button class="btn btn-dark w-100" type="submit">Keres</button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection