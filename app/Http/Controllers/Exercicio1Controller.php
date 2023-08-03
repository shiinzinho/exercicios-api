<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio1FormRequest;
use Illuminate\Http\Request;

class Exercicio1Controller extends Controller
{
    public function multiplicar(Exercicio1FormRequest $request)
    {
        $primeiroNumero = $request->n1;
        $segundoNumero = $request->n2;

        return json_encode([
            'resultado' => $primeiroNumero * $segundoNumero
        ]);
    }
}