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
        <h1>Galeria de imagenes</h1>
        @if(!(empty($primero)))
        <h3>1er Semestre</h3>
            @foreach ($primero as $trabajo)
            <p>grupo: {{$trabajo['grupo']}}</p>
            <p>especialidad: {{$trabajo['especialidad']}}</p>
            <p>Materia | UAC: {{$trabajo['UAC']}}</p>
            <p>progresion: {{$trabajo['progresion']}}</p>
            <p>fecha de realizacion: {{$trabajo['fecha_realizacion']}}</p>
            <p>titulo: {{$trabajo['titulo']}}</p>
            <img src="{{ $trabajo['imagen'] }}" alt="">
            <p>descripcion: {{$trabajo['descripcion']}}</p>
            <p>enlaces: <a href="{{$trabajo['enlaces']}}">Enlace</a></p>
            <br>
            @endforeach
        @endif

        @if(!(empty($segundo)))
        <h3>2do Semestre</h3>
            @foreach ($segundo as $trabajo)
            <p>grupo: {{$trabajo['grupo']}}</p>
            <p>especialidad: {{$trabajo['especialidad']}}</p>
            <p>Materia | UAC: {{$trabajo['UAC']}}</p>
            <p>progresion: {{$trabajo['progresion']}}</p>
            <p>fecha de realizacion: {{$trabajo['fecha_realizacion']}}</p>
            <p>titulo: {{$trabajo['titulo']}}</p>
            <img src="{{ $trabajo['imagen'] }}" alt="">
            <p>descripcion: {{$trabajo['descripcion']}}</p>
            <p>enlaces: <a href="{{$trabajo['enlaces']}}">Enlace</a></p>
            <br>
            @endforeach
        @endif

        @if(!(empty($tercero)))
        <h3>3er Semestre</h3>
            @foreach ($tercero as $trabajo)
            <p>grupo: {{$trabajo['grupo']}}</p>
            <p>especialidad: {{$trabajo['especialidad']}}</p>
            <p>Materia | UAC: {{$trabajo['UAC']}}</p>
            <p>progresion: {{$trabajo['progresion']}}</p>
            <p>fecha de realizacion: {{$trabajo['fecha_realizacion']}}</p>
            <p>titulo: {{$trabajo['titulo']}}</p>
            <img src="{{ $trabajo['imagen'] }}" alt="">
            <p>descripcion: {{$trabajo['descripcion']}}</p>
            <p>enlaces: <a href="{{$trabajo['enlaces']}}">Enlace</a></p>
            <br>
            @endforeach
        @endif

        @if(!(empty($cuarto)))
        <h3>4to Semestre</h3>
            @foreach ($cuarto as $trabajo)
            <p>grupo: {{$trabajo['grupo']}}</p>
            <p>especialidad: {{$trabajo['especialidad']}}</p>
            <p>Materia | UAC: {{$trabajo['UAC']}}</p>
            <p>progresion: {{$trabajo['progresion']}}</p>
            <p>fecha de realizacion: {{$trabajo['fecha_realizacion']}}</p>
            <p>titulo: {{$trabajo['titulo']}}</p>
            <img src="{{ $trabajo['imagen'] }}" alt="">
            <p>descripcion: {{$trabajo['descripcion']}}</p>
            <p>enlaces: <a href="{{$trabajo['enlaces']}}">Enlace</a></p>
            <br>
            @endforeach
        @endif

        @if(!(empty($quinto)))
        <h3>5to Semestre</h3>
            @foreach ($quinto as $trabajo)
            <p>grupo: {{$trabajo['grupo']}}</p>
            <p>especialidad: {{$trabajo['especialidad']}}</p>
            <p>Materia | UAC: {{$trabajo['UAC']}}</p>
            <p>progresion: {{$trabajo['progresion']}}</p>
            <p>fecha de realizacion: {{$trabajo['fecha_realizacion']}}</p>
            <p>titulo: {{$trabajo['titulo']}}</p>
            <img src="{{ $trabajo['imagen'] }}" alt="">
            <p>descripcion: {{$trabajo['descripcion']}}</p>
            <p>enlaces: <a href="{{$trabajo['enlaces']}}">Enlace</a></p>
            <br>
            @endforeach
        @endif

        @if(!(empty($sexto)))
        <h3>6to Semestre</h3>
            @foreach ($sexto as $trabajo)
            <p>grupo: {{$trabajo['grupo']}}</p>
            <p>especialidad: {{$trabajo['especialidad']}}</p>
            <p>Materia | UAC: {{$trabajo['UAC']}}</p>
            <p>progresion: {{$trabajo['progresion']}}</p>
            <p>fecha de realizacion: {{$trabajo['fecha_realizacion']}}</p>
            <p>titulo: {{$trabajo['titulo']}}</p>
            <img src="{{ $trabajo['imagen'] }}" alt="">
            <p>descripcion: {{$trabajo['descripcion']}}</p>
            <p>enlaces: <a href="{{$trabajo['enlaces']}}">Enlace</a></p>
            <br>
            @endforeach
        @endif
    </main>
    @include('layouts.footer')
</body>
</html>