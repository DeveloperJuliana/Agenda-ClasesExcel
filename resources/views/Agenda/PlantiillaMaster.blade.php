<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: rgb(243, 243, 242);
            color: rgb(8, 8, 7);
        
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: none;
        }
        .container-img{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container-img ">
        <img src="{!! asset('images/Veterinaria.png') !!}" class="my-5" ><br>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light container-img">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Manchas y Pecas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
            <div class="navbar-nav  ">
              <a class="nav-link" href="{{route('agendar.store')}}">Agendar Citas</a>
              <a class="nav-link" href="{{route('agendar.index')}}">Agenda</a>
            </div>
          </div>
        </div>
      </nav>
    @yield('content')
</body>
</html>