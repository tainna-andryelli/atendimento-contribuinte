@extends('template.template')

@section('content')
  <h1>Visualizar Protocolo</h1>

  <div class="visualizar__protocolo">
    <p><strong>Número:</strong> {{$protocolo->numero}}</p>
    <p><strong>Descrição:</strong> {{$protocolo->descricao}}</p>
    <p><strong>Data: </strong>{{$protocolo->data}}</p>
    <p><strong>Prazo (dias):</strong> {{$protocolo->prazo}}</p>
    <p><strong>Contribuinte:</strong><p> 
    <div class="contribuite__div">
      @php
      $pessoa = $protocolo->relPessoa;
      echo '<strong>'.'Nome: '.'</strong>'.$pessoa->nome;
      echo '<br>';
      $dados = ['Cidade: ', 'Bairro: ', 'Rua: ', 'Complemento: '];
      $dadosBanco = ['cidade', 'bairro', 'rua', 'complemento'];
      
      foreach ($dados as $indice => $dadoAtual) {
        echo '<strong>'. $dadoAtual . '</strong>';
      
        if ($pessoa->{$dadosBanco[$indice]} === null) {
          echo 'Sem informação.';
        } else {
          echo $pessoa->{$dadosBanco[$indice]};
        }
      
          echo '<br>'; 
        }
      @endphp
    </div>

    <a href="{{url("protocolo")}}">
      <button class="hover">Voltar</button>
    </a>
  </div>
@endsection