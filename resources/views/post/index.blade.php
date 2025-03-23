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
    <table class="table">
        @forelse($posts as $post)
            <tr>
                <td>
                    <a href="{!! url('/post/detail', [$post['post_id']]) !!}">
                        {{ $post['post_subject'] }}
                    </a>    
                </td>
                <td>
                    <a href="{!! url('/post/user', [$post['user_id']]) !!}">
                        {{ $post['user_name'] }}
                    </a>
                </td>
                <td>
                    {{ $post['post_date'] }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No hay publicaciones</td>
            </tr>
        @endforelse
    </table>
</body>
</html>