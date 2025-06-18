<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Recuperación de Contraseña</title>
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
                        <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white mb-2 tracking-tight">Recuperación de Contraseña</h1>
                <p class="text-gray-300">Te enviaremos un enlace para restablecer tu contraseña</p>
            </div>

            <!-- Reset Form Card -->
            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-gray-200/50">
                <form action="{{ route('reset.send') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Success/Error Message -->
                    @if (session('mensaje'))
                        <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-xl text-sm">
                            {{ session('mensaje') }}
                        </div>
                    @endif
                    
                    <!-- Email Field -->
                    <div class="space-y-2">
                        <label for="correo" class="block text-sm font-semibold text-gray-700">
                            Correo Electrónico
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <input 
                                type="email" 
                                name="correo" 
                                id="correo"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 text-gray-900"
                                placeholder="Ingresa tu correo electrónico"
                                required
                            >
                        </div>
                        <p class="text-xs text-gray-500 mt-2">
                            Enviaremos las instrucciones de recuperación a este correo
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full custom-deep-teal hover-custom-teal text-white font-semibold py-3 px-4 rounded-xl shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2"
                    >
                        Enviar Enlace de Recuperación
                    </button>

                    <!-- Divider -->
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">o</span>
                        </div>
                    </div>

                    <!-- Links Section -->
                    <div class="space-y-4 text-center">
                        <p class="text-gray-600">
                            ¿Recordaste tu contraseña? 
                            <a href="{{ route('login') }}" class="text-custom-teal hover:underline font-semibold transition-colors duration-200">
                                Iniciar sesión
                            </a>
                        </p>
                        <p>
                            <a href="{{ route('register') }}" class="text-sm text-gray-500 hover:text-custom-teal transition-colors duration-200">
                                ¿No tienes cuenta? Crear una nueva
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Footer Text -->
            <div class="text-center mt-8">
                <p class="text-gray-400 text-sm">
                    Revisa tu bandeja de entrada y carpeta de spam
                </p>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>