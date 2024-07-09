<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar Jugador</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('jugador.index')}}">INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Mostrar Jugador</h1>
        <form id="formulario" name="formulario" class="w-25" action="{{route('jugador.store')}}" method="POST">
            @csrf
           
            <div class="form-floating mb-3">
                <input name="nombre" value="{{$jugador->nombre}}" type="text" class="form-control" id="nombre" placeholder="Nombre">
                <label for="nombre">nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input name="posicion" value="{{$jugador->posicion}}" type="text" class="form-control" id="fecha" placeholder="Posicion">
                <label for="posicion">posicion</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha_nacimiento" type="date" value="{{$jugador->fecha_nacimiento}}" class="form-control" id="otros_datos" placeholder="Fecha nacimiento">
                <label for="fecha_nacimiento">fecha nacimiento</label>
            </div>
            <div class="form-floating mb-3">
                <input name="codigo" type="text" value="{{$jugador->codigo}}" class="form-control" id="codigo" placeholder="Codigo">
                <label for="codigo">codigo</label>
            </div>

         
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>