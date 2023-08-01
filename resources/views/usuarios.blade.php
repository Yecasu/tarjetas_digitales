<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @if (isset($usuario))
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset($usuario->foto) }}" class="card-img-top" alt="{{ $usuario->nombre }}" width="100" height="100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $usuario->nombre }}</h5>
                        <p class="card-text">Cargo: {{ $usuario->cargo }}</p>
                        <p class="card-text">Cédula: {{ $usuario->cedula }}</p>
                    </div>
                </div>
            </div>
            @else
                <p>{{ $mensaje }}</p>
            @endif
        </div>
    </div>
</body>
</html>




