@extends('layout')

@section('title')
    Regisztráció
@endsection

@section('content')
<main class="container pb-2">
    <h1 class="py-3 text-center display-6"><b>Regisztráció</b></h1>
    <form action="/register" method="post" class="p-3 mb-5 bg-white rounded shadow">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Név</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Jelszó</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="fa-solid fa-eye" id="toggleIcon"></i>
                </button>
            </div>
            @error('password') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Jelszó megerősítése</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirmation">
                    <i class="fa-solid fa-eye" id="toggleIconConfirmation"></i>
                </button>
            </div>
            @error('password_confirmation') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" name="bio" rows="3">{{ old('bio') }}</textarea>
            @error('bio') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Regisztráció</button>
    </form>
</main>

<style>
    .fa-eye, .fa-eye-slash {
        color: #000;
    }
</style>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const passwordFieldType = passwordField.getAttribute('type');
        const toggleIcon = document.getElementById('toggleIcon');
        
        if (passwordFieldType === 'password') {
            passwordField.setAttribute('type', 'text');
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.setAttribute('type', 'password');
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    });

    document.getElementById('togglePasswordConfirmation').addEventListener('click', function () {
        const passwordConfirmationField = document.getElementById('password_confirmation');
        const passwordConfirmationFieldType = passwordConfirmationField.getAttribute('type');
        const toggleIconConfirmation = document.getElementById('toggleIconConfirmation');
        
        if (passwordConfirmationFieldType === 'password') {
            passwordConfirmationField.setAttribute('type', 'text');
            toggleIconConfirmation.classList.remove('fa-eye');
            toggleIconConfirmation.classList.add('fa-eye-slash');
        } else {
            passwordConfirmationField.setAttribute('type', 'password');
            toggleIconConfirmation.classList.remove('fa-eye-slash');
            toggleIconConfirmation.classList.add('fa-eye');
        }
    });
</script>
@endsection

@section('footer-text')
    Regisztráció
@endsection