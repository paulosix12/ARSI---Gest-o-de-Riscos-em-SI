@extends('app')
@section('conteudo')


	<h3>Atualizar a organização {{ $c->nome_empresa }}</h3>
	<hr>
<form action="/Clientes/Atualizar/{{$c->id}}" method="POST">
  <div class="row">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nome Empresa</label>
      <input type="text" id="nome_empresa" value="{{ $c->nome_empresa }}" name="nome_empresa" class="form-control" id="validationDefault01" placeholder="Nome da Empresa" value="" required>
    </div>
  
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Razão Social</label>
      <input type="text" id="razao_social" value="{{ $c->razao_social }}" name="razao_social" class="form-control" id="validationDefault02" placeholder="razao" value="" required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Cidade</label>
      <input type="text" id="cidade" name="cidade" value="{{ $c->cidade }}" class="form-control" id="validationDefault03" placeholder="Cidade" required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Estado</label>
      <input type="text" id="estado" name="estado" class="form-control" value="{{ $c->estado }}" id="validationDefault04" placeholder="Estado" required>
      
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">CEP</label>
      <input type="text" id="cep" name="cep" value="{{ $c->cep }}" class="form-control" id="validationDefault05" placeholder="CEP" required>
    </div>

     <div class="col-md-3 mb-3">
      <label for="validationDefault04">Insc. Municipal</label>
      <input type="text" id="insc_municipal" name="insc_municipal" value="{{ $c->insc_municipal }}" class="form-control" id="validationDefault04" placeholder="Inscrição Municipal" required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Insc Estadual</label>
      <input type="text" id="insc_estadual" name="insc_estadual" value="{{ $c->insc_estadual }}" class="form-control" id="validationDefault05" placeholder="Inscrição Estadual" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault02">CNPJ</label>
      <input type="text" id="cnpj" name="cnpj" class="form-control" value="{{ $c->cnpj }}" id="validationDefault02" placeholder="cnpj" value="" required>
    </div>
  </div>
	<br>  
  <h3>Contato Responsavel</h3>
  <hr>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Nome</label>
      <input type="text" id="nome_responsavel" value="{{$c->nome_responsavel}}" name="nome_responsavel" class="form-control" id="validationDefault03" placeholder="Nome" required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Telefone</label>
      <input type="text" id="telefone" name="telefone" class="form-control" value="{{$c->telefone}}" id="validationDefault04" placeholder="Telefone" required>
      
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Email</label>
      <input type="text" id="email_respon" value="{{$c->email_respon}}" name="email_respon" class="form-control" id="validationDefault05" placeholder="Email" required>
    </div>
  </div>
  <hr>
  <button class="btn btn-success" type="submit" >Salvar</button>   <button class="btn btn-danger" type="submit">Cancelar</button>
</form>

@endsection