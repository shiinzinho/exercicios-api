<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio9FormRequest;
use Illuminate\Http\Request;

class Exercicio9Controller extends Controller
{
    public function divisivelPorUser(Exercicio9FormRequest $request)
    {
        $numero = $request->n1;

        $numeros = [];

        for ($i = 0; $i <= 100; $i++) {
            if ($i % $numero == 0){
            array_push($numero, $numeros);
        }
    }
        return json_encode([
            "resultado" => $numeros
        ]);
    }
}
// NAO TERMINADO