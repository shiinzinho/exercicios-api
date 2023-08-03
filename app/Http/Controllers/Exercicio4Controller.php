<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio4Controller extends Controller
{
<<<<<<< HEAD
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
=======
    //
>>>>>>> f3e9615e8de9b7af328ca7d661a4ba717627d469
}
