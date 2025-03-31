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
    <div class="container">
        <div class="justify-content-center">
            <form class="rounded mt-3" method="POST" action="/post/save">
                <h2 class="d-flex justify-content-center">Crear publicación</h2>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="post_subject">Tema de la publicación:</label>
                    <input type="text" class="form-control" id="post_subject" name="post_subject">
                </div>
                
                <div class="form-group">
                    <label for="post_message">Contenido de la publicación:</label>
                    <input class="form-control" id="post_message" name="post_message">
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
        </div>
    </div>
    
</body>
</html>