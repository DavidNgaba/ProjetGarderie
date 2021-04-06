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

        @if ($tuteurs->count() >= 2)
            <form class="" action="{{ route('modifierDetailsTuteur', [$tuteur, $enfant]) }}" method="post" novalidate>
                @csrf
                <p>Tuteur Actuel</p>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom"
                        value="{{ $tuteur->name }}" required>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Prenom"
                        value="{{ $tuteur->lastname }}" required>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                        value="{{ $tuteur->email }}" required>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone"
                        value="{{ $tuteur->phonenumber }}" required>

                    <div class="mb-1">
                        <input class="form-check-input" type="radio" name="tuteur" id="principale" value="principale"
                            checked disabled>
                        <label class="form-check-label" for="masculin">
                            Tuteur principale
                        </label>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="radio" name="tuteur" id="secondaire" value="secondaire"
                            disabled>
                        <label class="form-check-label" for="feminin">
                            Tuteur secondaire
                        </label>
                    </div>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>


        @else


            <form class="" action="{{ route('modifierDetailsTuteur', [$tuteur, $enfant]) }}" method="post" novalidate>
                @csrf
                <p>Tuteur Actuel</p>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom"
                        value="{{ $tuteur->name }}" required>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Prenom"
                        value="{{ $tuteur->lastname }}" required>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                        value="{{ $tuteur->email }}" required>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone"
                        value="{{ $tuteur->phonenumber }}" required>

                    <div class="mb-1">
                        <input class="form-check-input" type="radio" name="tuteur" id="principale" value="principale"
                            checked disabled>
                        <label class="form-check-label" for="masculin">
                            Tuteur principale
                        </label>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="radio" name="tuteur" id="secondaire" value="secondaire"
                            disabled>
                        <label class="form-check-label" for="feminin">
                            Tuteur secondaire
                        </label>
                    </div>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>



            <form class="" action="{{ route('ajouterDetailsTuteur', $enfant) }}" method="post" novalidate>
                @csrf

                <p>Ajouter tuteur</p>
                <div class="mb-3">
                    <input type="text" class="form-control" name="Tname" id="Tname" placeholder="Nom"
                        value="{{ old('Tname') }}" required>
                    <input type="text" class="form-control" name="Tlastname" id="Tlastname" placeholder="Prenom"
                        value="{{ old('Tlastname') }}" required>
                    <input type="text" class="form-control" name="Temail" id="Temail" placeholder="Email"
                        value="{{ old('Temail') }}" required>
                    <input type="text" class="form-control" name="Tphone" id="Tphone" placeholder="Telephone"
                        value="{{ old('Tphone') }}" required>

                    <div class="mb-1">
                        <input class="form-check-input" type="radio" name="Ttuteur" id="principale" value="principale"
                            disabled>
                        <label class="form-check-label" for="principale">
                            Tuteur principale
                        </label>
                    </div>
                    <div class="mb-3">
                        <input class="form-check-input" type="radio" name="Ttuteur" id="secondaire" value="secondaire"
                            checked>
                        <label class="form-check-label" for="secondaire">
                            Tuteur secondaire
                        </label>
                    </div>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>

        @endif




    </section>

</body>

</html>
