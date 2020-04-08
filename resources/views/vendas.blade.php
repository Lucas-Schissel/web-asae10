@extends('template')
@section('conteudo')
<h1>Lista de Vendas</h1>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($us as $u)
		<tr>
			<td>{{ $u->id }}</td>
			<td>{{ $u->id_usuario }}</td>
			<td>{{ $u->valor }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection