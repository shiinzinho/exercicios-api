<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio6Controller extends Controller
{
    public function idade(Request $request)
    {
        if ($request->numero <= 12) {
            return json_encode([
                'menssage' => "O usuário é uma criança"
            ]);
        } else if ($request->numero <= 18) {
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
