@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <form name="frmFiltrar" method="get" action="/">
      <div class="col-md-4 col-md-offset-0">
        <input type="text" name="email"  value="{{ $email }}" class="form-control" id="txtPedido" placeholder="Filtre pelo email">
      </div>
      <div class="col-md-4 col-md-offset-0">
        <input type="number" name="pedido" value="{{ $pedido }}"  class="form-control" id="txtPedido" placeholder="Filtre pelo número do pedido">
      </div>
      <div class="col-md-1 col-md-offset-0">
        <button type="submit" class="btn btn-primary btn-buscar">Buscar</button>
      </div>
      <div class="col-md-3 col-md-offset-0">
        <button type="button" class="btn btn-warning btn-cadastrar-chamado">Novo chamado</button>
      </div>
    </form>
  </div><br>
  <div class="row">
      <div class="col-md-12 col-md-offset-0">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Título</th>
            <th>Observação</th>
            <th>Cliente</th>
            <th>Email</th>
            <th>Número do pedido</th>
            <th>Descrição</th>
          </tr>
        </thead>
        <tbody>

        @foreach($chamados as $chamado)
          <tr>
            <td>{{ $chamado->titulo }}</td>
            <td>{{ $chamado->observacao }}</td>
            <td>{{ $chamado->cliente->nome }}</td>
            <td>{{ $chamado->cliente->email }}</td>
            <td>{{ $chamado->pedido->id }}</td>
            <td>{{ $chamado->pedido->descricao }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>

      {{$chamados->links()}}

      </div>
  </div>
</div>
@endsection
