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
                        <input type="text" class="form-control" name="vaccin" id="vaccin"
                            placeholder="Ajouter un vaccin" value="{{ old('vaccin') }}" required>

                        <div class="invalid-feedback">
                            Champ Vide ou invalide
                        </div>
                    </div>
                @else
                    <div class="mb-3">
                        <label for="vaccin" class="form-label">Ajouter un vaccin</label>
                        <input type="text" class="form-control" name="vaccin" id="vaccin"
                            placeholder="Description du vaccin" value="{{ old('vaccin') }}" required>

                        <div class="invalid-feedback">
                            Champ Vide ou invalide
                        </div>
                    </div>
                @endif

            </div>

            <div class="mb-3">

                <label for="allergies" class="form-label"><strong> Les allergies</strong></label><br>

                @if ($allergies->count())
                    @foreach ($allergies as $allergie)

                        <label><input type="checkbox" name="allergies[]" value="{{ $allergie->description }}">
                            {{ $allergie->description }}</label> <br>

                    @endforeach

                    <div class="mb-3">
                        <input type="text" class="form-control" name="allergie" id="allergie"
                            placeholder="Ajouter une allergie" value="{{ old('allergie') }}" required>

                        <div class="invalid-feedback">
                            Champ Vide ou invalide
                        </div>
                    </div>
                @else
                    <div class="mb-3">
                        <label for="vaccin" class="form-label">Ajouter une allergie</label>
                        <input type="text" class="form-control" name="allergie" id="allergie"
                            placeholder="Description de l'allergie" value="{{ old('allergie') }}" required>

                        <div class="invalid-feedback">
                            Champ Vide ou invalide
                        </div>
                    </div>
                @endif

            </div>

            <div class="mb-3">

                <label for="comportement" class="form-label"><strong> Les problemes comportementaux de
                        l'enfant</strong></label><br>

                <div class="mb-3">
                    <input type="text" class="form-control" name="comportement" id="comportement"
                        placeholder="Ajouter un type de probleme" value="{{ old('comportement') }}" required>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="descriptioncomportement" id="descriptioncomportement"
                        placeholder="Description du probleme"
                        required>{{ old('descriptioncomportement') }}</textarea>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

            </div>

            <div class="mb-3">

                <label for="cmedicale" class="form-label"><strong> Les contraintes medicales de
                        l'enfant</strong></label><br>

                <div class="mb-3">
                    <input type="text" class="form-control" name="cmedicale" id="cmedicale"
                        placeholder="Ajouter une contrainte medicale" value="{{ old('cmedicale') }}" required>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="descriptioncmedicale" id="descriptioncmedicale"
                        placeholder="Description de la contrainte"
                        required>{{ old('descriptioncmedicale') }}</textarea>

                    <div class="invalid-feedback">
                        Champ Vide ou invalide
                    </div>
                </div>

            </div>

            <div class="mb-3">

                <label for="educatrices" class="form-label"><strong>Assigner une educatrice</strong></label><br>

                @if ($educatrices->count())

                    <select name="educatrices" id="educatrices">
                        @foreach ($educatrices as $educatrice)

                            <option value="{{ $educatrice->id }}">{{ $educatrice->name }}
                                {{ $educatrice->lastname }}
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

            <p>Coordonnées Tuteur Principale</p>

            <div class="mb-3">
                <input type="text" class="form-control" name="tuteurname" id="tuteurname" placeholder="Nom"
                    value="{{ old('tuteurname') }}" required>
                <input type="text" class="form-control" name="tuteurlastname" id="tuteurlastname" placeholder="Prenom"
                    value="{{ old('tuteurlastname') }}" required>
                <input type="text" class="form-control" name="tuteuremail" id="tuteuremail" placeholder="Email"
                    value="{{ old('tuteuremail') }}" required>
                <input type="text" class="form-control" name="tuteurphone" id="tuteurphone" placeholder="Telephone"
                    value="{{ old('tuteurphone') }}" required>

                <div class="mb-1">
                    <input class="form-check-input" type="radio" name="tuteur" id="principale" value="principale"
                        checked>
                    <label class="form-check-label" for="principale">
                        Tuteur principale
                    </label>
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="tuteur" id="secondaire" value="secondaire"
                        disabled>
                    <label class="form-check-label" for="secondaire">
                        Tuteur secondaire
                    </label>
                </div>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>

            <p>Coordonnées Récuperateur</p>
            <div class="mb-3">
                <input type="text" class="form-control" name="recuperateurname" id="recuperateurname" placeholder="Nom"
                    value="{{ old('recuperateurname') }}" required>
                <input type="text" class="form-control" name="recuperateurlastname" id="recuperateurlastname"
                    placeholder="Prenom" value="{{ old('recuperateurlastname') }}" required>
                <input type="text" class="form-control" name="recuperateuremail" id="recuperateuremail"
                    placeholder="Email" value="{{ old('recuperateuremail') }}" required>
                <input type="text" class="form-control" name="recuperateurphone" id="recuperateurphone"
                    placeholder="Telephone" value="{{ old('recuperateurphone') }}" required>


                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Ajouter Enfant</button>
        </form>


    </section>

</body>

</html>
