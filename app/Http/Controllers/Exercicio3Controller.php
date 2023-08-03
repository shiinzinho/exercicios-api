<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio3Controller extends Controller
{
<<<<<<< HEAD
    public function media(Request $request)
    {

        $primeiroNumero = $request->n1;

        $segundoNumero = $request->n2;

        $terceiroNumero = $request->n3;

        return json_encode([
            'resultado' => (($primeiroNumero + $segundoNumero + $terceiroNumero) / 3)
        ]);
    }
=======
    //
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
}
