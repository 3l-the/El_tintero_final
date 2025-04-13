<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
nav{
  background-color: #FE7F2D;
  border-bottom-style: solid;
  border-width: 5px;
  border-color: #77878B;
  padding-top: 10px;
  padding-bottom: 10px;
}
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
  padding: 10px 10px;
  text-decoration: none;
  color: #FFFFFF;
  font-size: 22px;
  font-weight: bold;
}
nav a:hover { 
  color: #533E2D; 
}

div.card{
  background-color: #533E2D;
  color: #FFFFFF;
  padding: 20px;
  margin-bottom: 20px;
}

div.reply{
  background-color: #77878B;
  color: #FFFFFF;
  padding: 20px;
  margin-bottom: 20px;
}

form{
  background-color: #6A8D73;
  padding: 20px;
  margin-bottom: 20px;
}
form div{
  margin-bottom: 5px;
}

label{
  font-weight: bold;
  font-size: 20px;
}

a.subject_detail{
  text-decoration: none;
  color: #FFFFFF;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 32px;
}
a.subject{
  text-decoration: none;
  color: #FFFFFF;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 22px;
}
a.subject:hover{
  color: #77878B;
  text-decoration: underline;
}
a.user{
  text-decoration: none;
  color: #FFFFFF;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 18px;
}
a.user:hover{
  color: #77878B;
  text-decoration: underline;
}
a.user_detail{
  text-decoration: italic;
  color: #FFFFFF;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 18px;
}
a.user_detail:hover{
  color: #77878B;
  text-decoration: underline;
}
a.user_reply{
  text-decoration: italic;
  color: #FFFFFF;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 18px;
}
a.user_reply:hover{
  color: #533E2D;
  text-decoration: underline;
}

p{
  color: #FFFFFF;
  margin-bottom: 10px;
  font-size: 18px;
}

i{
  color: #ffffff82;
}

</style>
<nav>
  <div class="container d-flex flex-wrap justify-content-center">
    <ul class="nav me-auto">
        <li>
            <a href="{!! url('/post/index') !!}">
            <img src="{!! asset('/img/Logo_texto.png') !!}" alt="El tintero" width="130">
            </a>
        </li>
    </ul>
    <ul class="nav">
        @if (!auth()->check())
            <li class="nav-item">
                <a href="{!! url('/register/index') !!}">
                Registrarse
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('/login/index') !!}">
                Iniciar sesión
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
                Crear publicación
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('/logout') !!}">
                Cerrar sesión
                </a>
            </li>
        @endif
    </ul>
  </div>
</nav>