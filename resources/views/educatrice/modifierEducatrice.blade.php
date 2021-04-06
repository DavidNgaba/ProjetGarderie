<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garderie</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <section>
        <a class="navbar-brand" href="{{ route('acceuil') }}">Garderie</a>

        {{-- Formulaire d'enregistrement, juste un prototype --}}
        <form class="needs-validation" action="{{ route('modifiereducatrice', $educatrice) }}" method="post"
            novalidate>
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Prenom de l'educatrice"
                    value="{{ $educatrice->name }}" required>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>

            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Nom de l'educatrice"
                    value="{{ $educatrice->lastname }}" required>

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
                    placeholder="Date de naissance de l'educatrice" value="{{ $educatrice->date_naissance }}"
                    required>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>

            </div>

            <div class="mb-3">
                <label for="date_embauche" class="form-label">Date d'embauche</label>
                <input type="date" class="form-control" name="date_embauche" id="date_embauche"
                    placeholder="Date d'embauche de l'educatrice" value="{{ $educatrice->date_embauche }}" required>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>

            </div>


            <div class="mb-3">
                <label for="formation" class="form-label">Formations: </label>

                @if ($educatrice->formations->count())
                    @foreach ($educatrice->formations as $formation)

                        {{ $formation->description }},

                    @endforeach

                    <input type="text" class="form-control" name="formation" id="formation"
                        placeholder="Ajouter une formation" value="{{ old('formation') }}" required>

                @endif

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>

            </div>

            <div class="mb-3">
                <label for="specialisation" class="form-label">Specialisations: </label>

                @if ($educatrice->specialisations->count())
                    @foreach ($educatrice->specialisations as $specialisation)

                        {{ $specialisation->description }},


                    @endforeach

                    <input type="text" class="form-control" name="specialisation" id="specialisation"
                        placeholder="Ajouter une specialisation" value="{{ old('specialisation') }}" required>
                @endif


                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>



            <button type="submit" class="btn btn-primary">Modifier Educatrice</button>
        </form>

    </section>
</body>

</html>
