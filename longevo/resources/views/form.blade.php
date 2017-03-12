@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="formChamado" data-toggle="validator" role="form">
              <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="tlblNome" class="control-label">Nome do cliente</label>
                <input type="text" name="txtNome" id="textNome" class="form-control" placeholder="Digite o nome do cliente" required>
              </div>
              
              <div class="form-group">
                <label for="lblEmail" class="control-label">Email</label>
                <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Digite o email do cliente" data-error="Por favor, informe um e-mail correto." required>
                 <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group">
                <label for="lblPedido" class="control-label">Número do pedido</label>
                <input type="number" name="txtPedido" class="form-control" id="txtPedido" placeholder="Digite o número do pedido" required>
                <span class="help-block with-errors">Máximo de seis (6) digitos</span>
              </div>
              
              <div class="form-group">
                <label for="lblTitulo" class="control-label">Título</label>
                <input type="text" name="txtTitulo" class="form-control" id="txtTitulo" placeholder="Digite o título"  required>
                <span class="help-block with-errors">Máximo de cem (100) caracteres</span>
              </div>

              <div class="form-group">
                <label for="inputConfirm" class="control-label">Observação</label>
                <textarea rows="3" name="txtObservacao" class="form-control" id="txtObservacao" placeholder="Digite a observação" ></textarea>
                 <span class="help-block with-errors">Máximo de duzentos (200) caracteres</span>
              </div>

              <button type="button" class="btn btn-primary btn-cadastrar">Cadastrar</button>
              <button type="button" class="btn btn-warning btn-cancelar">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection
