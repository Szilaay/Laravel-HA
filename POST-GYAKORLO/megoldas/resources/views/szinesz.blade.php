@extends('layout')
@section('content')
<main class="container px-5 py-4">
    <section>
        <h1>Színész hozzáadása</h1>
        <div class="row">
            <div class="mb-3 col-md">
                <div class="card">
                    <div class="card-body">
                        <form action="/szinesz" method="post">
                            @csrf
                            {{-- Név --}}
                            <div class="py-2">
                                <label for="nev" class="form-label">Színész neve: </label>
                                <input type="text" name="nev" id="nev" class="form-control @error('nev') is-invalid @enderror" value="{{old('nev')}}">
                                @error('nev')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Születési idő --}}
                            <div class="py-2">
                                <label for="szuletes" class="form-label">Születési ideje: </label>
                                <input type="date" name="szuletes" id="szuletes" class="form-control @error('szuletes') is-invalid @enderror" value="{{old('szuletes')}}">
                                @error('szuletes')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Nemzet --}}
                            <div class="py-2">
                                <label for="nemzet" class="form-label">Nemzete: </label>
                                <input type="text" name="nemzet" id="nemzet" class="form-control @error('nemzet') is-invalid @enderror" value="{{old('nemzet')}}">
                                @error('nemzet')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="py-2">
                                <input type="checkbox" class="form-check-input" name="oscar_dij" id="oscar_dij">
                                <label for="oscar_dij" class="form-label">Oscar-díjas? </label>
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
                            <th>Név</th>
                            <th>Születési idő</th>
                            <th>Nemzet</th>
                            <th>Oscar-díj</th>
                        </tr>
                        @foreach ($result as $row)
                            <tr>
                                <td>{{ $row -> nev }}</td>
                                <td>{{ date('Y. m. d.', strtotime($row->szuletes)) }}</td>
                                <td>{{ $row -> nemzet }}</td>
                                <td>
                                    @if($row -> oscar_dij == 'i')
                                        Oscar-díjas
                                    @else
                                        --
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