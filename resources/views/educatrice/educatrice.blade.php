@extends('principale.app')
@section('content')

    Vous etes dans Espace educatrice

    <a class="btn btn-outline-primary mr-2" href="{{ route('ajouterenfant') }}">Ajouter enfant</a>
    <a class="btn btn-outline-primary mr-2" href="{{ route('listenfants') }}">Liste enfants</a>

    @yield('educatricecontent')

@endsection
