<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Crear Cuenta</title>
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
                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white mb-2 tracking-tight">Crear Cuenta</h1>
                <p class="text-gray-300">Únete a nuestra comunidad</p>
            </div>

            <!-- Register Form Card -->
            <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 border border-gray-200/50">
                <form action="{{ route('register.user') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Nombres Field -->
                    <div class="space-y-2">
                        <label for="nombre" class="block text-sm font-semibold text-gray-700">
                            Nombres
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input 
                                type="text" 
                                name="nombre" 
                                id="nombre"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 text-gray-900"
                                placeholder="Ingresa tus nombres"
                                required
                            >
                        </div>
                    </div>

                    <!-- Apellidos Field -->
                    <div class="space-y-2">
                        <label for="apellido" class="block text-sm font-semibold text-gray-700">
                            Apellidos
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input 
                                type="text" 
                                name="apellido" 
                                id="apellido"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 text-gray-900"
                                placeholder="Ingresa tus apellidos"
                                required
                            >
                        </div>
                    </div>

                    <!-- Teléfono Field -->
                    <div class="space-y-2">
                        <label for="telefono" class="block text-sm font-semibold text-gray-700">
                            Teléfono
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <input 
                                type="number" 
                                name="telefono" 
                                id="telefono"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 text-gray-900"
                                placeholder="Número de teléfono"
                                required
                            >
                        </div>
                    </div>

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
                                placeholder="tu@email.com"
                                required
                            >
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="space-y-2">
                        <label for="contraseña" class="block text-sm font-semibold text-gray-700">
                            Contraseña
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
                                placeholder="••••••••"
                                required
                            >
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full custom-deep-teal hover-custom-teal text-white font-semibold py-3 px-4 rounded-xl shadow-lg transform hover:scale-[1.02] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2"
                    >
                        Crear Cuenta
                    </button>

                    <!-- Error Message -->
                    @if (session('mensaje'))
                        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
                            {{ session('mensaje') }}
                        </div>
                    @endif

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
                    <div class="text-center">
                        <p class="text-gray-600">
                            ¿Ya tienes una cuenta? 
                            <a href="{{ route('login') }}" class="text-custom-teal hover:underline font-semibold transition-colors duration-200">
                                Iniciar sesión
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Footer Text -->
            <div class="text-center mt-8">
                <p class="text-gray-400 text-sm">
                    Al crear una cuenta, aceptas nuestros términos y condiciones
                </p>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>