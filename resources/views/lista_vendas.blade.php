@extends('template')

@section('conteudo')
<h1>Vendas do usuario {{ $cliente->nome}}</h1>
@if (count($cliente->vendas) >0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID Venda</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cliente->vendas as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->valor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="alert alert-danger">
   <h3> Usuario nao possui vendas </h3>
</div>
@endif
@endsection