<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professors = Professor::all();
        return view('professor.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professor = new Professor();
        $professor->nome = $request->nome;

        $professor->save();

        return redirect()->route('professor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = Professor::find($id);
        if(isset($professor)){
            return view('professor.show', compact('professor'));
        }


        return "<h1>ERRO: PROFESSOR NÃO ENCONTRADO!</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::find($id);
        if(isset($professor)){
            return view('professor.edit', compact('professor'));
        }

        return "<h1>ERRO: PROFESSOR NÃO ENCONTRADO!</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor = Professor::find($id);
        if(isset($professor)){
            $professor->nome = $request->nome;

             $professor->save();

            return redirect()->route('professor.index');
        }

        return "<h1>ERRO: PROFESSOR NÃO ENCONTRADO!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = Professor::find($id);
        if(isset($professor)){
            $professor->delete();
            return redirect()->route('professor.index');
        }

        return "<h1>ERRO: PROFESSOR NÃO ENCONTRADO!</h1>";
    }
}
