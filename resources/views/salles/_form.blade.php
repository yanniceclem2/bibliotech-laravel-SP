@csrf

<div>
    <label for="nom">Nom</label>
    <input id="nom" name="nom" type="text" value="{{ old('nom', $salle->nom ?? '') }}" maxlength="100" required>
    @error('nom')<div class="error">{{ $message }}</div>@enderror
</div>

<div>
    <label for="etage">Étage</label>
    <input id="etage" name="etage" type="number" value="{{ old('etage', $salle->etage ?? 0) }}" min="0" max="5" required>
    @error('etage')<div class="error">{{ $message }}</div>@enderror
</div>

<div>
    <label for="capacite">Capacité</label>
    <input id="capacite" name="capacite" type="number" value="{{ old('capacite', $salle->capacite ?? 1) }}" min="1" max="200" required>
    @error('capacite')<div class="error">{{ $message }}</div>@enderror
</div>

<div>
    <label for="type">Type</label>
    <select id="type" name="type" required>
        @php $t = old('type', $salle->type ?? '') @endphp
        <option value="">-- Choisir --</option>
        <option value="lecture" {{ $t=='lecture' ? 'selected' : '' }}>lecture</option>
        <option value="réunion" {{ $t=='réunion' ? 'selected' : '' }}>réunion</option>
        <option value="multimédia" {{ $t=='multimédia' ? 'selected' : '' }}>multimédia</option>
        <option value="archives" {{ $t=='archives' ? 'selected' : '' }}>archives</option>
    </select>
    @error('type')<div class="error">{{ $message }}</div>@enderror
</div>

<div>
    <label for="disponible">
        <input id="disponible" name="disponible" type="checkbox" value="1" {{ old('disponible', $salle->disponible ?? true) ? 'checked' : '' }}>
        Disponible
    </label>
</div>

<div>
    <button type="submit">Enregistrer</button>
</div>
