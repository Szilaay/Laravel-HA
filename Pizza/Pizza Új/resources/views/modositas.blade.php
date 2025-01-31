    @extends('layout')
    @section('content')
    <div class="container py-3">
        <h1 class="text-center display-5">{{$result->nev}} pizza módosítása</h1>
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <form action="/modositas/{{$result->id}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$result->id}}">
                    <div class="my-2">
                        <label for="nev" class="form-label">Név:</label>
                        <input type="text" name="nev" id="nev" class="form-control" value="{{ $result->nev }}" disabled>
                    </div>
                    <div class="my-2">
                        <label for="feltet" class="form-label">Pizza feltéte</label>
                        <input type="text" name="feltet" id="feltet" class="form-control" placeholder="Pl.: Erős Pista, kolbász, sajt" value="{{old('feltet', $result->feltet)}}">
                        @error('feltet')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="ar" class="form-label">Ár:</label>
                        <input type="number" name="ar" id="ar" min="0" class="form-control" value="{{ old('ar', $result->ar)}}">
                        @error('ar')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="my-2">
                        <input type="checkbox" name="akcios" id="akcios" class="form-check-input" @if($result->akcios == 1) checked @endif>
                        <label for="akcios" class="form-check-label">Akciós-e?</label>
                    </div>
                    <button class="btn btn-primary" type="submit">Elküldés</button>
                </form>
            </div>
        </div>
    </div>
    @endsection