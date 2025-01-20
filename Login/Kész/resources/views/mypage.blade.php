@extends('layout')
@section('content')
    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">{{Auth::user()->name}} profilja</h1>
        <p>
            Neve: {{Auth::user()->name}}
        </p>
        <p>
            Bemutatkozás: {{Auth::user()->bio}}
        </p>
        <p>
            Regisztráció ideje: {{date_format(date_create(Auth::user()->created_at), 'Y. m. d. - h:m')}}
        </p>
        <p>
            <a class="btn btn-primary" href="/newpass">Új Jelszó</a>
            <a class="btn btn-dark" href="/logout">Kilépés</a>
            <a class="btn btn-danger" href="/del">Regisztráció törlése</a>
        </p>
    </main>
@endsection