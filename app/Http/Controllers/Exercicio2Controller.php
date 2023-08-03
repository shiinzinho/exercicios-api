<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio2Controller extends Controller
{
<<<<<<< HEAD
    public function retornarMaior(Request $request)
    {

        if ($request->primeiroNumero > $request->segundoNumero) {
            return json_encode([
                'maior' => $request->primeiroNumero
            ]);
        } else if ($request->segundoNumero > $request->primeiroNumero) {
            return json_encode([
                'maior' => $request->segundoNumero
            ]);
        } else {
            return json_encode([
                'message' => 'As entradas são iguais'
            ]);
        }
    }
}
=======
    //
}
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
