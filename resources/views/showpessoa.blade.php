@extends('template.template')

@section('content')
  <h1>Visualizar</h1>

  <div>
    Nome: {{$pessoa->nome}}<br>
    Data de Nascimento: {{$pessoa->data_nasc}}<br>
    CPF: {{$pessoa->cpf}}<br>
    Sexo: {{$pessoa->sexo}}<br>
    
    @php
    $dados = ['Cidade: ', 'Bairro: ', 'Rua: ', 'Complemento: '];
    $dadosBanco = ['cidade', 'bairro', 'rua', 'complemento'];

    foreach ($dados as $indice => $dadoAtual) {
        echo $dadoAtual;

        if ($pessoa->{$dadosBanco[$indice]} === null) {
            echo 'Sem informação.';
        } else {
            echo $pessoa->{$dadosBanco[$indice]};
        }

        echo '<br>'; 
    }
    @endphp
  </div>

@endsection