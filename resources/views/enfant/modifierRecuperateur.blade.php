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

        <form class="" action="{{ route('modifierDetailsRecuperateur', $enfant) }}" method="post" novalidate>
            @csrf

            <p>Ajouter Recuperateur</p>
            <div class="mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom"
                    value="{{ old('name') }}" required>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Prenom"
                    value="{{ old('lastname') }}" required>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                    value="{{ old('email') }}" required>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone"
                    value="{{ old('phone') }}" required>

                <div class="invalid-feedback">
                    Champ Vide ou invalide
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>

    </section>

</body>

</html>
