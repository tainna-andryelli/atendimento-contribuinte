@extends('template.template')

@section('content')
  <h1>Visualizar</h1>

  <div>
    Número: {{$protocolo->numero}} <br>
    Descrição: {{$protocolo->descricao}} <br>
    Data: {{$protocolo->data}} <br>
    Prazo (dias): {{$protocolo->prazo}} <br>
    Contribuinte: <br>
    @php
    $pessoa = $protocolo->relPessoa;
    echo 'Nome: '.$pessoa->nome;
    echo '<br>';
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