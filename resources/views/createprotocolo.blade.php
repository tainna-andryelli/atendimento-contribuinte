@extends('template.template')

@section('content')
  <h1>@if(isset($protocolo)) Editar Protocolo @else Novo Protocolo @endif</h1>

  <div>
    @if(isset($errors) && count($errors)>0)
      <div>
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>
    @endif 

    @if(isset($protocolo))
      <form class="formulario" name="formEdit" id="formEditProt" method="post" action="{{url("protocolo/$protocolo->numero")}}">
      @method('PUT')
    @else
      <form class="formulario" name="formProt" id="formProt" method="post" action="{{url('/protocolo')}}">
    @endif
    
      @csrf
      <div class="formulario__div">
        <label>Descrição:*</label>
        <input type="text" name="descricao" id="descricao" value="{{$protocolo->descricao ?? ''}}" required>
      </div>

      <div class="formulario__div">
        <label>Data do Protocolo:*</label>
        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="data" id="data" value="{{$protocolo->data ?? ''}}" required>
      </div>

      <div class="formulario__div">
        <label>Prazo (dias):*</label>
        <input type="number" name="prazo" id="prazo" value="{{$protocolo->prazo ?? ''}}" required>
      </div>

      <div class="formulario__div">
        <label>Contribuinte:*</label>
        <select class="input__options" name="contribuinte" id="contribuinte" required>
          <option value="{{$protocolo->relPessoa->nome ?? ''}}">Selecione</option>
          @foreach($pessoas as $pessoa)
            <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
          @endforeach
        </select>
      </div>

      <p>* campos obrigatórios!</p>
      <input class="botao__cadastrar hover" type="submit" value="@if(isset($protocolo)) Editar @else Cadastrar @endif">
    </form>
  </div> 
@endsection