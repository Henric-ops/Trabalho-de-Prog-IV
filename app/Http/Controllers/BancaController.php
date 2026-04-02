<?php

namespace App\Http\Controllers;

use App\Models\Banca;
use App\Models\Tcc;
use App\Http\Requests\StoreBancaRequest;
use App\Http\Requests\UpdateBancaRequest;

class BancaController extends Controller
{
    public function index()
    {
        $bancas = Banca::with('tcc')->get();
        return view('bancas.index', compact('bancas'));
    }

    public function create()
    {
        $tccs = Tcc::all();
        return view('bancas.create', compact('tccs'));
    }

    public function store(StoreBancaRequest $request)
    {
        Banca::create($request->all());
        return redirect()->route('bancas.index')->with('success', 'Banca cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $banca = Banca::findOrFail($id);
        $tccs = Tcc::all();
        return view('bancas.edit', compact('banca', 'tccs'));
    }

    public function update(UpdateBancaRequest $request, $id)
    {
        $banca = Banca::findOrFail($id);
        $banca->update($request->all());

        return redirect()->route('bancas.index')->with('success', 'Banca atualizada com sucesso!');
    }

    public function destroy($id)
    {
        Banca::destroy($id);
        return redirect()->route('bancas.index')->with('success', 'Banca excluída com sucesso!');
    }
}
