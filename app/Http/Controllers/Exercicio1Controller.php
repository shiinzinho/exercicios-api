<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
class Exercicio1Controller extends Controller
{
    public function multiplicar(Exercício1FormRequest $request)
    {
        $primeiroNumero = $request->n1;
        $segundoNumero = $request->n2;

        return json_encode([
            'resultado' => $primeiroNumero * $segundoNumero
        ]);
=======
class ExercicioUmController extends Controller
{
    public function multiplicar(Request $request){
        $primeiroNumero = $request->n1;
        $segundoNumero = $request->n2;   

        return json_encode([
            'resultado' => $primeiroNumero * $segundoNumero
        ]); 
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
    }
}