@extends('app')
@section('conteudo')
<div class="row">
<div class="col-6">
<h3>Cadastro de Vulnerabilidades</h3>
	<hr>
<form action="/Vulnerabilidades" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
  <div class="row">
    <div class="col-md-12">
        <label for="validationDefault01">Nome: </label>
      <input type="text" class="form-control" name="nome" id="validationDefault01"  value="" required>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
      <label for="validationDefault02">Fonte da Vulnerabilidade: </label>
      <input type="text" class="form-control" name="fonte" id="validationDefault02"  required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <label for="validationDefault03">Descrição: </label>
      <textarea type="text" class="form-control" name="descricao" rows='6'  required></textarea>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
  <hr>
  <a><button class="btn btn-primary" type="submit">Salvar</a></button>   <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
</form>
</div>
</div>
</div>
<div class="col-6">
	<h3>Vulnerabilidades Cadastradas</h3>
	<hr>
	<br>
	<table class="table table-striped ">
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Nome</th>
				<th class="text-center">Descrição</th>
				<th class="text-center">Editar</th>
				<th class="text-center">Apagar</th>
			</tr>
		</thead>
@foreach ($vulnerabilidades as $v)		
		<tbody>
			<tr>
				<td class="text-center">{{ $v->id}}</td>
				<td class="text-center">{{ $v->nome }}</td>
				<td class="text-center"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $v->id }}" data-whatever="@mdo"><i class="fa fa-search-plus" aria-hidden="true"></i>
Visualizar</button></td>		
					<div class="modal fade" id="Modal{{ $v->id }}"  role="dialog" >
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Vulnerabilidade: {{ $v->nome }}</h5>
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          							<span aria-hidden="true">×</span>
        						</button>
      							</div>
								<div class="modal-body">
									<p><strong>ID: </strong>{{ $v->id }}</p>
									<p><strong>Nome: </strong> {{ $v->nome }}</p>
									<p><strong>Fonte: </strong> {{ $v->fonte }}</p>
									<p><strong>Descrição:</strong> {{ $v->descricao }}</p>
								</div>
						  </div>
						</div>
					</div>
				</div>
				<td class="text-center"><a href="/Vulnerabilidades{{ $v->id }}"><button class="btn btn-success" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>
 Editar</button></a></td>
				<td class="text-center"><a href="/Vulnerabilidades/{{ $v->id }}" ><button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i>
Apagar</button></a></td>
			</tr>
		</tbody>
	@endforeach

	</table>
    </div>
	@endsection