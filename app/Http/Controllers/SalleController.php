<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalleRequest;
use App\Models\Salle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {
        $salles = Salle::orderBy('nom')->paginate(15);
        return view('salles.index', compact('salles'));
    }

    public function create()
    {
        $salle = new Salle();
        return view('salles.create', compact('salle'));
    }

    public function store(SalleRequest $request): RedirectResponse
    {
        $data = $request->validated();
        // checkbox handling
        $data['disponible'] = $request->has('disponible') ? (bool) $request->input('disponible') : true;
        Salle::create($data);
        return redirect()->route('salles.index')->with('success', 'Salle créée.');
    }

    public function show(Salle $salle)
    {
        return view('salles.show', compact('salle'));
    }

    public function edit(Salle $salle)
    {
        return view('salles.edit', compact('salle'));
    }

    public function update(SalleRequest $request, Salle $salle): RedirectResponse
    {
        $data = $request->validated();
        $data['disponible'] = $request->has('disponible') ? (bool) $request->input('disponible') : false;
        $salle->update($data);
        return redirect()->route('salles.index')->with('success', 'Salle mise à jour.');
    }

    public function destroy(Salle $salle): RedirectResponse
    {
        $salle->delete();
        return redirect()->route('salles.index')->with('success', 'Salle supprimée.');
    }
}
