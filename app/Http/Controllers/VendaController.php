<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Cliente;

class VendaController extends Controller
{
    function telaCadastro(){
        $cliente = Cliente::all();

        return view ("tela_vendas",
            ["usuario"=>$cliente]);
    }

    function listar(){
        $vnd = Venda::all();

        return view("vendas", [ "us" => $vnd ]);
	}
	
    function adicionar(Request $req){
    	$nome = $req->input('nome');
    	$valor = $req->input('valor');
    	
    	$cli = new Venda();
    	$cli->id_usuario = $nome;
    	$cli->valor = $valor;
    	

    	if ($cli->save()){
    		$msg = "Venda efetuada com sucesso.";
    	} else {
    		$msg = "Venda nao efetuada.";
    	}

        return view("resultado", [ "mensagem" => $msg]);
	}
	
	function excluir($id){
		$vnd = Venda::find($id);
		$vnd->delete();
		
		return 	VendaController::listar();
  
    }

    function  vendasPorCliente($id){
        $cli = Cliente::find($id);
        return view('lista_vendas', ["cliente" => $cli]);
    }
}
