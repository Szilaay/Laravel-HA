@extends('Layout.main')

@section('content')
<main class="container pb-2">
    <p class="pt-4 text-center">
        @foreach ($data as $rows)
            <a class="btn btn-outline-dark" href="/kontinensek/{{ $rows -> kontinens_id }}">{{ $rows->nev }}</a>
        @endforeach

        <h2 class="py-3 text-center display-6"> {{ $data_find -> nev }} </h2>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <img src="{{ asset(sprintf('assets/img/%s.jpg', $data_find -> kontinens_id)) }}" class="pb-3 img-fluid w-100">
                </div>
                <div class="col-md">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Területe</th>
                                <td>{{ number_format($data_find -> terulet, 0, '', ' ') }} km<sup>2</sup></td>
                            </tr>
                            <tr>
                                <th scope="row">Legmagasabb pontja</th>
                                <td>{{ number_format($data_find -> max, 0, '', ' ') }} m - {{ $data_find -> max_nev }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Legmélyebb pontja</th>
                                <td>{{ number_format($data_find -> min, 0, '', ' ') }} m - {{ $data_find -> min_nev }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Leghosszabb folyó</th>
                                <td>{{ number_format($data_find -> folyo, 0, '', ' ') }} km - {{ $data_find -> folyo_nev }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Országok száma</th>
                                <td>
                                    @if ($country_count == 0)
                                        Nincs ország a területén
                                    @else
                                        {{ $country_count }} db
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </p>
</main>
@endsection