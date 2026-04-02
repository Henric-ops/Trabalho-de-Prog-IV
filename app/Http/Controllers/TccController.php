<?php

namespace App\Http\Controllers;

use App\Models\Tcc;
use App\Http\Requests\StoreTccRequest;
use App\Http\Requests\UpdateTccRequest;

class TccController extends Controller
{
    public function index()
    {
        $tccs = Tcc::all();
        return view('tccs.index', compact('tccs'));
    }

    public function create()
    {
        return view('tccs.create');
    }

    public function store(StoreTccRequest $request)
    {
        $path = $request->file('arquivo')->store('pdfs', 'public');

        Tcc::create([
            'titulo' => $request->titulo,
            'aluno' => $request->aluno,
            'orientador' => $request->orientador,
            'paginas' => $request->paginas,
            'data' => $request->data,
            'hora' => $request->hora,
            'resumo' => $request->resumo,
            'palavras_chave' => $request->palavras_chave,
            'arquivo' => $path
        ]);

        return redirect()->route('tccs.index')->with('success', 'TCC cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $tcc = Tcc::findOrFail($id);
        return view('tccs.edit', compact('tcc'));
    }

    public function update(UpdateTccRequest $request, $id)
    {
        $tcc = Tcc::findOrFail($id);
        $tcc->update($request->all());

        return redirect()->route('tccs.index')->with('success', 'TCC atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Tcc::destroy($id);
        return redirect()->route('tccs.index')->with('success', 'TCC excluído com sucesso!');
    }
}
