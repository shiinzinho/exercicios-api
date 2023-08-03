<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio4Controller extends Controller
{
    public function verficar(Request $request)
    {

        if ($request->numero % 2 == 0) {
            return json_encode([
                'mensagem' => 'Par'
            ]);
        } else {
            return json_encode([
                'mensagem' => "Impar"
            ]);
        }
    }
}
