<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Actualizar Contraseña</title>
    <style>
        .custom-deep-teal { background-color: #072e33; }
        .custom-ocean-teal { background-color: #0c7075; }
        .border-custom-teal { border-color: #0c7075; }
        .text-custom-teal { color: #0c7075; }
        .hover-custom-teal:hover { background-color: #0c7075; }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-gray-800 to-slate-900">
    @include('layouts.nav')
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>

    <main class="relative z-10 min-h-screen flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <!-- Header Section -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 custom-ocean-teal rounded-full shadow-lg mb-4 transform hover:scale-105 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 9V7a6 6 0 1112 0v2a2 2 0 012 2v5a2 2 0 01-2 2H4a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H8V7a2 2 0 114 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white mb-2 tracking-tight">Actualizar Contraseña</h1>
                <p class="text-gray-300">Crea una nueva contraseña segura</p>
            </div>

            <!-- Update Password Form Card -->
            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-gray-200/50">
                <form action="{{ route('reset.password') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Hidden ID field -->
                    <input type="hidden" name="id_usuario" id="id_usuario" value="{{ $usuario['id_usuario'] }}">
                    
                    <!-- Success/Error Message -->
                    @if (session('mensaje'))
                        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    
                    <!-- Nueva Contraseña Field -->
                    <div class="space-y-2">
                        <label for="contraseña" class="block text-sm font-semibold text-gray-700">
                            Nueva Contraseña
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                name="contraseña" 
                                id="contraseña"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 text-gray-900"
                                placeholder="Ingresa tu nueva contraseña"
                                required
                            >
                        </div>
                        <p class="text-xs text-gray-500 mt-1">
                            Mínimo 8 caracteres, incluye mayúsculas y números
                        </p>
                    </div>

                    <!-- Confirmar Contraseña Field -->
                    <div class="space-y-2">
                        <label for="contraseña2" class="block text-sm font-semibold text-gray-700">
                            Confirmar Contraseña
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                name="contraseña2" 
                                id="contraseña2"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 text-gray-900"
                                placeholder="Repite tu nueva contraseña"
                                required
                            >
                        </div>
                        <p class="text-xs text-gray-500 mt-1">
                            Debe coincidir con la contraseña anterior
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full custom-deep-teal hover-custom-teal text-white font-semibold py-3 px-4 rounded-xl shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2"
                    >
                        Actualizar Contraseña
                    </button>

                    <!-- Security Notice -->
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm text-blue-700">
                                <p class="font-semibold mb-1">Consejos de seguridad:</p>
                                <ul class="text-xs space-y-1 text-blue-600">
                                    <li>• Usa una combinación de letras, números y símbolos</li>
                                    <li>• No reutilices contraseñas de otras cuentas</li>
                                    <li>• Considera usar un gestor de contraseñas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Footer Text -->
            <div class="text-center mt-8">
                <p class="text-gray-400 text-sm">
                    Tu contraseña será encriptada y almacenada de forma segura
                </p>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>