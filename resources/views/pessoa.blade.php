@extends('template.template')

@section('content')
<h1>Pessoas Cadastradas</h1>

<div class="cabecalho__tabela">
  <a class="hover" href="{{url("pessoa/create")}}">
    <button>Novo Cadastro</button>
  </a>
  <form action="{{url("/pessoa")}}">
      <input class="pesquisa" type="text" name="pesquisa" placeholder="Digite aqui" value="{{$pesquisa}}">
      <button class="hover" type="submit">Pesquisar</button>
  </form>
</div>

<div>
  @csrf
  <table class="tabela">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>CPF</th>
        <th>Sexo</th>
        <th>Ação</th>
      </tr>
    </thead>

    <tbody>
      @foreach($pessoa as $pessoas)
        <tr>
          <td>{{$pessoas->id}}</td>
          <td>{{$pessoas->nome}}</td>
          <?php
            $data = $pessoas->data_nasc;
            $data_formatada = substr($data, 8, 2) . '/' . substr($data, 5, 2) . '/' . substr($data, 0, 4);
          ?>
          <td>{{$data_formatada}}</td>
          <?php
            $cpf = $pessoas->cpf;
            $cpf_formatado = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
          ?>
          <td>{{$cpf_formatado}}</td>
          <td>{{$pessoas->sexo}}</td>
          <td class="tabela__acoes">
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
  {{$pessoa->links()}}
</div>
@endsection