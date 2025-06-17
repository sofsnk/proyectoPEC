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
    <h1>Recuperacion de contraseña</h1>
    <form action="{{ route('reset.send') }}" method="POST">
        @if (session('mensaje'))
        <p>{{session('mensaje')}}</p>
        @endif
        @csrf
        <label for="correo">Correo: </label>
        <input type="email" name="correo" id="correo">
        <br>
        <button type="submit">Enviar</button>
    </form>
</main>
    @include('layouts.footer')
</body>
</html>