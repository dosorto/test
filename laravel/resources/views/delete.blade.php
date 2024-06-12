<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Persona</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


<!-- Menú de Navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Proyecto UNAH</a>
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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h2 class="form-title text-center">Eliminar Persona</h2>
                <form action="procesar_eliminacion.php" method="POST">
                    <div class="form-group">
                        <label for="id_persona">ID de la Persona:</label>
                        <input type="text" id="id_persona" name="id_persona" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
                </form>
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
