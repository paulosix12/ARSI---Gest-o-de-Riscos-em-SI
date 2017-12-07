@extends('app')
@section('conteudo')

<h3>Ativo</h3>
<hr>
<br>
<form action="/Ativos/Adicionar/Novo" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
<div class="col-md-12 mb-3">
      <label for="validationDefault01">Defina qual a Organização o Ativo petence</label>
      <select type="text" name="clientes1"  class="form-control"   >
      @foreach ($clientes as $c)
        <option  name="Clientes" value="clientes1">{{ $c->id }} - {{ $c->nome_empresa }} - {{ $c->cnpj}}</option>
      @endforeach
      </select>
</div>
<div class="row">
<div class="col-md-9 mb-3">
      <label for="validationDefault03">Nome do Ativo</label>
      <input type="text" name="nome" id="nome" class="form-control"  required>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Custo para Organização</label>
      <input type="text" name="custo" class="form-control" id="validationDefault04"  required>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault05">Localização</label>
      <input type="text" name="locallizacao" class="form-control" id="validationDefault05"  required>
    </div>
  
  <div class="col-md-6 mb-3">
      <label for="validationDefault05">Importancia</label>
      <input type="text" name="importancia" class="form-control" id="validationDefault05"  required>
    </div>
  </div>

</br>
<h3>Metricas de Segurança</h3>
<div class="row">
<div class="col-6"> 
        <div class="col-md-3 mb-3">
            <label>Probabilidade de 1 a 5:</label>
            <input type="text" name="probabilidade" class="form-control" id="num1" onblur="calcular();"></input>
        </div>

        <div class="col-md-3 mb-3">
            <label>Impacto de 1 a 5:</label>
            <input type="text" name="impacto" class="form-control" id="num2" onblur="calcular();"></input>
        </div>
        <span id="resultado"></span>
</div>
</br>
<div class="col-6">
<h3 style="text-align:center;">Risco = Probabilidade x Impacto</h3>

<table class="table table-bordered">
  <tr>
    <td class=" text-center" rowspan="7"><br><br><br><br><br><br><br>Probabilidade<br></td>
    <td>1</td>
    <td class="bg-warning text-center">5</td>
    <td class="bg-success text-center">4</td>
    <td class="bg-success text-center">3</td>
    <td class="bg-success text-center">2</td>
    <td class="bg-success text-center">1</td>
  </tr>
  <tr>
    <td>2</td>
    <td class="bg-danger  text-center">10</td>
    <td class="bg-warning text-center">8</td>
    <td class="bg-warning text-center">6</td>
    <td class="bg-success text-center">4</td>
    <td class="bg-success text-center">2</td>
  </tr>
  <tr>
    <td>3</td>
    <td class="bg-danger  text-center">15</td>
    <td class="bg-danger  text-center">12</td>
    <td class="bg-warning text-center">9</td>
    <td class="bg-success text-center">6</td>
    <td class="bg-success text-center">3</td>
  </tr>
  <tr>
    <td>4</td>
    <td class="bg-danger  text-center">20</td>
    <td class="bg-danger  text-center">16</td>
    <td class="bg-danger  text-center">12</td>
    <td class="bg-warning text-center">8</td>
    <td class="bg-success text-center">4</td>
  </tr>
  <tr>
    <td class="text-center tg-6qw1">5</td>
    <td class="text-center bg-danger">25</td>
    <td class="text-center bg-danger">20</td>
    <td class="text-center bg-danger">15</td>
    <td class="text-center bg-danger">10</td>
    <td class="text-center bg-warning">5</td>
  </tr>
  <tr>
    <td class="tg-6qw1"></td>
    <td class="tg-6qw1">5</td>
    <td class="tg-6qw1">4</td>
    <td class="tg-6qw1">3</td>
    <td class="tg-6qw1">2</td>
    <td class="tg-6qw1">1</td>
  </tr>
  <tr>
    <td class="tg-6qw1  text-center"  colspan="6">Impacto</td>
  </tr>
</table>
</div>
</div>

<hr>
<div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Vulnerabilidades:</label>
      <select type="text"  class="form-control" >
        @foreach ($vulnerabilidades as $v)
        <option value="vulnerabilidades">{{ $v->id }} - {{ $v->nome }} - {{ $v->tipo}} - {{ $v->descricao}}</option>
        @endforeach
      </select>
    </div>
  
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Impacto:</label>
      <select type="text"  class="form-control" >
        @foreach ($impacto as $i)
        <option value="impacto">{{ $i->id }} - {{ $i->nome }} - {{ $i->tipo}} - {{ $i->descricao}}</option>
        @endforeach
      </select>
    </div>
</div>
  
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Ameaças:</label>
      <select type="text"  class="form-control" >
        @foreach ($ameacas as $a)
        <option value="ameacas">{{ $a->id }} - {{ $a->nome }} - {{ $a->tipo}} - {{ $a->descricao}}</option>
        @endforeach
      </select>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationDefault04">Controles:</label>
      <select type="text" class="form-control"  >
        @foreach ($controles as $c)
        <option value="controles">{{ $c->id }} - {{ $c->nome }} - {{ $c->tipo}} - {{ $c->descricao}}</option>
        @endforeach
      </select>
    </div>
</div>    
  <a><button class="btn btn-primary" type="submit">Salvar</a></button>  <a href="/"><button class="btn btn-default" type="submit">Cancelar</a></button>
  </br>
  </br>
  </br>

</form>

<script>
function calcular() {
    var num1 = Number(document.getElementById("num1").value);
    var num2 = Number(document.getElementById("num2").value);
    var elemResult = document.getElementById("resultado");

    if (elemResult.textContent === undefined) {
       elemResult.textContent = "O Risco é " + String(num1 * num2) + ".";
    }
    else { // IE
       elemResult.innerText = "O Risco é  " + String(num1 * num2) + ".";
    }
}


</script>

@endsection