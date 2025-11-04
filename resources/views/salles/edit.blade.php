@extends('layouts.app')

@section('content')
    <h1>Modifier la salle</h1>

    <form action="{{ route('salles.update', $salle) }}" method="POST">
        @method('PUT')
        @include('salles._form')
    </form>

    <a href="{{ route('salles.index') }}">Retour à la liste</a>
@endsection
