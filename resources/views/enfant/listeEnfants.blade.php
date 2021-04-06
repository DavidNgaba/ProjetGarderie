@extends('principale.app')
@section('content')

    {{-- Si des infos ont bien été modifiés --}}
    @if ($message = Session::get('success'))
        <div class="mb-3 text-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- Recuperer la liste des enfants et afficher --}}
    <br class="mb-4">
    <strong> Liste des enfants:</strong>
    @if ($enfants->count())
        @foreach ($enfants as $enfant)
            <br>
            <a href="{{ route('pageEnfant', $enfant) }}">{{ $enfant->name }} {{ $enfant->lastname }}</a>

        @endforeach
    @else
        <p>Pas d'enfants</p>
    @endif

@endsection
