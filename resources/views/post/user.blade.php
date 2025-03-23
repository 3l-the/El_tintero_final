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
    <h1>Página de: {{ $user->name }}</h1>
    <h3>Publicaciones recientes</h3>
    </table>
    <table class="table">
        @forelse($posts as $post)
            <tr>
                <td>
                    <a href="{!! url('/post/detail', [$post['post_id']]) !!}">
                        {{ $post['post_subject'] }}
                    </a>    
                </td>
                <td>
                    {{ $post['post_date'] }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay publicaciones por parte de este usuario</td>
            </tr>
        @endforelse
    </table>
</body>
</html>