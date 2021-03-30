@extends('admin.admin')
@section('admincontent')

    {{-- Afficher les erreurs de validation que retourne le controlleur s'il y en a --}}
    @if ($errors->any())
        <div class="mb-3 text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire d'enregistrement, juste un prototype --}}
    <form class="needs-validation" action="{{ route('registereducatrice') }}" method="post" novalidate>
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Prenom de l'educatrice"
                value="{{ old('name') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom de l'educatrice"
                value="{{ old('lastname') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>


        <div class="mb-1">
            <input class="form-check-input" type="radio" name="sexe" id="masculin" value="homme">
            <label class="form-check-label" for="masculin">
                Masculin
            </label>
        </div>
        <div class="mb-3">
            <input class="form-check-input" type="radio" name="sexe" id="feminin" value="femme" checked>
            <label class="form-check-label" for="feminin">
                Feminin
            </label>
        </div>

        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de naissance</label>
            <input type="date" class="form-control" name="date_naissance" id="date_naissance"
                placeholder="Date de naissance de l'educatrice" value="{{ old('lastname') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="date_embauche" class="form-label">Date d'embauche</label>
            <input type="date" class="form-control" name="date_embauche" id="date_embauche"
                placeholder="Date d'embauche de l'educatrice" value="{{ old('lastname') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>


        <div class="mb-3">
            <label for="formation" class="form-label">Formations</label>
            <textarea class="form-control" name="formation" id="formation"
                placeholder="Description des formations de l'educatrice" value="{{ old('formation') }}"
                required></textarea>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="specialisation" class="form-label">Specialisations</label>
            <textarea class="form-control" name="specialisation" id="specialisation"
                placeholder="Description des specialisations de l'educatrice" value="{{ old('specialisation') }}"
                required></textarea>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>
        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Repeter le mot de passe</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                placeholder="Repeat Your password" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>



        <button type="submit" class="btn btn-primary">Ajouter Educatrice</button>
    </form>
@endsection
