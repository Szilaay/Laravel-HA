@extends('layout')
@section('content')
<main class="container px-5 py-4">
    <section>
        <h1>Klipp hozzáadása</h1>
        <div class="row">
            <div class="mb-3 col-md">
                <div class="card">
                    <div class="card-body">
                        <form action="/klippek" method="post">
                            @csrf
                            {{-- Előadó neve --}}
                            <div class="py-2">
                                <label for="eloado" class="form-label">Előadó neve:</label>
                                <input type="text" name="eloado" id="eloado" class="form-control @error('eloado') is-invalid @enderror" value="{{old('eloado')}}">
                                @error('eloado')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Szám címe --}}
                            <div class="py-2">
                                <label for="cim" class="form-label">Szám címe:</label>
                                <input type="text" name="cim" id="nev" class="form-control" @error('cim') is-invalid @enderror" value="{{old('cim')}}">
                            </div>
                            {{-- Szám hossz --}}
                            <div class="py-2">
                                <p class="form-label">Szám hossza</p>
                                <div class="row">
                                    <div class="col-md">
                                        <select name="perc" id="perc" class="form-select">
                                            @for($i = 1; $i < 11; $i++)
                                                <option value=" {{ $i }} " @if(old('perc') == $i) selected @endif>{{ $i }} perc</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-md">
                                        <select name="mp" id="mp" class="form-select">
                                            @for($i = 0; $i < 60; $i++)
                                                <option value=" {{ $i }} " @if(old('mp') == $i) selected @endif>{{ $i }} másodperc</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- Youtube Link --}}
                            <div class="py-2">
                                <label for="youtube" class="form-label">Youtube Link</label>
                                <input type="text" name="youtube" id="youtube" class="form-control" @error('youtube') is-invalid @enderror value="{{ old('youtube') }}">
                            </div>

                            <div class="py-2 d-flex justify-content-center">
                                <button class="btn btn-dark" type="submit">Elküldés</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Klipp</th>
                            <th>Hossz</th>
                            <th>YouTube Link</th>
                        </tr>
                        @foreach ($result as $row)
                            <tr>
                                <td>{{ $row->eloado }} - {{ $row->cim }}</td>
                                <td>{{ substr($row->hossz, 3, 5) }}</td>
                                <td><a href=" {{ $row->youtube }} " target="_blank"> {{ $row->youtube }} </a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection