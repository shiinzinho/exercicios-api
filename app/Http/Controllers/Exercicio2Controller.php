<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio2FormRequest;
use Illuminate\Http\Request;

class Exercicio2Controller extends Controller
{
    public function retornarMaior(Exercicio2FormRequest $request)
    {

        if ($request->n1 > $request->n2) {
            return json_encode([
                'maior' => $request->n1
            ]);
        } else if ($request->n2 > $request->n1) {
            return json_encode([
                'maior' => $request->n2
            ]);
        } else {
            return json_encode([
                'message' => 'As entradas são iguais'
            ]);
        }
    }
}
