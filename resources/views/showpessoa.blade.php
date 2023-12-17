@extends('template.template')

@section('content')
  <h1>Visualizar Pessoa</h1>

  <div class="pagina__visualizar">
    <p><strong>Nome: </strong>{{$pessoa->nome}}</p>
    <p><strong>Data de Nascimento: </strong>{{$pessoa->data_nasc}}</p>
    <p><strong>CPF: </strong>{{$pessoa->cpf}}</p>
    <p><strong>Sexo: </strong>{{$pessoa->sexo}}</p>
    
    @php
    $dados = ['Cidade: ', 'Bairro: ', 'Rua: ', 'Complemento: '];
    $dadosBanco = ['cidade', 'bairro', 'rua', 'complemento'];

    foreach ($dados as $indice => $dadoAtual) {
        echo '<strong>' . $dadoAtual . '</strong>';

        if ($pessoa->{$dadosBanco[$indice]} === null) {
            echo 'Sem informação.';
        } else {
            echo $pessoa->{$dadosBanco[$indice]};
        }

        echo '<br>'; 
    }
    @endphp
    <a href="{{url("pessoa")}}">
      <button class="hover">Voltar</button>
    </a>
  </div>
@endsection