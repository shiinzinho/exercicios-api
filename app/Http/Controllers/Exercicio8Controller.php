<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio8FormRequest;
use Illuminate\Http\Request;

class Exercicio8Controller extends Controller
{
    public function tabuada(Exercicio8FormRequest $request)
    {
        $numero = $request->n1;

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
}
