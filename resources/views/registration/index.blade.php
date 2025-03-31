<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<header>
    @include('common.header')
</header>
<body>
    <div class="d-flex justify-content-center">
        <form class="rounded mt-3" method="POST" action="/register/save">
            <h2 class="d-flex justify-content-center">Registro de usuario</h2>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nombre de usuario:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group mt-3">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Crear usuario</button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
</body>
</html>