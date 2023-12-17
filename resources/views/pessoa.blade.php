@extends('template.template')

@section('content')
<h1>Pessoas Cadastradas</h1>

<div>
  <a class="hover" href="{{url("pessoa/create")}}">
    <button>Novo Cadastro</button>
  </a>
</div>

<div>
  @csrf
  <table class="tabela">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data Nascimento</th>
        <th>CPF</th>
        <th>Sexo</th>
        <th>Ação</th>
      </tr>
    </thead>

    <tbody>
      @foreach($pessoa as $pessoas)
        <tr>
          <th>{{$pessoas->id}}</th>
          <td>{{$pessoas->nome}}</td>
          <td>{{$pessoas->data_nasc}}</td>
          <td>{{$pessoas->cpf}}</td>
          <td>{{$pessoas->sexo}}</td>
          <td>
            <a href="{{url("pessoa/$pessoas->id")}}">
              <button class="visualizar hover">Visualizar</button>
            </a>
            <a href="{{url("pessoa/$pessoas->id/edit")}}">
              <button class="editar hover">Editar</button>
            </a>
            <a href="{{url("pessoa/$pessoas->id")}}" class="js-del">
              <button class="deletar hover">Deletar</button>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection