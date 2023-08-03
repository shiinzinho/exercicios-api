<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio5Controller extends Controller
{
<<<<<<< HEAD
    public function idade(Request $request)
    {
        if ($request->numero <= 12) {
            return json_encode([
                'menssage' => '“O usuário é uma criança'
            ]);
        } else if ($request->numero <= 18) {
            return json_encode([
                'menssage' => "É um adolescente"
            ]);
        } else {
            return json_encode([
                'menssage' => '“É um adulto'
            ]);
        }
    }
=======
    //
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
}
