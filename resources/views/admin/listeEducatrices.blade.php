@extends('admin.admin')
@section('admincontent')

    {{-- Recuperer la liste des educatrice et afficher --}}
    <br class="mb-4">
    <strong> Liste des educatrices:</strong>
    @if ($educatrices->count())
        @foreach ($educatrices as $educatrice)
            <br>
            <a href="">{{ $educatrice->name }} {{ $educatrice->lastname }}</a>
        @endforeach
    @else
        <p>Pas d'educatrices</p>
    @endif

@endsection
