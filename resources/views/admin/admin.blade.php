@extends('principale.app')
@section('content')

    Vous etes dans Espace admin

    <a class="btn btn-outline-primary mr-2" href="{{ route('registereducatrice') }}">Ajouter educatrice</a>
    <a class="btn btn-outline-primary mr-2" href="{{ route('ajouterenfant') }}">Ajouter enfant</a>
    <a class="btn btn-outline-primary mr-2" href="{{ route('listeducatrices') }}">Liste educatrices</a>
    <a class="btn btn-outline-primary mr-2" href="{{ route('listenfants') }}">Liste enfants</a>

    @yield('admincontent')


@endsection
