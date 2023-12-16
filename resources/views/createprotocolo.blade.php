@extends('template.template')

@section('content')
  <h1>Criar Novo Protocolo</h1>

  <div>
    @if(isset($errors) && count($errors)>0)
      <div>
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>
    @endif 

    @if(isset($protocolo))
      <form name="formEdit" id="formEditProt" method="post" action="{{url("protocolo/$protocolo->numero")}}">
      @method('PUT')
    @else
      <form name="formProt" id="formProt" method="post" action="{{url('/protocolo')}}">
    @endif
    
      @csrf
      <input class="" type="text" name="descricao" id="descricao" placeholder="Descrição:" value="{{$protocolo->descricao ?? ''}}" required>
      <input class="" type="date" name="data" id="data" placeholder="Data:" value="{{$protocolo->data ?? ''}}" required>
      <input class="" type="number" name="prazo" id="prazo" placeholder="Prazo (dias):" value="{{$protocolo->prazo ?? ''}}" required>

      <select name="contribuinte" id="contribuinte" required>
        <option value="{{$protocolo->relPessoa->nome ?? ''}}">Contribuinte</option>
        @foreach($pessoas as $pessoa)
          <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
        @endforeach
      </select>

      <input class="" type="submit" value="@if(isset($protocolo)) Editar @else Cadastrar @endif">
    </form>
  </div> 
@endsection