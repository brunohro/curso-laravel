<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\TarefaController;

Route::get('/', [PaginaController::class, 'inicio']);

Route::get('/', function(){
    return redirect('/tarefas');
});

Route::resource('tarefas', TarefaController::class);