    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">Új pizza felvétele</h1>
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <form action="/add" method="post">
                    @csrf
                    <div class="my-2">
                        <label for="nev" class="form-label">Név:</label>
                        <input type="text" name="nev" id="nev" class="form-control" placeholder="Pl.: Kolbászos" value="{{ old('nev')}}">
                        @error('nev')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="feltet" class="form-label">Pizza feltéte</label>
                        <input type="text" name="feltet" id="feltet" class="form-control" placeholder="Pl.: Erős Pista, kolbász, sajt" value="{{old('feltet')}}">
                        @error('feltet')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="ar" class="form-label">Ár:</label>
                        <input type="number" name="ar" id="ar" min="0" class="form-control" value="{{ old('ar')}}">
                        @error('ar')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <input type="checkbox" name="akcios" id="akcios" class="form-check-input">
                        <label for="akcios" class="form-check-label">Akciós-e?</label>
                    </div>
                    <button class="btn btn-primary" type="submit">Elküldés</button>
                </form>
            </div>
        </div>
    </div>
    @endsection