<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio12Controller extends Controller
{
<<<<<<< HEAD
    public function decrescente()
    {


        $numeros = [];

        for ($i = 90; $i >= 1; $i--) {
            array_push($numeros, $i);
        }

        return json_encode([
            'valores' => $numeros
        ]);
    }
=======
    //
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
}
