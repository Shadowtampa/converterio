<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="stylesheet" type="text/css" href="aula04\resources\css\bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
</head>

<style>
  body{
  background-color: #c8a2c6;
  };
  .a {
    justify-content: center;
    align-items: center;
    margin-left: 5rem;
  }
  .container { 
    width: 1000px; 
    margin-left: auto;
    margin-right: auto;
    margin-top: 0.125rem;
     
    background-color: white; 
    box-shadow: 0em 0 0.2em black;

    border-radius: 0.5rem;
}

  .navbar {
    box-shadow: 0em 0 0.4em black;
  }

  .footer {
    width: 101%;
    margin: -0% -1%;
    margin-bottom: 10%;
  }
</style>

<body class="antialiased">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Converter.io</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            @if (Request::is('temperature'))
            <a class="nav-link active" href="/temperature">Converter temperaturas
              <span class="visually-hidden">(current)</span>
            </a>
            @else
            <a class="nav-link" href="/temperature">Converter temperaturas
            </a>
            @endif


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Redes Sociais</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" target='_blank' href="#">Github</a>
              <a class="dropdown-item" target='_blank' href="#">Twitter</a>
              <a class="dropdown-item" target='_blank' href="#">Linkedin</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>




  <footer>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand"> v2.2 (Laravel no if edition)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active">Cakesoft, todos os direitos reservados &copy;
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>