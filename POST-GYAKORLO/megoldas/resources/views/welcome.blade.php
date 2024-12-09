    @extends('layout')
    @section('content')
    <main class="container px-5 py-4">
        <section>
            <h1>Tanuló hozzáadása</h1>
            <div class="row">
                <div class="mb-3 col-md">
                    <div class="card">
                        <div class="card-body">
                            <form action="/" method="post">
                                @csrf
                                <div class="py-2">
                                    <label for="nev" class="form-label">Tanuló neve:</label>
                                    <input type="text" name="nev" id="nev" class="form-control @error('nev') is-invalid @enderror" value="{{old('nev')}}">
                                    @error('nev')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <label for="kor" class="form-label">Tanuló kora:</label>
                                    <select name="kor" id="kor" class="form-select">
                                        @for ($i = 14; $i < 24; $i++)
                                            <option value="{{$i}}" @if(old('kor') == $i) selected @endif>{{$i}} év</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="py-2">
                                    <label for="lakhely" class="form-label">Tanuló lakhelye:</label>
                                    <input type="text" name="lakhely" id="lakhely" class="form-control @error('lakhely') is-invalid @enderror" value="{{old('lakhely')}}">
                                    @error('lakhely')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <input type="radio" name="nem" id="ferfi" class="form-check-input" value="f" @if(old('nem') == 'f') checked @endif>
                                    <label for="ferfi" class="form-label">Férfi</label>
                                    <input type="radio" name="nem" id="no" class="form-check-input" value="n" @if(old('nem') == 'n') checked @endif>
                                    <label for="no" class="form-label">Nő</label>
                                    @error('nem')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <label for="agazat" class="form-label">Tanuló ágazata:</label>
                                    <select name="agazat" id="agazat" class="form-select">
                                        @for ($i = 0; $i<count($agazat); $i++)
                                        <option value="{{$agazat[$i]}}" @if(old('agazat') == $agazat[$i]) selected @endif>
                                            {{$agazat[$i]}}
                                        </option>    
                                        @endfor
                                    </select>
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
                                <th>Kor</th>
                                <th>Lakhely</th>
                                <th>Nem</th>
                                <th>Ágazat</th>
                            </tr>
                            @foreach ($result as $row)
                                <tr>
                                    <td>{{$row->nev}}</td>
                                    <td>{{$row->kor}} év</td>
                                    <td>{{$row->lakhely}}</td>
                                    <td>@if($row->nem == 'n') nő @else férfi @endif</td>
                                    <td>{{$row->agazat}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection