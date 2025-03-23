<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear publicación</title>
</head>
<header>
    @include('common.header')
</header>
<body>
    <h2>Crear publicación</h2>
    <form method="POST" action="/post/save">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="post_subject">Tema de la publicación:</label>
            <input type="text" class="form-control" id="post_subject" name="post_subject">
        </div>
        
        <div class="form-group">
            <label for="post_message">Contenido de la publicación:</label>
            <input type="text" class="form-control" id="post_message" name="post_message">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Publicar</button>
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
</body>
</html>