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
                                <label for="nev" class="form-label">Név: <span class="text-danger">*</span></label>
                                <input type="text" name="nev" id="nev" class="form-control @error('nev') is-invalid @enderror" value="{{old('nev')}}">
                            </div>
                            {{-- Irányítószám | Város --}}
                            <div class="py-2">
                                <div class="row">
                                    <div class="pb-2 col-md-3" >
                                        <label for="irszam" class="form-label">Irányítószám: <span class="text-danger">*</span></label>
                                        <input type="text" name="irszam" id="irszam" class="form-control @error('irszam') is-invalid @enderror" value="{{old('irszam')}}">
                                    </div>
                                    <div class="col">
                                        <label for="varos" class="form-label">Város: <span class="text-danger">*</span></label>
                                        <input type="text" name="varos" id="varos" class="form-control @error('varos') is-invalid @enderror" value="{{old('varos')}}">
                                    </div>
                                </div>
                            </div>
                            {{-- Utca | Házszám --}}
                            <div class="py-2">
                                <div class="row">
                                    <div class="pb-2 col-md-9">
                                        <label for="utca" class="form-label">Utca: <span class="text-danger">*</span></label>
                                        <input type="text" name="utca" id="utca" class="form-control @error('utca') is-invalid @enderror" value="{{old('utca')}}">
                                    </div>
                                    <div class="col">
                                        <label for="hazszam" class="form-label">Házszám: <span class="text-danger">*</span></label>
                                        <input type="text" name="hazszam" id="hazszam" class="form-control @error('hazszam') is-invalid @enderror" value="{{old('hazszam')}}">
                                    </div>
                                </div>
                            </div>
                            {{-- Emelet | Ajtó ((OPCIONÁLIS)) --}}
                            <div class="py-2">
                                <div class="row">
                                    <div class="pb-2 col-md-6">
                                        {{-- <label for="emelet" class="form-label">Emelet: </label>
                                        <input type="text" name="emelet" id="emelet" class="form-control" value="{{old('emelet')}}">
                                        @error('emelet')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror --}}
                                        
                                        <label for="emelet" class="form-label">Emelet: </label>
                                        <select name="emelet" id="emelet" class="form-select">
                                            <option value="">---</option>
                                            <option value="fsz" @if(old('emelet') == 'fsz') selected @endif>fsz</option>
                                            @for($i = 1; $i < 31; $i++)
                                                <option value="{{ $i }}" @if(old('emelet') == $i) selected @endif> {{ $i }}. emelet</option>
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
                                    <p class="form-label">Telefonszám: <span class="text-danger">*</span></p>
                                    <div class="pb-3 col-md-3">  
                                        <select name="telszamkorzet" id="telszamkorzet" class="form-select">
                                            <option value="20" @if(old('telszamkorzet') == 20) selected @endif>20</option>
                                            <option value="30" @if(old('telszamkorzet') == 30) selected @endif>30</option>
                                            <option value="70" @if(old('telszamkorzet') == 70) selected @endif>70</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="telszam" id="telszam" class="form-control @error('telszam') is-invalid @enderror" placeholder="Pl.: 1234567" value="{{old('telszam')}}">
                                    </div>
                                    @error('telszam')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="py-2">
                                <input type="checkbox" class="form-check-input" name="erintesmentes" id="erintesmentes" @if(old('erintesmentes') == 'i') checked @endif value="i"   >
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
                                <td>{{ $row->nev }}</td>
                                <td>{{ $row->irsz }}, {{ $row->varos }}, {{ $row->utca }} {{ $row->hazszam }} @if(!empty($row->emelet)) - {{$row->emelet == 'fsz' ? $row->emelet : $row->emelet . '. emelet'}} {{$row->ajto}} @endif</td>
                                <td>{{ $row->tel }}</td>
                                <td>
                                    @if($row->erintesmentes == 'i')
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