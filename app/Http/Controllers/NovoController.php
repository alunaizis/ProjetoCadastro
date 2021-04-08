<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Usuario;


class NovoController extends Controller
{
    public function create()
    {
        return view('usuario_endereco.cadastroCompleto');
    }
    public function save(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->senha = $request->senha; 
        $usuario->matricula = $request->matricula;
        $usuario->data_nasc = $request->data_nasc;
        $usuario->save();
       
        $endereco = new Endereco();
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->usuario_id = $usuario->id;

        $endereco->save();
      
        return redirect(route('listaEndereco'));
    }
      
}
