<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Tintero</title>
</head>
<header>
    @include('common.header')
</header>
<body>
    <div class="container flex-wrap mt-3">
    @forelse($posts as $post)
        <div class="card mb-2 rounded">
            <div>
                <a class="subject" href="{!! url('/post/detail', [$post['post_id']]) !!}">
                    {{ $post['post_subject'] }}
                </a> 
            </div>
            <div>
                <a class="user" href="{!! url('/post/user', [$post['user_id']]) !!}">
                    {{ $post['user_name'] }}
                </a>
            </div>
            <div>
                <i class="date">
                    {{ $post['post_date'] }}
                </i> 
            </div>
        </div>
    @empty
        <div class="card rounded">
            <h2>No hay publicaciones</h2>
        </div>
    @endforelse
</body>
</html>