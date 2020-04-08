<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class AppController extends Controller
{
    function tela_login(){
    	//Exibir tela de login
    	return view('tela_login');
    }

    function login(Request $req){
    	//Comparar cliente e senha
    	$login = $req->input('login');
    	$senha = $req->input('senha');

    	$cli = Cliente::where('login', '=', $login)->first();
    	// $cli terá null ou os dados do cliente encontrado

    	if ($cli and $cli->senha == $senha){
    		//se nao é null, entra aqui
    		//login e senha estão certos
    		return redirect()->route('listar');
    	} else {
    		return view("resultado", ["mensagem" => "Usuário ou senha inválidos."]);
    	}
    }
}
