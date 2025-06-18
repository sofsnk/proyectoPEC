<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Basura Tecnológica - E-waste</title>
</head>
<body class="bg-gradient-to-br from-green-50 to-emerald-100 min-h-screen">
    @include('layouts.nav')
    
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-black-800 mb-6 leading-tight">
                Basura Tecnológica
            </h1>
            <p class="text-xl text-black-700 max-w-3xl mx-auto leading-relaxed">
                Conoce el impacto ambiental de los desechos electrónicos y cómo podemos contribuir a un futuro más sostenible
            </p>
        </div>

        <!-- What is E-waste Section -->
        <section class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-black-800 mb-6">
                            ¿Qué es la basura tecnológica?
                        </h2>
                        <p class="text-black leading-relaxed text-lg mb-6">
                            La basura electrónica, a menudo conocida como E-waste es un tipo de basura 
                            generada por la electrónica en el mundo industrial, un tipo de basura que se genera 
                            cuando un dispositivo ya sea teléfonos, tablets, computadoras, impresoras y entre 
                            una gran variedad de estos llegan al fin de su vida útil dejando rastros de 
                            contaminación.
                        </p>
                        <p class="text-black leading-relaxed text-lg">
                            Normalmente contiene una serie de componentes peligrosos que 
                            tienen un gran impacto al medio ambiente afectando incluso a la salud humana ya 
                            que al no tener un lugar para su reciclaje o desecho terminan contaminando.
                        </p>
                    </div>
                    <div class="bg-gradient-to-br from-green-400 to-emerald-600 p-8 lg:p-12 flex items-center justify-center">
                        <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 w-full h-64 flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <p class="text-sm font-medium">Imagen: Dispositivos electrónicos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Causes Section -->
        <section class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <div class="bg-gradient-to-br from-emerald-500 to-green-600 p-8 lg:p-12 flex items-center justify-center order-2 lg:order-1">
                        <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-8 w-full h-64 flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                                </svg>
                                <p class="text-sm font-medium">Imagen: Causas de generación</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center order-1 lg:order-2">
                        <h2 class="text-3xl font-bold text-black-800 mb-6">
                            Causas de generación de la Basura Tecnológica
                        </h2>
                        <p class="text-black leading-relaxed text-lg mb-6">
                            Generalmente la basura tecnológica se genera a partir del fin de la vida útil de un 
                            dispositivo electrónico donde este no es depositado en un sitio adecuado, donado 
                            o vendido para su reparación, esta llega a zonas como ríos, basureros o quedar 
                            almacenados en lugares no adecuados.
                        </p>
                        <p class="text-black leading-relaxed text-lg">
                            Mucha de esta basura contiene sustancias 
                            tóxicas, metales pesados, componentes electrónicos, electromagnéticos y muy 
                            contaminantes como pueden ser las baterías, microondas, impresoras, teclados y 
                            adaptadores de corriente.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Types Section -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black-800 mb-4">
                    Tipos de Basura Tecnológica
                </h2>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-gradient-to-br from-green-400 to-emerald-500 p-6 flex items-center justify-center h-48">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 mx-auto mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.5 7.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5S7.17 6 8 6s1.5.67 1.5 1.5zM9 17v-7H7v7h2zm-4 0v-7H3v7h2zm12 0v-7h-2v7h2zm4 0v-7h-2v7h2z"/>
                            </svg>
                            <p class="text-sm font-medium">Imagen aquí</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black-800 mb-3">Equipos de temperatura</h3>
                        <p class="text-gray-600 mb-2"><strong>17%</strong></p>
                        <p class="text-black">Refrigeradores, aires acondicionados, bombas de calor</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-gradient-to-br from-emerald-400 to-green-500 p-6 flex items-center justify-center h-48">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 mx-auto mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/>
                            </svg>
                            <p class="text-sm font-medium">Imagen aquí</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black-800 mb-3">Pantallas y monitores</h3>
                        <p class="text-gray-600 mb-2"><strong>8%</strong></p>
                        <p class="text-black">Televisores, monitores, laptops, tablets</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 p-6 flex items-center justify-center h-48">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 mx-auto mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3.5-2.5L14 13V4h4v16z"/>
                            </svg>
                            <p class="text-sm font-medium">Imagen aquí</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black-800 mb-3">Equipos grandes</h3>
                        <p class="text-gray-600 mb-2"><strong>22%</strong></p>
                        <p class="text-black">Lavadoras, secadoras, paneles solares</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-gradient-to-br from-emerald-500 to-green-600 p-6 flex items-center justify-center h-48">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 mx-auto mb-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                            <p class="text-sm font-medium">Imagen aquí</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-black-800 mb-3">Lámparas</h3>
                        <p class="text-gray-600 mb-2"><strong>3%</strong></p>
                        <p class="text-black">LED, fluorescentes, lámparas de descarga</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Environmental Impact Section -->
        <section class="mb-20">
            <div class="bg-gradient-to-r from-green-800 to-emerald-700 rounded-3xl shadow-xl text-white">
                <div class="grid lg:grid-cols-2 gap-0">
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold mb-6">
                            Impactos Ambientales
                        </h2>
                        <p class="leading-relaxed text-lg mb-6 text-black-100">
                            La basura tecnológica contiene metales pesados 
                            (plomo y mercurio principalmente), sustancias tóxicas lo que sumado al manejo 
                            inadecuado contamina suelos y aguas subterráneas.
                        </p>
                        <p class="leading-relaxed text-lg text-black-100">
                            Si estos se queman contamina 
                            el aire y tienen una significante contribución a la huella de carbono global y 
                            degradación de ecosistemas.
                        </p>
                    </div>
                    <div class="p-8 lg:p-12 flex items-center justify-center">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 w-full h-64 flex items-center justify-center">
                            <div class="text-center">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <p class="text-sm font-medium">Imagen: Impacto ambiental</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-black-800 mb-4">
                        Global E-waste Monitor 2024
                    </h2>
                    <p class="text-xl text-gray-600">Estadísticas globales sobre residuos electrónicos</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-4xl font-bold text-black-600 mb-2">62Mt</div>
                        <div class="text-black-800 font-semibold mb-2">Generación global 2022</div>
                        <div class="text-gray-600 text-sm">Proyección 82 Mt para 2030</div>
                    </div>
                    
                    <div class="text-center p-6 bg-emerald-50 rounded-2xl">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">5%</div>
                        <div class="text-emerald-800 font-semibold mb-2">Crecimiento anual</div>
                        <div class="text-gray-600 text-sm">2.6 Mt por año</div>
                    </div>
                    
                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-4xl font-bold text-black-600 mb-2">22.3%</div>
                        <div class="text-black-800 font-semibold mb-2">Tasa de reciclaje</div>
                        <div class="text-gray-600 text-sm">Recolectado y reciclado formalmente</div>
                    </div>
                    
                    <div class="text-center p-6 bg-emerald-50 rounded-2xl">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">$62B</div>
                        <div class="text-emerald-800 font-semibold mb-2">Valor perdido</div>
                        <div class="text-gray-600 text-sm">En materiales recuperables</div>
                    </div>
                    
                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-4xl font-bold text-black-600 mb-2">26kg</div>
                        <div class="text-black-800 font-semibold mb-2">Líder per cápita</div>
                        <div class="text-gray-600 text-sm">Noruega por habitante</div>
                    </div>
                    
                    <div class="text-center p-6 bg-emerald-50 rounded-2xl">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">34.2Mt</div>
                        <div class="text-emerald-800 font-semibold mb-2">Asia lidera</div>
                        <div class="text-gray-600 text-sm">Seguida por Europa (13.8 Mt)</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Regulations Section -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black-800 mb-4">
                    Regulaciones Actuales
                </h2>
                <p class="text-xl text-gray-600">Marco normativo internacional y regional</p>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-green-500">
                    <h3 class="text-2xl font-bold text-black-800 mb-4">🌍 Global</h3>
                    <p class="text-gray-700 leading-relaxed">
                        La Convención de Basilea actualizó sus anexos en 2022 para incluir 
                        definiciones más específicas de e-waste peligroso y controlar mejor su comercio 
                        transfronterizo.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-emerald-500">
                    <h3 class="text-2xl font-bold text-emerald-800 mb-4">🇪🇺 Unión Europea</h3>
                    <p class="text-gray-700 leading-relaxed">
                        La Directiva WEEE revisada en 2023 establece objetivos de 
                        recolección del 55% para 2025 y nuevos requisitos de trazabilidad digital.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-green-500">
                    <h3 class="text-2xl font-bold text-black-800 mb-4">🇺🇸 Estados Unidos</h3>
                    <p class="text-gray-700 leading-relaxed">
                        32 estados tienen ahora legislación de e-waste, con California 
                        liderando la implementación de "derecho a reparar" para dispositivos electrónicos.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-emerald-500">
                    <h3 class="text-2xl font-bold text-emerald-800 mb-4">🌏 Mercados emergentes</h3>
                    <p class="text-gray-700 leading-relaxed">
                        India implementó reglas extendidas de responsabilidad del 
                        productor en 2023, mientras que Brasil lanzó su Sistema Nacional de Gestión de 
                        Residuos Electrónicos.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center bg-gradient-to-r from-green-600 to-emerald-600 rounded-3xl shadow-xl p-12 text-white">
            <h2 class="text-3xl font-bold mb-6">¡Únete al cambio!</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Cada acción cuenta para reducir el impacto de los desechos electrónicos en nuestro planeta.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3">
                    <span class="font-semibold">♻️ Recicla responsablemente</span>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3">
                    <span class="font-semibold">🔧 Repara antes de reemplazar</span>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-6 py-3">
                    <span class="font-semibold">🎁 Dona equipos funcionales</span>
                </div>
            </div>
        </section>
    </main>
    
    @include('layouts.footer')
</body>
</html>