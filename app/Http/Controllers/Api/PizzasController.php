<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizzas;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index()
    {
        $pizzas = Pizzas::all();
        return response()->json($pizzas);
    }

    public function search(Request $request, $campo, $valor)
    {
        $result = Pizzas::where($campo, 'like', '%'.$valor.'%',)->get();
        return response()->json($result);
    }
}
