<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav li {
  display: inline-block;
  margin-right: 20px;
}
nav li:last-child {
  margin-right: 0;
}
nav a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: #333; 
  font-weight: bold;
}
nav a:hover {
  background-color: #333; 
  color: #fff; 
}
</style>
<nav class="py-2 bg-body-tertiary border-bottom">
  <div class="container d-flex flex-wrap">
    <ul class="nav me-auto">
        <li>
            <a href="{!! url('/post/index') !!}">
            EL TINTERO
            </a>
        </li>
    </ul>
    <ul class="nav">
        @if (!auth()->check())
            <li class="nav-item">
                <a href="{!! url('/register/index') !!}">
                REGISTRARSE
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('/login/index') !!}">
                INICIAR SESIÓN
                </a>
            </li>
        @endif
        @if (auth()->check())
            <li class="nav-item">
                <a href="{!! url('/post/user', [auth()->user()->id]) !!}">
                {{ auth()->user()->name }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('/post/create') !!}">
                CREAR PUBLICACIÓN
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('/logout') !!}">
                CERRAR SESIÓN
                </a>
            </li>
        @endif
    </ul>
  </div>
</nav>