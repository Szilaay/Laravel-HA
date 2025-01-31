@extends('layout')
@section('content')
<div class="container py-3 fs-5">
    <h1 class="text-center display-5">Biztosan törölni szeretnéd a regisztrációdat?</h1>
    <form action="/deactivation" method="post">
        @csrf
        <div class="mb-3 d-flex justify-content-between">
            <button type="submit" class="btn btn-success w-50 me-2">Igen</button>
            <a href="/profil" class="btn btn-danger w-50">Nem</a>
        </div>
    </form>
</div>
@endsection
