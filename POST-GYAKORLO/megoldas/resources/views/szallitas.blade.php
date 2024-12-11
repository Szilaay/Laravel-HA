@extends('layout')
@section('content')
<main class="container px-5 py-4">
    <section>
        <h1>Színész hozzáadása</h1>
        <div class="row">
            <div class="mb-3 col-md">
                <div class="card">
                    <div class="card-body">
                        <form action="/szallitas" method="post">
                            @csrf
                            {{-- Név --}}
                            <div class="py-2">
                                <label for="nev" class="form-label">Név: </label> <label class="text-danger">*</label>
                                <input type="text" name="nev" id="nev" class="form-control @error('nev') is-invalid @enderror" value="{{old('nev')}}">
                                @error('nev')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Irányítószám | Város --}}
                            <div class="py-2">
                                <div class="row">
                                    <div class="col col-lg-3">
                                        <label for="irszam" class="form-label">Irányítószám: </label> <label class="text-danger">*</label>
                                        <input type="text" name="irszam" id="irszam" class="form-control @error('irszam') is-invalid @enderror" value="{{old('irszam')}}">
                                        @error('irszam')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="varos" class="form-label">Város: </label> <label class="text-danger">*</label>
                                        <input type="text" name="varos" id="varos" class="form-control @error('varos') is-invalid @enderror" value="{{old('varos')}}">
                                        @error('varos')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Utca | Házszám --}}
                            <div class="py-2">
                                <div class="row">
                                    <div class="col col-lg-9">
                                        <label for="utca" class="form-label">Utca: </label> <label class="text-danger">*</label>
                                        <input type="text" name="utca" id="utca" class="form-control @error('utca') is-invalid @enderror" value="{{old('utca')}}">
                                        @error('utca')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="hazszam" class="form-label">Házszám: </label> <label class="text-danger">*</label>
                                        <input type="text" name="hazszam" id="hazszam" class="form-control @error('hazszam') is-invalid @enderror" value="{{old('hazszam')}}">
                                        @error('hazszam')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Emelet | Ajtó ((OPCIONÁLIS)) --}}
                            <div class="py-2">
                                <div class="row">
                                    <div class="col col-lg-6">
                                        {{-- <label for="emelet" class="form-label">Emelet: </label>
                                        <input type="text" name="emelet" id="emelet" class="form-control" value="{{old('emelet')}}">
                                        @error('emelet')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror --}}
                                        
                                        <label for="emelet" class="form-label">Emelet: </label>
                                        <select name="emelet" id="emelet" class="form-select">
                                            <option value="">---</option>
                                            <option value="fsz">fsz</option>
                                            @for($i = 1; $i < 31; $i++)
                                                <option value="{{ $i }}"> {{ $i }}. emelet</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="ajto" class="form-label">Ajtó: </label>
                                        <input type="text" name="ajto" id="ajto" class="form-control" value="{{old('ajto')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="row">
                                    <div class="col col-lg-3">
                                        <label for="telszamkorzet" class="form-label">Telefonszám: </label> <label class="text-danger">*</label>
                                        <select name="telszamkorzet" id="telszamkorzet" class="form-select">
                                            <option value="20" @if(old('telszamkorzet') == 20) selected @endif>20</option>
                                            <option value="30" @if(old('telszamkorzet') == 30) selected @endif>30</option>
                                            <option value="70" @if(old('telszamkorzet') == 70) selected @endif>70</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="telszam" class="form-label">‎ </label>
                                        <input type="text" name="telszam" id="telszam" class="form-control @error('telszam') is-invalid @enderror" placeholder="Pl.: 1234567" value="{{old('telszam')}}">
                                        @error('telszam')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="py-2">
                                <input type="checkbox" class="form-check-input" name="erintesmentes" id="erintesmentes">
                                <label for="erintesmentes" class="form-label">Érintésmentes szállítást kérek </label>
                            </div>
                            <label class="text-danger">* kötelező mező</label>
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
                            <th>Név</th>
                            <th>Cím</th>
                            <th>Telefonszám</th>
                            <th>Érintés mentes</th>
                        </tr>
                        @foreach ($result as $row)
                            <tr>
                                <td>{{ $row -> nev }}</td>
                                <td>{{ $row -> irsz }}, {{ $row -> varos }}, {{ $row -> utca }} {{ $row -> hazszam }} {{ $row -> emelet }} {{ $row -> ajto }}</td>
                                <td>{{ $row -> tel }}</td>
                                <td>
                                    @if($row -> erintesmentes == 'i')
                                        igen
                                    @else
                                        nem
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection