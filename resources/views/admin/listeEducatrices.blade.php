@extends('admin.admin')
@section('admincontent')

    {{-- Si des infos ont bien été modifiés --}}
    @if ($message = Session::get('success'))
        <div class="mb-3 text-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{-- Recuperer la liste des educatrice et afficher --}}
    <br class="mb-4">
    <strong> Liste des educatrices:</strong>
    @if ($educatrices->count())
        @foreach ($educatrices as $educatrice)
            <br>
            <a href="{{ route('pageEducatrice', $educatrice) }}">{{ $educatrice->name }}
                {{ $educatrice->lastname }}</a>
            {{-- <a href="{{ route('formationsEducatrice') }}">Ajouter
                formation/specialistaion</a> --}}
        @endforeach
    @else
        <p>Pas d'educatrices</p>
    @endif

@endsection
