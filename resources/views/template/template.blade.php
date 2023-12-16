<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/style/global.css">
  <title>Atendimento ao Contribuinte</title>
</head>
<body>
  <header class="container">
    <nav>
      <p>Atendimento Contribuinte</p>
      <div>
        <ul>
          <li>
            <a href="{{url("/")}}">Home</a>
          </li>
          <li>
            <a href="{{url("/pessoa")}}">Pessoa</a>
          </li>
          <li>
            <a href="{{url("/protocolo")}}">Protocolo</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  @yield('content')

  <script src="{{url('/assets/js/javascript.js')}}"></script>
</body>
</html>