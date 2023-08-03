<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio5FormRequest;
use Illuminate\Http\Request;

class Exercicio5Controller extends Controller
{
    public function divisivel(Exercicio5FormRequest $request)
    {

        if ($request->n1 % 4 == 0) {
            return json_encode([
                'mensagem' => 'é divisivel por 4'
            ]);
        } else {
            return json_encode([
                'mensagem' => "não é divisivel por 4"
            ]);
        }
    }
}
