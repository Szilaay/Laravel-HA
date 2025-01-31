@extends('layout')
@section('content')
<div class="container py-3">
    <h1 class="text-center display-5">Pizzak módosítása</h1>
    <table class="table table-striped">
        <tr>
            <th>Név</th>
            <th>Feltét</th>
            <th>Modósítás</th>
            <th>Törlés</th>
        </tr>
        @foreach ($result as $all)
        <tr>
            <td><a href="/adatlap/{{$all->id}}">{{ $all->nev }}</a></td>
            <td>{{ $all->feltet }}</td>
            <td><a class="btn btn-dark" href="/modositas/{{$all->id}}">Módosítás</a></td>
            <td><a class="btn btn-danger" href="/torles/{{$all->id}}">Törlés</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection