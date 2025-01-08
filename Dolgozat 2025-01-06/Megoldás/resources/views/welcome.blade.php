@extends('layout')
@section('content')
    <main class="container px-5 py-4">
        <div class="row">
            <div class="col-lg pb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Szaloncukor hozzáadása</h5>
                        <form action="/" method="POST">
                            @csrf
                            <div class="py-2">
                                <label for="marka" class="form-label">Szaloncukor márkája:</label>
                                <input type="text" name="marka" id="marka" class="form-control" value="{{ old('marka') }}">
                                @error('marka')
                                    <p class="text-danger"><b>{{ $message }}</b></p>    
                                @enderror
                            </div>
                            <div class="py-2">
                                <label for="iz" class="form-label">Szaloncukor íze:</label>
                                <input type="text" name="iz" id="iz" class="form-control" value="{{ old('iz') }}">
                                @error('iz')
                                    <p class="text-danger"><b>{{ $message }}</b></p>    
                                @enderror
                            </div>
                            <div class="py-2">
                                <label for="suly" class="form-label">Csomag súlya:</label>
                                <input type="number" name="suly" id="suly" class="form-control" value="{{ old('suly') }}" placeholder="min. 100 gramm">
                                @error('suly')
                                    <p class="text-danger"><b>{{ $message }}</b></p>  
                                @enderror
                            </div>
                            <div class="py-2">
                                <label for="ar" class="form-label">Csomag ár:</label>
                                <input type="number" name="ar" id="ar" class="form-control" value="{{ old('ar') }}" placeholder="min. 100 Ft">
                                @error('ar')
                                    <p class="text-danger"><b>{{ $message }}</b></p>   
                                @enderror
                            </div>
                            <div class="py-2">
                                <input type="checkbox" name="plusz18" id="plusz18" class="form-check-input" {{ old('plusz18') ? 'checked' : '' }}>
                                <label for="plusz18">18+ - csak felnőtteknek</label>
                            </div>
                            <div class="py-2">
                                <button type="submit" class="btn btn-success w-100">Szaloncukor hozzáadása</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <h2 class="text-center">Termékek</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Márka</th>
                        <th scope="col">Íz</th>
                        <th scope="col">Súly</th>
                        <th scope="col">Ár</th>
                        <th scope="col">18+</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $data)
                        <tr>
                            <td> {{ $data -> marka }}</td>
                            <td> {{ $data -> iz }} </td>
                            <td> {{ $data -> suly }} g</td>
                            <td> {{ $data -> ar }} Ft.</td>
                            <td>
                                @if($data->plusz18 == 1)
                                    <img src="{{ asset('assets/img/plusz18.png') }}" width="30" height="30" alt="18+">
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection