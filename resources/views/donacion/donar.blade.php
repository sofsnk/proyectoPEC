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
            <p>Nota: Los dispositivos que seran donados deben ser entrgegados personalmente a el CBTis 150, primero debe
                generar una orden de donacion para poder pasar a entrgar los dispositivos</p>
            <form action="{{ route('donacion.user') }}" method="POST">
                @csrf
                <label for="fecha_donacion">¿Cuando lo va a donar?</label>
                <input type="date" name="fecha_donacion" id="fecha_donacion">
                <br>

                <div id="dispositivos-container">
                    <div class="dispositivo-form">
                        <label for="nombre_dispositivo">Nombre del dispositivo: </label>
                        <input type="text" name="dispositivos[0][nombre_dispositivo]" id="nombre_dispositivo">
                        <br>
                        <label for="marca">Marca: </label>
                        <input type="text" name="dispositivos[0][marca]" id="marca">
                        <br>
                        <label for="modelo">Modelo: </label>
                        <input type="text" name="dispositivos[0][modelo]" id="modelo">
                        <br>
                        <label for="descripcion">Descripcion: </label>
                        <input type="text" name="dispositivos[0][descripcion]" id="descripcion">
                        <br>
                        <label for="estado_fisico">Estado fisico: </label>
                        <select name="dispositivos[0][estado]">
                            <option value="Nuevo">Nuevo</option>
                            <option value="Usado">Usado</option>
                            <option value="Reparable">Reparable</option>
                            <option value="Funcional">Funcional</option>
                            <option value="Dañado">Dañado</option>
                        </select>
                        <br>
                        <label for="categoria">categoria: </label>
                        <select name="dispositivos[0][id_categoria]" id="id_categoria">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria['id_categoria'] }}">{{ $categoria['nombre_categoria'] }}
                                </option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                </div>

                <button type="button" onclick="agregarDispositivo()">Agregar otro dispositivo</button>
                <br><br>
                <button type="submit">Donar</button>
            </form>
        @else
            <p>Para poder donar un dispositivo debe <a href="{{ route('login') }}">iniciar sesion</a></p>
        @endif
    </main>
    @include('layouts.footer')
    <script>
        let dispositivoCount = 1;

        function agregarDispositivo() {
            const container = document.getElementById('dispositivos-container');
            const nuevoDispositivo = document.createElement('div');
            nuevoDispositivo.className = 'dispositivo-form';
            nuevoDispositivo.innerHTML = `
        <label for="nombre_dispositivo">Nombre del dispositivo: </label>
        <input type="text" name="dispositivos[${dispositivoCount}][nombre_dispositivo]">
        <br>
        <label for="marca">Marca: </label>
        <input type="text" name="dispositivos[${dispositivoCount}][marca]">
        <br>
        <label for="modelo">Modelo: </label>
        <input type="text" name="dispositivos[${dispositivoCount}][modelo]">
        <br>
        <label for="descripcion">Descripcion: </label>
        <input type="text" name="dispositivos[${dispositivoCount}][descripcion]">
        <br>
        <label for="estado_fisico">Estado fisico: </label>
        <select name="dispositivos[${dispositivoCount}][estado]">
            <option value="Nuevo">Nuevo</option>
            <option value="Usado">Usado</option>
            <option value="Reparable">Reparable</option>
            <option value="Funcional">Funcional</option>
            <option value="Dañado">Dañado</option>
        </select>
        <br>
        <label for="categoria">categoria: </label>
        <select name="dispositivos[${dispositivoCount}][id_categoria]">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria['id_categoria'] }}">{{ $categoria['nombre_categoria'] }}</option>
            @endforeach
        </select>
        <br>
        <button type="button" onclick="eliminarDispositivo(this)">Eliminar dispositivo</button>
        <br><br>
    `;
            container.appendChild(nuevoDispositivo);
            dispositivoCount++;
        }

        function eliminarDispositivo(button) {
            if (dispositivoCount > 1) {
                button.parentElement.remove();
                dispositivoCount--;
                // Renumerar los títulos
                const dispositivos = document.querySelectorAll('.dispositivo-form h3');
                dispositivos.forEach((h3, index) => {
                    h3.textContent = `Dispositivo ${index + 1}`;
                });
            }
        }
    </script>
</body>

</html>
