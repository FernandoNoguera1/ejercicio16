<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listar equipo</title>
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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Codigo</th>
            <th scope="col">Estadio</th>
            <th scope="col">Aforo</th>
            <th scope="col">Año</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($equipos as $equipo)

                <tr>
                    <th scope="row">{{ $equipo->id }}</th>
                    
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->ciudad }}</td>
                    <td>{{ $equipo->codigo }}</td>
                    <td>{{ $equipo->estadio }}</td>
                    <td>{{ $equipo->aforo }}</td>
                    <td>{{ $equipo->año }}</td>
                    <td>
                        <button type="button" class="btn btn-info" onclick="location.href='{{route('equipo.show', $equipo->id)}}'">Mostrar</button>
                        <button type="button" class="btn btn-warning" onclick="location.href='{{route('equipo.edit', $equipo->id)}}'">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#equipo{{$equipo->id}}">Borrar</button>
                        <!-- Modal eliminar -->
                        <div class="modal fade" id="equipo{{$equipo->id}}" tabindex="-1" aria-labelledby="equipo{{$equipo->id}}Label" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="equipo{{$equipo->id}}Label">Eliminar Registro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id>
                                    <p>¿Seguro que quieres eliminarlo?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                    <form action="{{route('equipo.destroy', $equipo->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-success w-10" onclick="location.href='{{route('equipo.create')}}'">Crear</button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>