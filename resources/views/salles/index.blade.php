@extends('layouts.app', [
    'title' => 'Gestion des salles',
    'breadcrumbs' => [ ['label' => 'Salles', 'url' => null] ]
])

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center mb-3">
            <h1 class="display-5 fw-bold text-dark mb-2">Gestion des salles</h1>
            <p class="text-muted">{{ $salles->total() ?? count($salles) }} salles</p>
            <a href="{{ route('salles.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Créer une salle
            </a>
        </div>
    </div>

    <div class="row">
        @forelse($salles as $salle)
        <div class="col-md-6 col-lg-4 mb-4">
            <x-salle-card :salle="$salle" />
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle"></i>
                Aucune salle n'est disponible pour le moment.
            </div>
        </div>
        @endforelse
    </div>

    <div class="row mt-3">
        <div class="col-12">
            {{ $salles->links() }}
        </div>
    </div>
</div>
@endsection
