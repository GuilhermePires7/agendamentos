<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">

    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Fonte do Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/logo.png" alt="Schedules">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Agenda</a>
              </li>
              <li class="nav-item">
                <a href="/schedules/create" class="nav-link">Agendar um horário</a>
              </li>
              {{--{@auth--}}
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">Meus horários</a>
              </li>
              {{--<li class="nav-item">
                <form action="/logout" method="POST">
                    {@csrf--
                    <a href="/logout" class="nav-link" onclick="event.preventDefault();
                    this.closest('form').submit();">Sair</a>
                </form>
              </li>--}}
              {{--{@endauth--}}

              {{--{@guest--}}

              {{--<li class="nav-item">
                <a href="/login" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">Cadastrar</a>
              </li>--}}
              {{--{@endguest--}}
            </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg"> {{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
      </main>
    <footer>
        <p>Pires&copy;</p>
    </footer>
    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script>
    <script nomodule src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>
</body>

</html>
