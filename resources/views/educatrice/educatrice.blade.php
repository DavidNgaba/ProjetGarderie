@extends('principale.app')
@section('content')

    Vous etes dans Espace educatrice

    <a class="btn btn-outline-primary mr-2" href="{{ route('ajouterenfant') }}">Ajouter enfant</a>
    <a class="btn btn-outline-primary mr-2" href="{{ route('listenfants') }}">Liste enfants</a>
    <br>

    @if (Auth::guard('educatrice')->check())
        <p>{{ Auth::guard('educatrice')->user()->name }} {{ Auth::guard('educatrice')->user()->lastname }}</p>

        <p>Liste des enfants assignés:
            @if (Auth::guard('educatrice')
            ->user()
            ->enfants->count())
                @foreach (Auth::guard('educatrice')->user()->enfants as $enfant)
                    {{ $enfant->name }}
                @endforeach
            @endif
        </p>
    @elseif(Auth::guard('admin')->check())
        @if ($educatrice->count())

            <p>{{ $educatrice->name }} {{ $educatrice->lastname }}</p>

            <p>{{ $educatrice->sexe }}</p>

            <p>{{ $educatrice->date_naissance }}</p>

            <p>Inscrit le: {{ $educatrice->created_at }}</p>


            <p>Liste des enfants assignés:
                @if ($educatrice->enfants->count())
                    @foreach ($educatrice->enfants as $enfant)
                        {{ $enfant->name }}
                    @endforeach
                @endif
                <a class="btn btn-outline-primary mr-2" href="{{ route('modifiereducatrice', $educatrice) }}">Modifier
                    détails</a>

            </p>
        @else
            <p>Inexistant</p>
        @endif
    @endif

    @yield('educatricecontent')

@endsection
