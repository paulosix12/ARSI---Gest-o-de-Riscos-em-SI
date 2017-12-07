@extends('app')
@section('conteudo')


	<h3>Informações da organização</h3>
	<hr>
<form action="/Clientes/Adicionar/Novo" method="POST">
  <div class="row">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nome Empresa</label>
      <input type="text" id="nome_empresa" name="nome_empresa" class="form-control" id="validationDefault01"  required="">
    </div>
  
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Razão Social</label>
      <input type="text" id="razao_social" name="razao_social" class="form-control" id="validationDefault02"  required="">
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Cidade</label>
      <input type="text" id="cidade" name="cidade" class="form-control" id="validationDefault03" required="">
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Estado</label>
      <input type="text" id="estado" name="estado" class="form-control" id="validationDefault04" required="">
      
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">CEP</label>
      <input type="text" id="cep" name="cep" class="form-control" id="validationDefault05" required="">
    </div>

     <div class="col-md-3 mb-3">
      <label for="validationDefault04">Insc. Municipal</label>
      <input type="text" id="insc_municipal" name="insc_municipal" class="form-control" id="validationDefault04" require="">
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Insc Estadual</label>
      <input type="text" id="insc_estadual" name="insc_estadual" class="form-control" require="">
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault02">CNPJ</label>
      <input type="text" id="cnpj" name="cnpj" class="form-control" id="validationDefault02" required="">
    </div>
  </div>
	<br>  
  <h3>Contato Responsavel</h3>
  <hr>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Nome</label>
      <input type="text" id="nome_responsavel" name="nome_responsavel" class="form-control" id="validationDefault03" required="">
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Telefone</label>
      <input type="text" id="telefone" name="telefone" class="form-control" id="validationDefault04" required="">
      
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Email</label>
      <input type="text" id="email_respon" name="email_respon" class="form-control" id="validationDefault05" required="">
    </div>
  </div>
  <hr>
  <a><button class="btn btn-primary" type="submit">Salvar</a></button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
</form>

@endsection