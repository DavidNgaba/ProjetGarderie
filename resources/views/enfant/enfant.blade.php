@extends('principale.app')
@section('content')

    Vous etes dans Espace enfant

    <a class="btn btn-outline-primary mr-2" href="{{ route('ajouterenfant') }}">Ajouter enfant</a>
    <a class="btn btn-outline-primary mr-2" href="{{ route('listenfants') }}">Liste enfants</a>
    <br>

    @if ($enfant->count())

        <p>{{ $enfant->name }} {{ $enfant->lastname }}</p>

        <p>{{ $enfant->sexe }}</p>

        <p>{{ $enfant->date_naissance }}</p>

        <p>Educatrice assignée: {{ $enfant->educatrice->name }}</p>

        <p>Inscrit le: {{ $enfant->created_at }}</p>

        <p>Tuteur principale: @foreach ($enfant->tuteurs as $tuteur)
                @if ($tuteur->type == 'principale'){{ $tuteur->name }}
                    <a class="btn btn-outline-primary mr-2"
                        href="{{ route('modifierDetailsTuteur', [$tuteur, $enfant]) }}">Modifier</a>
                @endif
            @endforeach

        </p>

        <p>Tuteur secondaire: @foreach ($enfant->tuteurs as $tuteur)
                @if ($tuteur->type == 'secondaire'){{ $tuteur->name }}
                    <a class="btn btn-outline-primary mr-2"
                        href="{{ route('modifierDetailsTuteur', [$tuteur, $enfant]) }}">Modifier</a>
                @else

                    <a class="btn btn-outline-primary mr-2"
                        href="{{ route('modifierDetailsTuteur', [$tuteur, $enfant]) }}">Ajouter</a>

                @endif
            @endforeach
        </p>

        <p>Liste des récupérateurs:
            @if ($enfant->recuperateurs->count())
                @foreach ($enfant->recuperateurs as $recuperateur)
                    {{ $recuperateur->name }}
                @endforeach
                <a class="btn btn-outline-primary mr-2"
                    href="{{ route('modifierDetailsRecuperateur', $enfant) }}">Ajouter</a>
            @endif
        </p>

        <p>Liste des vaccins: @foreach ($enfant->vaccin as $vaccin)
                {{ $vaccin->description }}
            @endforeach
        </p>

        <p>Liste des allergies: @foreach ($enfant->allergie as $allergie)
                {{ $allergie->description }}
            @endforeach
        </p>

        <p>Liste des problemes comportementaux: @foreach ($enfant->comportement as $comportement)
                {{ $comportement->type }}:{{ $comportement->description }}
            @endforeach
        </p>

        <p>Liste des contraintes medicales: @foreach ($enfant->contrainteMedicale as $cmedicale)
                {{ $cmedicale->type }}:{{ $cmedicale->description }}
            @endforeach
        </p>

        <a class="btn btn-outline-primary mr-2" href="{{ route('modifierenfant', $enfant) }}">Modifier détails</a>
    @else
        <p>Pas d'enfants</p>
    @endif

    @yield('enfantcontent')

@endsection
