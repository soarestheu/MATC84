<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuarioController extends Controller
{
    //

    public function cadastro(Request $request)
    {
        
        $email  =   $request->email;
        $nome   =   $request->nome;
        $senha  =   $request->pass;
        return view('index', ['email' => $email, 'nome' => $nome]);
    }
}
