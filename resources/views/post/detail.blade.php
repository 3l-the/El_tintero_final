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
    <div class="container flex-wrap mt-3">
        <div class="card mb-2 rounded">
            <a class="subject_detail">{{ $post->post_subject }}</a>
            <a class="user_detail" href="{!! url('/post/user', [$user['id']]) !!}">{{ $user->name }}</a>
            <p>{{ $post->post_content }}</p>
        </div>
    </div>
    @if (auth()->check())
    <div class="container flex-wrap mt-3">
        <form class="rounded mt-3" method="POST" action="/reply/save">
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
    <div class="container flex-wrap mt-3">
        @forelse($replies as $reply)
        <div class="reply mb-2 rounded">
            <a class="user_reply" href="{!! url('/post/user', [$reply['user_id']]) !!}">
                {{ $reply['reply_by'] }}
            </a>
            <br>
            <i>{{ $reply['reply_date'] }}</i>
            <p>{{ $reply['reply_content'] }}</p>
        </div> 
        @empty
        <div class="reply rounded">
            <h4 class="justify-content-center">Aun no hay respuestas, se el primero en responder</td>
        </div>
        @endforelse
    </div>
</body>
</html>
