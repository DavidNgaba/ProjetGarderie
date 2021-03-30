@extends('enfant.enfant')
@section('enfantcontent')


    {{-- <br class="mb-4">
    <strong> Liste des vaccins:</strong>
    @if ($vaccins->count())
        @foreach ($vaccins as $vaccin)
            <br>
            <a href="">{{ $vaccin->description }}</a>

            <span>{{ $vaccin->enfant->count() }}</span>

        @endforeach
    @else
        <p>Pas de vaccin</p>
    @endif --}}


    {{-- Formulaire d'enregistrement, juste un prototype --}}
    <form class="" action="{{ route('ajouterenfant') }}" method="post" novalidate>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Prenom de l'enfant"
                value="{{ old('name') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>

        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom de l'enfant"
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
                placeholder="Date de naissance de l'enfant" value="{{ old('lastname') }}" required>

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>
        </div>

        <div class="mb-3">

            <label for="vaccins" class="form-label"><strong> Les vaccins</strong></label><br>

            @if ($vaccins->count())
                @foreach ($vaccins as $vaccin)

                    <label><input type="checkbox" name="vaccins[]" value="{{ $vaccin->description }}">
                        {{ $vaccin->description }}</label> <br>

                @endforeach

                <div class="mb-3">
                    <label for="vaccin" class="form-label"><strong>Ajouter un vaccin</strong></label>
                    <input type="text" class="form-control" name="vaccin" id="vaccin" placeholder="Description du vaccin"
                        value="{{ old('vaccin') }}" required>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>
            @else
                <div class="mb-3">
                    <label for="vaccin" class="form-label">Ajouter un vaccin</label>
                    <input type="text" class="form-control" name="vaccin" id="vaccin" placeholder="Description du vaccin"
                        value="{{ old('vaccin') }}" required>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>
            @endif

        </div>

        <div class="mb-3">

            <label for="educatrices" class="form-label"><strong>Assigner une educatrice</strong></label><br>

            @if ($educatrices->count())

                <select name="educatrices" id="educatrices">
                    @foreach ($educatrices as $educatrice)

                        <option value="{{ $educatrice->id }}">{{ $educatrice->name }} {{ $educatrice->lastname }}
                        </option>
                    @endforeach

                </select>

            @else
                <p>Pas d'educatrices</p>
            @endif

            <div class="invalid-feedback">
                Champ Vide ou invalide
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Ajouter Enfant</button>
    </form>

@endsection
