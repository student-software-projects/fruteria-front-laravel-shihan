<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('titulo') | Fruteria</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            padding-top: 10px;
            padding-bottom: 20px;
            font-family: 'Piazzolla'
        }
    </style>
</head>
<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="/">Fruteria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/acercade">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/domicilio">Domicilios</a>
            </li>
        </ul>
    </header>

    <main class="container-fluid" style="margin-top: 20px">
        @yield('contenido')
    </main>
    
    <footer style="text-align: center; margin-top: 20px">
        <span>2020 - Creado por Shihan</span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>