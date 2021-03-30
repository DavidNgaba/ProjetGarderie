@extends('enfant.enfant')
@section('enfantcontent')

    {{-- Recuperer la liste des enfants et afficher --}}
    <br class="mb-4">
    <strong> Liste des enfants:</strong>
    @if ($enfants->count())
        @foreach ($enfants as $enfant)
            <br>
            <a href="">{{ $enfant->name }} {{ $enfant->lastname }}</a>

        @endforeach
    @else
        <p>Pas d'enfants</p>
    @endif

@endsection
