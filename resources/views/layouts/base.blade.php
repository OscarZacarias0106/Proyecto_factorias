<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>EDUCTETH</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-p-3 mb-2 bg-dark text-white">
    <a class="navbar-brand" href="#">
        <img src="https://w7.pngwing.com/pngs/144/829/png-transparent-sainik-school-kapurthala-technology-education-test-technology-electronics-text-logo-thumbnail.png" width="60" height="40" alt="">
    </a>
    <a class="navbar-brand" >EDUCTETH</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only"></span></a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>


            <ul class="navbar-nav">
                <li class="nav-link">
                    <a class="btn btn-outline-p-3 mb-2 bg-success text-white" href="#">Inicio</a>
                </li>
                <li class="nav-link">
                    <a class="btn btn-outline-p-3 mb-2 bg-success text-white" href="#">Modificar</a>
                </li>
                <li class="nav-link">
                    <a class="btn btn-outline-p-3 mb-2 bg-success text-white" href="#">Eliminar</a>
                </li>
            </ul>
        </ul>

    </div>

</nav>
<div class="container"> @yield('content')</div>

</body>

</html>
