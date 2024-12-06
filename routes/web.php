<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PizzasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzasController::class, 'index']);
Route::get('/pizza/{campo}/{valor}', [PizzasController::class, 'search']);