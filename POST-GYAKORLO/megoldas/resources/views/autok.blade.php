@extends('layout')
@section('content')
<main class="container px-5 py-4">
    <section>
        <h1>Autó hozzáadása</h1>
        <div class="row">
            <div class="mb-3 col-md">
                <div class="card">
                    <div class="card-body">
                        <form action="/autok" method="post">
                            @csrf
                            {{-- Rendszám --}}
                            <div class="py-2">
                                <label for="rendszam" class="form-label">Autó rendszáma:</label>
                                <input type="text" name="rendszam" id="rendszam" class="form-control @error('rendszam') is-invalid @enderror" placeholder="Pl.: AA AA-123" value="{{old('rendszam')}}">
                                @error('rendszam')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Márka --}}
                            <div class="py-2">
                                <label for="marka" class="form-label">Autó márkája:</label>
                                <input type="text" name="marka" id="marka" class="form-control @error('marka') is-invalid @enderror" placeholder="Pl.: Ford" value="{{old('marka')}}">
                                @error('marka')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Típus --}}
                            <div class="py-2">
                                <label for="tipus" class="form-label">Autó típusa:</label>
                                <input type="text" name="tipus" id="tipus" class="form-control @error('tipus') is-invalid @enderror" placeholder="Pl.: Focus" value="{{old('tipus')}}">
                                @error('tipus')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Évjárat --}}
                            <div class="py-2">
                                <label for="evjarat" class="form-label">Autó évjárata:</label>
                                <select name="evjarat" id="evjarat" class="form-select">
                                    @for($ev = date('Y'); $ev >= 1960; $ev--)
                                        <option value="{{ $ev }}" @if(old('evjarat') == $ev) selected @endif>{{ $ev }}</option>
                                    @endfor
                                </select>                                
                            </div>
                            {{-- Autó színe: --}}
                            <div class="py-2">
                                <label for="szin" class="form-label">Autó típusa:</label>
                                <input type="text" name="szin" id="szin" class="form-control @error('szin') is-invalid @enderror" placeholder="Pl.: olajzöld" value="{{old('szin')}}">
                                @error('szin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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
                            <th>Rendszám</th>
                            <th>Márka</th>
                            <th>Típus</th>
                            <th>Évjárat</th>
                            <th>Szín</th>
                        </tr>
                        @foreach ($result as $row)
                            <tr>
                                <td class="text-uppercase">{{ $row -> rendszam }}</td>
                                <td>{{ $row -> marka }}</td>
                                <td>{{ $row -> tipus }}</td>
                                <td>{{ $row -> evjarat }}</td>
                                <td>{{ $row -> szin }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection