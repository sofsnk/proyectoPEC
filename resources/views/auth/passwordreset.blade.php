<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @include('layouts.nav')
    <main>
        <h1>Actualizar contraseña</h1>
        <form action="{{ route('reset.password') }}" method="POST">
            @if (session('mensaje'))
                <p>{{session('mensaje')}}</p>
            @endif
            @csrf
            <input type="hidden" name="id_usuario" id="id_usuario" value="{{ $usuario['id_usuario'] }}">
            <label for="contraseña">Nueva contraseña: </label>
            <input type="password" name="contraseña" id="ccontraseña">
            <br>
            <label for="contraseña2">Repita la contraseña: </label>
            <input type="password" name="contraseña2" id="contraseña2">
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </main>
    @include('layouts.footer')
</body>

</html>
