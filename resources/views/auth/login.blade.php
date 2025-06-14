<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts.nav')
    <main>
        <h1>Iniciar sesion</h1>
        <form action="{{ route('login.user') }}" method="POST">
            @csrf
            <label for="correo">Email: </label>
            <input type="email" name="correo" id="correo">
            <br>
            <label for="contraseña">Contraseña: </label>
            <input type="password" name="contraseña" id="contraseña">
            <br>
            <button type="submit">Iniciar sesion</button>
            @if (session('mensaje'))
                <p>{{session('mensaje')}}</p>
            @endif
            <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Crear cuenta</a></p>
        </form>
    </main>
    @include('layouts.footer')
</body>
</html>