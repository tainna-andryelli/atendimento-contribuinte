@extends('template.template')

@section('content')
<h1>Protocolos Registrados</h1>

<div>
  <a href="{{url("protocolo/create")}}">
    <button>Novo Protocolo</button>
  </a>
</div>

<div>
  @csrf
  <table class="tabela">
    <thead>
      <tr>
        <th>Número</th>
        <th>Data</th>
        <th>Contribuinte</th>
        <th>Ações</th>
      </tr>
    </thead>

    <tbody>
      @foreach($protocolo as $protocolos)
        @php
          $pessoa = $protocolos->relPessoa;
        @endphp
        <tr>
          <th>{{$protocolos->numero}}</th>
          <td>{{$protocolos->data}}</td>
          <td>{{$pessoa->nome}}</td>
          <td>
            <a href="{{url("protocolo/$protocolos->numero")}}">
              <button class="visualizar hover">Visualizar</button>
            </a>
            <a href="{{url("protocolo/$protocolos->numero/edit")}}">
              <button class="editar hover">Editar</button>
            </a>
            <a href="{{url("protocolo/$protocolos->numero")}}" class="js-del">
              <button class="protocolo deletar hover">Deletar</button>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection