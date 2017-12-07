@extends('app')
@section('conteudo')
	<h3>Empresas Cadastradas</h3>
	<hr>
	<br>
	<table class="table table-striped ">
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">Nome da Empresa</th>
				<th class="text-center">Razão social</th>
				<th class="text-center">Cidade</th>
				<th class="text-center">Estado</th>
			</tr>
		</thead>
		@foreach ($clientes as $c)
		<tbody>
			<tr></button>
				<td class="text-center">{{ $c->id }}</td>
				<td class="text-center">{{ $c->nome_empresa }}</td>
				<td class="text-center">{{ $c->razao_social }}</td>
				<td class="text-center">{{ $c->cidade }}</td>
				<td class="text-center">{{ $c->estado }}</td>
				<td class="text-center"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{ $c->id }}" data-whatever="@mdo"><i class="fa fa-search-plus" aria-hidden="true"></i>
 Visualizar</button></td>		
					<div class="modal fade" id="Modal{{ $c->id }}"  role="dialog" >
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Dados da Empresa: {{ $c->nome_empresa }}</h5>
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          							<span aria-hidden="true">×</span>
        						</button>
      							</div>
								<div class="modal-body">
									<p><strong>ID: </strong>{{ $c->id }}</p>
									<p><strong>Nome da Empresa:</strong> {{ $c->nome_empresa }}</p>
									<p><strong>Razão Social:</strong> {{ $c->razao_social }}</p>
									<p><strong>Cidade:</strong> {{ $c->cidade }}</p>
									<p><strong>Estado:</strong> {{ $c->estado }}</p>
									<p><strong>CEP:</strong> {{ $c->cep }}</p>
									<p><strong>Insc Estadual:</strong> {{ $c->insc_municipal }}</p>
									<p><strong>Insc Municipal:</strong> {{ $c->insc_estadual }}</p>
									<p><strong>CNPJ:</strong>{{ $c->cnpj }}</p>									
									<p><strong>Nome do Responsavel: </strong>{{ $c->nome_responsavel }}</p>									
									<p><strong>Telefone: </strong>{{ $c->telefone }}</p>
									<p><strong>Email: </strong>{{ $c->email_respon }}</p>
								</div>
						  </div>
						</div>
					   </div>
					</div>
				<td class="text-center"><a href="/Clientes/Atualizar/{{ $c->id }}"><button class="btn btn-success" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button></a></td>
				<td class="text-center"><a href="/Clientes/Deletar/{{ $c->id }}" ><button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i>
 Apagar</button></a></td>
			</tr>
		@endforeach
		</tbody>
	</table>
<script>
$(document).ready(function(){
    $("#123").click(function(){
        $("#modal1").modal();
    });
});
</script>

	@endsection