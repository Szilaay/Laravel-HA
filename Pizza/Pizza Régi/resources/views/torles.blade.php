    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Biztosan szeretnéd törölni?</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Név:</th>
                <td>{{ $result->nev }}</td>
            </tr>
            <tr>
                <th>Feltét:</th>
                <td>{{ $result->feltet }}</td>
            </tr>
            @if($result->akcios == 1)
                <tr>
                    <th>Ár (24 cm):</th>
                    <td><span class="text-danger"><b>{{ $result->ar*0.9 }} Ft</b></span></td>
                </tr>
                <tr>
                    <th>Ár (32 cm):</th>
                    <td><span class="text-danger"><b>{{ $result->ar*1.25*0.9 }} Ft</b></span></td>
                </tr>
                <tr>
                    <th>Ár (45 cm):</th>
                    <td><span class="text-danger"><b>{{ $result->ar*1.50*0.9 }} Ft</b></span></td>
                </tr>
            @else
                <tr>
                    <th>Ár (24 cm):</th>
                    <td>{{ $result->ar }} Ft</td>
                </tr>
                <tr>
                    <th>Ár (32 cm):</th>
                    <td>{{ $result->ar*1.25 }} Ft</td>
                </tr>
                <tr>
                    <th>Ár (45 cm):</th>
                    <td>{{ $result->ar*1.50 }} Ft</td>
                </tr>
            @endif
        </table>
        <p class="text-center">
            <a class="btn btn-danger fs-3" href="/exit/{{$result->id}}">IGEN</a>
            <a class="btn btn-dark fs-3" href="/mod">NEM</a>
        </p>
    </div>
    @endsection