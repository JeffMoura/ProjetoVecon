<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

/*
Route::get('/', function(){
    return view('paginas/home');
});
Route::get('/sobre', function(){
    return view('paginas/sobre');
});
Route::get('/instrucao', function(){
    return view('paginas/instrucao');
});*/

Route::get('/', [CalcController::class, "inicio"])->name('paginas.inicio'); //rota página inicial
Route::get('/sobre',[CalcController::class, "sobre"])->name('paginas.sobre');
Route::get('/instrucao',[CalcController::class, "instrucao"])->name('paginas.instrucao');

