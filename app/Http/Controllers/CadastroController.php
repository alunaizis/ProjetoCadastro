<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class CadastroController extends Controller
{
    public function cadastro()
    {
        return view('cadastro');
    }
    
    public function welcome(){
        return view('welcome');
    }
    public function resultadoCadastro(Request $request)
    {
       
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->senha = $request->senha; 
        $usuario->matricula = $request->matricula;
        $usuario->data_nasc = $request->data_nasc;
        $usuario->save();
      
                    return view('usuario.show', compact('usuario'));
    }
    public function carregarlista(){
        $usuario = Usuario::all();
        return view('listaCadastrados', compact('usuario'));
    }

}


