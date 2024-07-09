<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Equipo</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="clear">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('equipo.index')}}">INICIO</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Editar Equipo</h1>
        <form class="w-25" action="{{route('equipo.update', $equipo)}}" method="post">
            @csrf
            @method('put')
            
            <div class="form-floating mb-3">
                <input name="nombre" type="text" class="form-control" id="nombre" value="{{old('nombre', $equipo->nombre)}}">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input name="ciudad" type="text" class="form-control" id="ciudad" value="{{old('ciudad', $equipo->ciudad)}}">
                <label for="ciudad">Ciudad</label>
            </div>
            <div class="form-floating mb-3">
                <input name="codigo" type="text" class="form-control" id="codigo" value="{{old('codigo', $equipo->codigo)}}">
                <label for="codigo">Codigo</label>
            </div>
            <div class="form-floating mb-3">
                <input name="estadio" type="text" class="form-control" id="estadio" value="{{old('estadio', $equipo->estadio)}}">
                <label for="estadio">Estadio</label>
            </div>
            <div class="form-floating mb-3">
                <input name="aforo" type="text" class="form-control" id="aforo" value="{{old('aforo', $equipo->aforo)}}">
                <label for="aforo">Aforo</label>
            </div>
            <div class="form-floating mb-3">
                <input name="año" type="text" class="form-control" id="año" value="{{old('año', $equipo->año)}}">
                <label for="año">Año</label>
            </div>
            <button type="submit" class="btn btn-success w-100">Actualizar</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>