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
        <h1>Crear cuenta</h1>
        <form action="{{ route('register.user') }}" method="POST">
            @csrf
            <label for="nombre">Nombres: </label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="apellido">Apellidos: </label>
            <input type="text" name="apellido" id="apellido" required>
            <br>
            <label for="telefono">Telefono: </label>
            <input type="number" name="telefono" id="telefono" required>
            <br>
            <label for="correo">Email: </label>
            <input type="email" name="correo" id="correo" required>
            <br>
            <label for="contraseña">Contraseña: </label>
            <input type="password" name="contraseña" id="contraseña" required>
            <br>
            @if (session('mensaje'))
                <p>{{session('mensaje')}}</p>
            @endif
            <p>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Iniciar sesion</a></p>
            <button type="submit">Crear cuenta</button>
        </form>
    </main>
    @include('layouts.footer')
</body>
</html>