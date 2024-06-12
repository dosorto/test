<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Proyecto UNAH</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .carousel-inner img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Menú de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Proyecto UNAH </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('create') }}">Registrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('update') }}">Actualizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('delete') }}">Eliminar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('insert') }}">Insertar</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Contenedor Principal -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center">Bienvenidos al Proyecto de Ingeniería de Software</h1>
            <p class="text-center">Este proyecto es realizado por estudiantes de la UNAH en la clase de Ingeniería de Software.</p>
            
            <!-- Carrusel de Imágenes -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/800x400?text=Programacion+1" class="d-block w-100" alt="Programacion 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Programacion+2" class="d-block w-100" alt="Programacion 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Programacion+3" class="d-block w-100" alt="Programacion 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Enlace al JS de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
