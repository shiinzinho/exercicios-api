<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio8Controller extends Controller
{
<<<<<<< HEAD
    public function tabuada(Request $request)
    {
        $numero = $request->numero_tabuada;

        $numeros = [];

        for ($i = 0; $i <= 10; $i++) {
            $calculo = $numero * $i;
            $resultado = $numero . " x " . $i . " = " . $calculo;
            array_push($numeros, $resultado);
        }
        return json_encode([
            "resultado" => $numeros
        ]);
    }
=======
    //
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
}