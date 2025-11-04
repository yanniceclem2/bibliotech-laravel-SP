{{-- Composant carte salle pour BiblioTech --}}
<div class="card h-100 shadow-sm">
    <div class="book-cover book-cover-default">
        <div class="book-title">{{ $salle->nom ?? 'Salle' }}</div>
    </div>

    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $salle->nom }}</h5>
        <p class="card-text text-muted">Étage : {{ $salle->etage }} • Capacité : {{ $salle->capacite }}</p>

        <span class="badge bg-secondary mb-2">{{ $salle->type }}</span>
        @if($salle->disponible)
            <span class="badge bg-success mb-2">Disponible</span>
        @else
            <span class="badge bg-danger mb-2">Indisponible</span>
        @endif

        <div class="mt-auto">
            <a href="{{ route('salles.show', $salle) }}" class="btn btn-primary">
                <i class="fas fa-eye"></i> Voir
            </a>
            <a href="{{ route('salles.edit', $salle) }}" class="btn btn-outline-secondary ms-2">
                <i class="fas fa-edit"></i> Modifier
            </a>
        </div>
    </div>
</div>
