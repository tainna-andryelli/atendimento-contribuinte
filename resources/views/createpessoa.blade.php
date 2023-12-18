@extends('template.template')

@section('content')
  <h1>@if(isset($pessoa)) Editar Pessoa @else Cadastrar Pessoa @endif</h1>

  <div>
    @if(isset($errors) && count($errors)>0)
      <div>
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>
    @endif 

    @if(isset($pessoa))
      <form class="formulario" name="formEdit" id="formPes" method="post" action="{{url("pessoa/$pessoa->id")}}">
        @method('PUT')
    @else
      <form class="formulario" name="formCad" id="formPes" method="post" action="{{url('pessoa')}}">
    @endif

      @csrf
      <div class="formulario__div">
        <label>Nome:*</label>
        <input type="text" name="nome" id="nome" value="{{$pessoa->nome ?? ''}}" required>
      </div>
    
      <div class="formulario__div">
        <label>Data de Nascimento:*</label>
        <input type="date" name="data_nasc" id="data_nasc" value="{{$pessoa->data_nasc ?? ''}}" required>
      </div>
      
      <div class="formulario__div">
        <label>CPF: (somente números)*</label>
        <input type="text" name="cpf" id="cpf" value="{{$pessoa->cpf ?? ''}}" oninput="javascript: retirarFormatacao(this);" onblur="javascript: formatarCpf(this);" required>
      </div>

      <script>
        console.log()
      </script>

      <div class="formulario__div">
        <label>Sexo:*</label>
        <select class="input__options" name="sexo" id="sexo" required>
          <option value="{{$pessoa->sexo ?? ''}}">{{$pessoa->sexo ?? 'Selecione'}}</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
          <option value="Transgênero">Transgênero</option>
          <option value="Gênero neutro">Gênero Neutro</option>
          <option value="Não-binário">Não-Binário</option>
          <option value="Outro">Outro</option>
        </select>
      </div>

      <div class="formulario__div">
        <label>Cidade:</label>
        <input type="text" name="cidade" id="cidade" value="{{$pessoa->cidade ?? ''}}" >
      </div>

      <div class="formulario__div">
        <label>Bairro:</label>
        <input type="text" name="bairro" id="bairro" value="{{$pessoa->bairro ?? ''}}" >
      </div>

      <div class="formulario__div">
        <label>Rua:</label>
        <input type="text" name="rua" id="rua" value="{{$pessoa->rua ?? ''}}" >
      </div>  

      <div class="formulario__div">
        <label>Complemento:</label>
        <input type="text" name="complemento" id="complemento" value="{{$pessoa->complemento ?? ''}}" >
      </div>
      
      <p>* campos obrigatórios!</p>
      <input class="botao__cadastrar hover" type="submit" value="@if(isset($pessoa)) Editar @else Cadastrar @endif">
    </form>
  </div> 
@endsection