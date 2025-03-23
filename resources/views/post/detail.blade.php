<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->post_subject }}</title>
</head>
<header>
    @include('common.header')
</header>
<body>
    <div>
        <h2>{{ $post->post_subject }}</h2>
        <h5>Autor: {{ $user->name }}</h5>
        <p>{{ $post->post_content }}</p>
    </div>
    <div>
        <table class="table">
            <tr>
                <th width="20%">Autor</th>
                <th width="70%">Mensaje</th>
                <th width="10%">Fecha</th>
            </tr>
            @foreach($replies as $reply)
                <tr>
                    <td width="20%"  height="100" valign="top">
                        <a href="{!! url('/post/user', [$reply['user_id']]) !!}">
                            {{ $reply['reply_by'] }}
                        </a>
                    </td>
                    <td width="60%"  height="100" valign="top">
                        {{ $reply['reply_content'] }}
                    </td>
                    <td width="10%"  height="100" valign="top">{{ $reply['reply_date'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    @if (auth()->check())
    <div>
        <form method="POST" action="/reply/save">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" id="post_id" name="post_id" value="{{ $post->post_id }}">
            <label for="reply_message">Respuesta: </label>
            <div class="form-group">
                <textarea rows="5" cols="60" class="form-control" id="reply_message" name="reply_message"></textarea>
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Publicar respuesta</button>
            </div>
        </form>
    </div> 
    @endif
</body>
</html>
