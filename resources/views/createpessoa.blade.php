@extends('template.template')

@section('content')
  <h1>Cadastrar Pessoa</h1>

  <div>
    @if(isset($errors) && count($errors)>0)
      <div>
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>
    @endif 

    @if(isset($pessoa))
      <form name="formEdit" id="formEditPes" method="post" action="{{url("pessoa/$pessoa->id")}}">
        @method('PUT')
    @else
      <form name="formCad" id="formCadPes" method="post" action="{{url('pessoa')}}">
    @endif

      @csrf
      <input class="" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$pessoa->nome ?? ''}}" required>

      <input class="" type="date" name="data_nasc" id="data_nasc" placeholder="Data de Nascimento:" value="{{$pessoa->data_nasc ?? ''}}" required>

      <input class="" type="number" name="cpf" id="cpf" placeholder="CPF:" value="{{$pessoa->cpf ?? ''}}" required>

      <select name="sexo" id="sexo">
        <option value="">Sexo</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="transgênero">Transgênero</option>
        <option value="gênero neutro">Gênero Neutro</option>
        <option value="não-binário">Não-Binário</option>
        <option value="outro">Outro</option>
      </select>

      <input class="" type="text" name="cidade" id="cidade" placeholder="Cidade:" value="{{$pessoa->cidade ?? ''}}" >
      <input class="" type="text" name="bairro" id="bairro" placeholder="Bairro:" value="{{$pessoa->bairro ?? ''}}" >
      <input class="" type="text" name="rua" id="rua" placeholder="Rua:" value="{{$pessoa->rua ?? ''}}" >
      <input class="" type="text" name="complemento" id="complemento" placeholder="Complemento:" value="{{$pessoa->complemento ?? ''}}" >
      <input class="" type="submit" value="@if(isset($pessoa)) Editar @else Cadastrar @endif">
    </form>
  </div> 
@endsection