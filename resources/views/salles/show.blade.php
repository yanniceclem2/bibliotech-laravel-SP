@extends('layouts.app')

@section('content')
    <h1>Fiche salle : {{ $salle->nom }}</h1>

    <ul>
        <li>Étage : {{ $salle->etage }}</li>
        <li>Capacité : {{ $salle->capacite }}</li>
        <li>Type : {{ $salle->type }}</li>
        <li>Disponible : {{ $salle->disponible ? 'oui' : 'non' }}</li>
    </ul>

    <a href="{{ route('salles.edit', $salle) }}">Modifier</a>
    <a href="{{ route('salles.index') }}">Retour à la liste</a>

@endsection
