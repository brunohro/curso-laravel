<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        return view('tarefas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255'
        ]);

        Tarefa::create([
            'titulo'=> $request->titulo,
            'concluida' => false
        ]);

        return redirect()->route('tarefas.index')->with('sucsess', 'Tarefa criada com sucesso!');
    }

    
    // public function show(string $id)
    // {
    //     //
    // }

    
    public function edit(Tarefa $tarefa)
    {
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $request, Tarefa $tarefa)
    {
        $request->validate([
            'titulo' => 'required|max:255'
        ]);

        $tarefa->update([
            'titulo' => $request->titulo
        ]);

        return redirect()->route('tarefas.index')->with('sucess', 'Tarefa atualizada com sucesso!');
    }


    public function destroy(Tarefa $tarefa)
    {
        $tarefa->delete();

        return redirect()->route('tarefas.index')->with('success', 'Tarefa deletada com sucesso!');
    }
}