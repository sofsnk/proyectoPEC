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
        <h1>Donar dispositivos</h1>
        @if (session('id_usuario'))
            <form action="{{ route('donacion.user') }}" method="POST">
                @csrf
                <label for="nombre_dispositivo">Nombre del dispositivo: </label>
                <input type="text" name="nombre_dispositivo" id="nombre_dispositivo">
                <br>
                <label for="marca">Marca: </label>
                <input type="text" name="marca" id="marca">
                <br>
                <label for="modelo">Modelo: </label>
                <input type="text" name="modelo" id="modelo">
                <br>
                <label for="descripcion">Descripcion: </label>
                <input type="text" name="descripcion" id="descripcion">
                <br>
                <label for="estado_fisico">Estado fisico: </label>
                <select name="estado">
                    <option value="Nuevo">Nuevo</option>
                    <option value="Usado">Usado</option>
                    <option value="Reparable">Reparable</option>
                    <option value="Funcional">Funcional</option>
                    <option value="Dañado">Dañado</option>
                </select>
                <button type="submit">Donar</button>
            </form>
        @else
            <p>Para poder donar un dispositivo debe <a href="{{ route('login') }}">iniciar sesion</a></p>
        @endif
    </main>
    @include('layouts.footer')
</body>

</html>
