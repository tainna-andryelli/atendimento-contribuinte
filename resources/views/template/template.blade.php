<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/global.css">
    <link rel="stylesheet" href="/assets/style/cabecalho.css">
    <link rel="stylesheet" href="/assets/style/tabela.css">
    <link rel="stylesheet" href="/assets/style/cadastro.css">
    <link rel="stylesheet" href="/assets/style/visualizar.css">
    <link rel="stylesheet" href="/assets/style/rodape.css">
    <link rel="stylesheet" href="/assets/style/paginacao.css">
    <title>Atendimento ao Contribuinte</title>
  </head>
  <body>
    <header>
      <nav class="cabecalho container">
        <p class="cabecalho_titulo">Atendimento ao <br> Contribuinte</p>
        <div>
          <ul class="cabecalho__links">
            <li>
              <a class="hover" href="{{url("/")}}">Home</a>
            </li>
            <li>
              <a class="hover" href="{{url("/pessoa")}}">Pessoa</a>
            </li>
            <li>
              <a class="hover" href="{{url("/protocolo")}}">Protocolo</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="conteudo container">
      @yield('content')
    </main>

    <footer>
      <div class="rodape container">
        <p>Desenvolvido por Tainná Andryelli Ribeiro.</p>
        <div class="contatos">
          <a class="hover" href="https://linkedin.com/in/tainna">LinkedIn</a>
          <a class="hover" href="https://instagram.com/tainna_andryelli">Instagram</a>
          <a class="hover" href="https://github.com/tainna-andryelli">GitHub</a>
        </div>
      </div>
    </footer>

    <script src="{{url('/assets/js/javascript.js')}}"></script>
  </body>
</html>