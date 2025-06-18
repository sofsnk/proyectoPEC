<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Donar Dispositivos</title>
</head>

<body class="bg-gradient-to-br from-slate-900 via-gray-900 to-slate-800 min-h-screen">
    @include('layouts.nav')
    
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-full mb-6 shadow-2xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h1 class="text-5xl font-bold bg-gradient-to-r from-emerald-400 via-teal-500 to-green-600 bg-clip-text text-transparent mb-4">
                Donar Dispositivos
            </h1>
            <div class="w-32 h-1 bg-gradient-to-r from-emerald-500 to-teal-600 mx-auto rounded-full"></div>
        </div>

        @if (session('id_usuario'))
            <!-- Information Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-12">
                <div class="bg-gradient-to-br from-blue-600/20 to-indigo-600/20 backdrop-blur-sm rounded-2xl border border-blue-500/30 p-6 shadow-xl">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-blue-300 mb-2">Información Importante</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Los dispositivos que serán donados deben ser entregados personalmente en el CBTis 150. 
                                Primero debe generar una orden de donación para poder pasar a entregar los dispositivos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-emerald-600/20 to-teal-600/20 backdrop-blur-sm rounded-2xl border border-emerald-500/30 p-6 shadow-xl">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-emerald-300 mb-2">Confirmación</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Presente el ID de donación generado para confirmar su donación y completar el proceso de entrega.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donation Form -->
            <div class="bg-gradient-to-br from-slate-800/90 to-gray-800/90 backdrop-blur-sm rounded-3xl border border-gray-700/50 shadow-2xl overflow-hidden">
                <div class="bg-gradient-to-r from-emerald-600/20 via-teal-600/20 to-green-600/20 border-b border-gray-700/50 px-8 py-6">
                    <h2 class="text-2xl font-bold text-emerald-300 flex items-center space-x-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span>Formulario de Donación</span>
                    </h2>
                </div>

                <form action="{{ route('donacion.user') }}" method="POST" class="p-8">
                    @if (session('mensaje'))
                        <div class="mb-8 p-4 bg-gradient-to-r from-emerald-600/20 to-teal-600/20 border border-emerald-500/30 rounded-xl">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-emerald-300 font-medium">{{session('mensaje')}}</p>
                            </div>
                        </div>
                    @endif
                    
                    @csrf
                    
                    <!-- Date Selection -->
                    <div class="mb-10">
                        <label for="fecha_donacion" class="block text-lg font-semibold text-emerald-300 mb-3">
                            ¿Cuándo lo va a donar?
                        </label>
                        <div class="relative">
                            <input type="date" 
                                   name="fecha_donacion" 
                                   id="fecha_donacion"
                                   class="w-full px-4 py-3 bg-slate-700/50 border border-gray-600/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all duration-300">
                        </div>
                    </div>

                    <!-- Devices Container -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-teal-300 flex items-center space-x-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>Dispositivos a Donar</span>
                            </h3>
                        </div>

                        <div id="dispositivos-container" class="space-y-8">
                            <div class="dispositivo-form bg-gradient-to-br from-slate-700/40 to-gray-700/40 rounded-2xl border border-gray-600/40 p-6 shadow-lg">
                                <div class="flex items-center justify-between mb-6">
                                    <h4 class="text-lg font-semibold text-gray-200 flex items-center space-x-2">
                                        <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center">
                                            <span class="text-white text-sm font-bold">1</span>
                                        </div>
                                        <span>Dispositivo 1</span>
                                    </h4>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="nombre_dispositivo" class="block text-sm font-medium text-gray-300 mb-2">
                                            Nombre del dispositivo
                                        </label>
                                        <input type="text" 
                                               name="dispositivos[0][nombre_dispositivo]" 
                                               id="nombre_dispositivo"
                                               class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                               placeholder="Ej: Laptop HP">
                                    </div>

                                    <div>
                                        <label for="marca" class="block text-sm font-medium text-gray-300 mb-2">
                                            Marca
                                        </label>
                                        <input type="text" 
                                               name="dispositivos[0][marca]" 
                                               id="marca"
                                               class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                               placeholder="Ej: HP">
                                    </div>

                                    <div>
                                        <label for="modelo" class="block text-sm font-medium text-gray-300 mb-2">
                                            Modelo
                                        </label>
                                        <input type="text" 
                                               name="dispositivos[0][modelo]" 
                                               id="modelo"
                                               class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                               placeholder="Ej: Pavilion 15">
                                    </div>

                                    <div>
                                        <label for="descripcion" class="block text-sm font-medium text-gray-300 mb-2">
                                            Descripción
                                        </label>
                                        <input type="text" 
                                               name="dispositivos[0][descripcion]" 
                                               id="descripcion"
                                               class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300"
                                               placeholder="Descripción del dispositivo">
                                    </div>

                                    <div>
                                        <label for="estado_fisico" class="block text-sm font-medium text-gray-300 mb-2">
                                            Estado físico
                                        </label>
                                        <select name="dispositivos[0][estado_fisico]"
                                                class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                                            <option value="Nuevo">Nuevo</option>
                                            <option value="Usado">Usado</option>
                                            <option value="Reparable">Reparable</option>
                                            <option value="Funcional">Funcional</option>
                                            <option value="Dañado">Dañado</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="categoria" class="block text-sm font-medium text-gray-300 mb-2">
                                            Categoría
                                        </label>
                                        <select name="dispositivos[0][id_categoria]" 
                                                id="id_categoria"
                                                class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria['id_categoria'] }}">{{ $categoria['nombre_categoria'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center pt-8 border-t border-gray-700/50">
                        <button type="button" 
                                onclick="agregarDispositivo()"
                                class="px-6 py-3 bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-700 hover:to-emerald-700 text-white font-medium rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Agregar otro dispositivo
                        </button>

                        <button type="submit"
                                class="px-8 py-4 bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-700 hover:to-green-700 text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                            <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Realizar Donación
                        </button>
                    </div>
                </form>
            </div>
        @else
            <!-- Login Required -->
            <div class="text-center py-16">
                <div class="bg-gradient-to-br from-slate-800/50 to-gray-800/50 backdrop-blur-sm rounded-3xl border border-gray-700/50 p-12 max-w-2xl mx-auto">
                    <div class="w-24 h-24 bg-gradient-to-r from-red-600/20 to-orange-600/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-300 mb-4">Acceso Requerido</h3>
                    <p class="text-gray-400 text-lg mb-8">
                        Para poder donar un dispositivo debe 
                        <a href="{{ route('login') }}" class="text-emerald-400 hover:text-emerald-300 font-semibold underline transition-colors duration-300">
                            iniciar sesión
                        </a>
                    </p>
                    <div class="w-32 h-1 bg-gradient-to-r from-red-500 to-orange-600 mx-auto rounded-full"></div>
                </div>
            </div>
        @endif
    </main>

    @include('layouts.footer')

    <script>
        let dispositivoCount = 1;

        function agregarDispositivo() {
            const container = document.getElementById('dispositivos-container');
            const nuevoDispositivo = document.createElement('div');
            nuevoDispositivo.className = 'dispositivo-form bg-gradient-to-br from-slate-700/40 to-gray-700/40 rounded-2xl border border-gray-600/40 p-6 shadow-lg';
            nuevoDispositivo.innerHTML = `
                <div class="flex items-center justify-between mb-6">
                    <h4 class="text-lg font-semibold text-gray-200 flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center">
                            <span class="text-white text-sm font-bold">${dispositivoCount + 1}</span>
                        </div>
                        <span>Dispositivo ${dispositivoCount + 1}</span>
                    </h4>
                    <button type="button" onclick="eliminarDispositivo(this)" class="px-4 py-2 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-medium rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-gray-700">
                        <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Eliminar
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Nombre del dispositivo</label>
                        <input type="text" name="dispositivos[${dispositivoCount}][nombre_dispositivo]" class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300" placeholder="Ej: Laptop HP">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Marca</label>
                        <input type="text" name="dispositivos[${dispositivoCount}][marca]" class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300" placeholder="Ej: HP">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Modelo</label>
                        <input type="text" name="dispositivos[${dispositivoCount}][modelo]" class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300" placeholder="Ej: Pavilion 15">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Descripción</label>
                        <input type="text" name="dispositivos[${dispositivoCount}][descripcion]" class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300" placeholder="Descripción del dispositivo">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Estado físico</label>
                        <select name="dispositivos[${dispositivoCount}][estado_fisico]" class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                            <option value="Nuevo">Nuevo</option>
                            <option value="Usado">Usado</option>
                            <option value="Reparable">Reparable</option>
                            <option value="Funcional">Funcional</option>
                            <option value="Dañado">Dañado</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Categoría</label>
                        <select name="dispositivos[${dispositivoCount}][id_categoria]" class="w-full px-4 py-3 bg-slate-600/50 border border-gray-500/50 rounded-xl text-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-300">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria['id_categoria'] }}">{{ $categoria['nombre_categoria'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            `;
            container.appendChild(nuevoDispositivo);
            dispositivoCount++;
        }

        function eliminarDispositivo(button) {
            if (dispositivoCount > 1) {
                button.closest('.dispositivo-form').remove();
                dispositivoCount--;
                
                // Renumerar los dispositivos
                const dispositivos = document.querySelectorAll('.dispositivo-form');
                dispositivos.forEach((dispositivo, index) => {
                    const numeroElement = dispositivo.querySelector('.w-8.h-8 span');
                    const tituloElement = dispositivo.querySelector('h4 span');
                    if (numeroElement && tituloElement) {
                        numeroElement.textContent = index + 1;
                        tituloElement.textContent = `Dispositivo ${index + 1}`;
                    }
                });
            }
        }
    </script>
</body>

</html>