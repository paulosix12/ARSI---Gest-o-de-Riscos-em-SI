@extends('app')
@section('conteudo')
<div class="row">
<div class="col-6">
<h3>Cadastro de Impactos</h3>
	<hr>
<form action="/Impacto" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
  <div class="row">
    <div class="col-md-12">
        <label for="validationDefault01">Nome do Impacto: </label>
      <input type="text" class="form-control" name="nome" id="validationDefault01"  value="" required>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
      <label for="validationDefault02">Tipo: </label>
      <input type="text" class="form-control" name="tipo" id="validationDefault02"  value="" required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <label for="validationDefault03">Descrição: </label>
      <textarea type="text" class="form-control" name="descricao" rows='6' required></textarea>
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
	<h3>Impactos Cadastrados</h3>
	<hr>
	<br>
	<table class="table table-striped ">
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Nome</th>
				<th class="text-center">Visualizar</th>
				<th class="text-center">Editar</th>
				<th class="text-center">Apagar</th>
			</tr>
		</thead>
@foreach ($impacto as $i)
		<tbody>
			<tr>
				<td class="text-center">{{ $i->id }}</td>
				<td class="text-center">{{ $i->nome}}</td>
				<td class="text-center"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $i->id }}" data-whatever="@mdo" ><i class="fa fa-search-plus" aria-hidden="true"></i> Visualizar</button></td>		
					<div class="modal fade" id="Modal{{ $i->id }}"  role="dialog" >
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Impacto: {{ $i->nome }}</h5>
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          							<span aria-hidden="true">×</span>
        						</button>
      							</div>
								<div class="modal-body">
									<p><strong>ID: </strong>{{ $i->id }}</p>
									<p><strong>Nome: </strong> {{ $i->nome }}</p>
									<p><strong>Tipo do Impacto: </strong> {{ $i->tipo }}</p>
									<p><strong>Descrição do Impacto: </strong> {{ $i->descricao }}</p>
								</div>
						  </div>
						</div>
					   </div>
					</div>
				<td class="text-center"><a href="/Impacto/{{ $i->id }}"><button class="btn btn-success" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>
 Editar</button></a></td>
				<td class="text-center"><a href="/Impacto/{{ $i->id }}" ><button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i>
 Apagar</button></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
    </div>
	@endsection