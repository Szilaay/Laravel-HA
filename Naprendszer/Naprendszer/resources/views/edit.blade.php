@extends('layouts.layout')
@section('content')
<main class="container pb-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Hold szerkesztése
                </div>
                <div class="card-body">
                    <form action="/holdak/{holdak_id}/edit" method="POST">
                        @csrf
                        <input type="hidden" id="holdak_id" name="holdak_id" value="{{ $hold -> holdak_id }}">
                        <div class="mb-3">
                            <label for="hold_nev" class="form-label">Hold neve</label>
                            <input type="text" class="form-control" id="hold_nev" name="hold_nev" value="{{ $hold->nev }}">
                        </div>
                        <div class="mb-3">
                            <label for="hold_leiras" class="form-label">Hold felfedezése</label>
                            <input type="text" class="form-control" id="hold_leiras" name="hold_leiras" value="{{ $hold->felfedezes }}">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-dark">Mentés</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection 