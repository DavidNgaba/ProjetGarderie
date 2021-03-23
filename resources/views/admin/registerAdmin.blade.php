@extends('principale.app')
@section('content')
    <form class="needs-validation" action="{{ route('register') }}" method="post" novalidate>
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Admin name"
                value="{{ old('name') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Admin username"
                value="{{ old('username') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Admin email"
                value="{{ old('email') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Your password" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password again</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                placeholder="Repeat Your password" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Ajouter admin</button>
    </form>
@endsection
