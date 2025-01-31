@extends('layout')
@section('content')
<div class="container py-3 fs-5">
    <h1 class="text-center display-5">Üdv, {{ Auth::user() -> name }}!</h1>
    <p>E-mail:  <a href="mailto:{{ Auth::user() -> email }}">{{ Auth::user() -> email }}</a></p>
    <p>Regisztráció dátuma: <b><strong>{{ date_format(date_create( Auth::user() -> created_at), 'Y. m. d.') }}</strong></b></p>

    <p>
        <a href="/logout" class="btn btn-danger text-white"><b>Kijelentkezés</b></a>
        <a href="/newpass" class="btn btn-primary text-white"><b>Jelszó módosítása</b></a>
        <a href="/deactivation" class="btn btn-warning text-white"><b>Regisztráció törlése</b></a>
    </p>
</div>
@endsection
