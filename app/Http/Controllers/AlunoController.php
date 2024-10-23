<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::with('turma')->get(); // Carrega as turmas associadas aos alunos
    
        foreach ($alunos as $aluno) {
            //dd($aluno); // Acessa a turma de cada aluno individualmente
        }

        return view('aluno.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $turmas = Turma::all();

        return view('aluno.create', compact('turmas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->turma_id = $request->turma_id;

        $aluno->save();

        return redirect()->route('aluno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::find($id);
        $turma = Turma::find($aluno->turma_id);
        if(isset($turma)){
            return view('aluno.show', compact(['aluno', 'turma']));
        }


        return "<h1>ERRO: ALUNO NÃO ENCONTRADO!</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $turmas = Turma::all();
        if(isset($aluno)){
            return view('aluno.edit', compact('aluno', 'turmas'));
        }

        return "<h1>ERRO: ALUNO NÃO ENCONTRADO!</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);
        if(isset($aluno)){
            $aluno->nome = $request->nome;
            $aluno->turma_id = $request->turma_id;

             $aluno->save();

            return redirect()->route('aluno.index');
        }

        return "<h1>ERRO: ALUNO NÃO ENCONTRADO!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);
        if(isset($aluno)){
            $aluno->delete();
            return redirect()->route('aluno.index');
        }

        return "<h1>ERRO: ALUNO NÃO ENCONTRADO!</h1>";
    }
}
