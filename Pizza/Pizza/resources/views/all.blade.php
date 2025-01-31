    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Összes pizzák</h1>
        <p>
            Rendezés:
            <a href="/all/nevnov">Név szerint novekvő</a>
            <a href="/all/nevcsok">Név szerint csökkenő</a>
            <a href="/all/arnov">Ár szerint növekvő</a>
            <a href="/all/arcsok">Ár szerint csökkenő</a>
        </p>
        <table class="table table-striped">
            <tr>
                <th>Név</th>
                <th>Feltét</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            @foreach ($result as $all)
            <tr>
                <td><a href="/adatlap/{{$all->id}}">{{ $all->nev }}</a></td>
                <td>{{ $all->feltet }}</td>
                <td>
                    @if ($all->akcios == 1)
                    <span class="text-danger"><b>{{$all->ar*0.9}} Ft</b></span>
                    @else
                    {{$all->ar}} Ft
                    @endif
                </td>
                <td>
                    @if ($all->akcios == 1)
                    <span class="text-danger"><b>{{$all->ar*1.125}} Ft</b></span>
                    @else
                    {{$all->ar*1.25}} Ft
                    @endif
                </td>
                <td>
                    @if ($all->akcios == 1)
                    <span class="text-danger"><b>{{$all->ar*1.35}} Ft</b></span>
                    @else
                    {{$all->ar*1.5}} Ft
                    @endif
                </td>
                <td>
                    @if ($all->akcios == 1)
                    <span class="text-danger"><b>Akciós</b></span>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
