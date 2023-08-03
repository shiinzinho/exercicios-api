<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio6FormRequest;
use Illuminate\Http\Request;

class Exercicio6Controller extends Controller
{
    public function idade(Exercicio6FormRequest $request)
    {
        if ($request->n1 <= 12) {
            return json_encode([
                'menssage' => "O usuário é uma criança"
            ]);
        } else if ($request->n1 < 18) {
            return json_encode([
                'menssage' => "O usuário é um adolescente"
            ]);
        } else {
            return json_encode([
                'menssage' => "O usuário é um adulto"
            ]);
        }
    }
}
