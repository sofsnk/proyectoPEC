<nav>
    <ul>
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('centros') }}">Centros de Acopio</a></li>
        <li><a href="{{ route('estadisticas') }}">Estadisticas</a></li>
        <li><a href="{{ route('galeria') }}">Galeria de Imagenes</a></li>
        <li><a href="{{ route('proyectos') }}">Proyectos</a></li>
        <li><a href="{{ route('donacion') }}">Donar un dispositivo</a></li>
        <li><a href="{{ route('donacion.historial') }}">Historial de donaciones</a></li>
        <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesion</button>
        </form>
    </ul>
</nav>
