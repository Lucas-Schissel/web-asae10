<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;

class VendaController extends Controller
{
    function telaVendas(){
    	return view("tela_vendas");
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
}
