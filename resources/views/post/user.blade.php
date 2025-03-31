<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}</title>
</head>
<header>
    @include('common.header')
</header>
<body>
    <div class="container mt-3">
        <h1>Página de: {{ $user->name }}</h1>
        <h3>Ultimas publicaciones</h3>
    </div>
    <div class="container flex-wrap mt-3">
        <div class="justify-content-center mb-3">
            @forelse($posts as $post)
            <div class="card mb-2 rounded">
                <div>
                    <div>
                        <a class="subject" href="{!! url('/post/detail', [$post['post_id']]) !!}">
                            {{ $post['post_subject'] }}
                        </a>    
                    </div>
                    <i>
                        {{ $post['post_date'] }}
                    </i>
                </div>
            </div>
            @empty
                <div class="card rounded">
                    <h2>No hay publicaciones por parte de este usuario</td>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</body>
</html>