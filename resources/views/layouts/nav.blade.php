<nav class="bg-white/95 backdrop-blur-sm shadow-lg border-b border-gray-200/50 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo/Brand -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-teal-600 to-teal-800 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-800">EcoTech</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <ul class="flex items-center space-x-1">
                    <li>
                        <a href="{{ route('home') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('centros') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Centros de Acopio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('estadisticas') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Estadísticas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('galeria') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Galería
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('proyectos') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Proyectos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('donacion') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Donar Dispositivo
                        </a>
                    </li>
                </ul>

                <!-- Separator -->
                <div class="w-px h-6 bg-gray-300 mx-4"></div>

                <!-- User Actions -->
                @if (session('id_usuario'))
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('donacion.historial') }}" 
                           class="px-4 py-2 text-gray-700 hover:text-white hover:bg-gradient-to-r hover:from-teal-600 hover:to-teal-800 rounded-lg transition-all duration-200 font-medium">
                            Historial
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors duration-200 font-medium shadow-sm">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-6 py-2 bg-gradient-to-r from-teal-600 to-teal-800 hover:from-teal-700 hover:to-teal-900 text-white rounded-lg transition-all duration-200 font-medium shadow-lg transform hover:scale-105">
                        Iniciar Sesión
                    </a>
                @endif
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" 
                        class="p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-200 py-4">
            <div class="space-y-2">
                <a href="{{ route('home') }}" 
                   class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                    Inicio
                </a>
                <a href="{{ route('centros') }}" 
                   class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                    Centros de Acopio
                </a>
                <a href="{{ route('estadisticas') }}" 
                   class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                    Estadísticas
                </a>
                <a href="{{ route('galeria') }}" 
                   class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                    Galería
                </a>
                <a href="{{ route('proyectos') }}" 
                   class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                    Proyectos
                </a>
                <a href="{{ route('donacion') }}" 
                   class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                    Donar Dispositivo
                </a>
                
                <!-- Mobile User Actions -->
                @if (session('id_usuario'))
                    <div class="border-t border-gray-200 pt-4 mt-4 space-y-2">
                        <a href="{{ route('donacion.historial') }}" 
                           class="block px-4 py-3 text-gray-700 hover:bg-gray-50 hover:text-teal-700 rounded-lg transition-colors duration-200 font-medium">
                            Historial de Donaciones
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="px-4">
                            @csrf
                            <button type="submit" 
                                    class="w-full text-left py-3 text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200 font-medium">
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                @else
                    <div class="border-t border-gray-200 pt-4 mt-4">
                        <a href="{{ route('login') }}" 
                           class="block mx-4 px-4 py-3 bg-gradient-to-r from-teal-600 to-teal-800 text-white text-center rounded-lg font-medium shadow-lg">
                            Iniciar Sesión
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>

<style>
    /* Custom colors for consistency */
    .custom-teal-600 { background-color: #0c7075; }
    .custom-teal-800 { background-color: #072e33; }
    .hover\:custom-teal-700:hover { background-color: #0a5d61; }
    .hover\:custom-teal-900:hover { background-color: #051f22; }
</style>