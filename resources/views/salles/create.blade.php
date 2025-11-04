@extends('layouts.app')

@section('content')
    <h1>Créer une salle</h1>

    <form action="{{ route('salles.store') }}" method="POST">
        @include('salles._form')
    </form>

    <a href="{{ route('salles.index') }}">Retour à la liste</a>
@endsection
