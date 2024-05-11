<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    public function create()
    {
        return view('jugadores.create');
    }

    public function store(Request $request)
    {
        $jugador = Jugador::create($request->all());
        return redirect()->route('jugadores.index')->with('success', 'Jugador creado exitosamente');
    }

    public function show(Jugador $jugador)
    {
        return view('jugadores.show', compact('jugador'));
    }

    public function edit(Jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    public function update(Request $request, Jugador $jugador)
    {
        $jugador->update($request->all());
        return redirect()->route('jugadores.index')->with('success', 'Jugador actualizado exitosamente');
    }

    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadores.index')->with('success', 'Jugador eliminado exitosamente');
    }
}