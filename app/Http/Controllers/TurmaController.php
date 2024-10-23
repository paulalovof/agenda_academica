<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::all();

        return view('turma.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nivels = Nivel::all();

        return view('turma.create', compact('nivels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $turma = new Turma();
        $turma->nome = $request->nome;
        $turma->ano = $request->ano;
        $turma->sigla = $request->sigla;
        $turma->nivel_id = $request->nivel_id;

        $turma->save();

        return redirect()->route('turma.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $turma = Turma::find($id);
        $nivel = Nivel::find($turma->nivel_id);
        if(isset($nivel)){
            return view('turma.show', compact(['turma', 'nivel']));
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turma = Turma::find($id);
        $nivels = Nivel::all();
        if(isset($turma)){
            return view('turma.edit', compact('turma', 'nivels'));
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            $turma->nome = $request->nome;
            $turma->ano = $request->ano;
            $turma->sigla = $request->sigla;
            $turma->nivel_id = $request->nivel_id;

             $turma->save();

            return redirect()->route('turma.index');
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            $turma->delete();
            return redirect()->route('turma.index');
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }
}