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
        <h1>Historial de donaciones</h1>
        @if (!empty($historial))
        @foreach ($historial as $donacion)
        <h3>donacion: </h3>
        <p>fecha: {{ $donacion['fecha_donacion'] }}</p>
        <p>estado: {{ $donacion['estado'] }}</p>
        <p>cantidad de dispositivos: {{ $donacion['cantidad_dispositivos'] }}</p>
        <h4>dispositivos: </h4>
        @foreach ($donacion['dispositivos'] as $dispositivo)
        <p>dispositivo: {{ $dispositivo['nombre_dispositivo'] }}</p>
        <p>marca: {{ $dispositivo['marca'] }}</p>
        <p>modelo: {{ $dispositivo['modelo'] }}</p>
        <p>estado: {{ $dispositivo['estado_fisico'] }}</p>
        <p>categoria: {{ $dispositivo['categoria']['nombre_categoria'] }}</p>
        <br>
        @endforeach
        <br>
        @endforeach
        @else
        <p>Aún no ha hecho ninguna donación</p>
        @endif
        </main>
    @include('layouts.footer')
</body>

</html>
