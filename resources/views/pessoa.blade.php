@extends('template.template')

@section('content')
<h1>Pessoas Cadastradas</h1>

<div>
  <a href="{{url("pessoa/create")}}">
    <button>Novo Cadastro</button>
  </a>
</div>

<div>
  @csrf
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data_Nasc</th>
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
              <button>Visualizar</button>
            </a>
            <a href="{{url("pessoa/$pessoas->id/edit")}}">
              <button>Editar</button>
            </a>
            <a href="{{url("pessoa/$pessoas->id")}}" class="js-del">
              <button class="pessoa">Deletar</button>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection