@extends('template')

@section('conteudo')
<div class="text-center">
	<h1>Venda para Clientes</h1>
	<form method="post" action="{{ route('venda_add') }}">
        @csrf
        <input type="text" class="form-control" name="nome" placeholder="Nome">
		<br>
		<input type="text" class="form-control" name="valor" placeholder="Valor">
		<br>
		<input type="submit" class="btn btn-success btn-lg btn-block" value="Cadastrar">
	</form>
</div>
@endsection