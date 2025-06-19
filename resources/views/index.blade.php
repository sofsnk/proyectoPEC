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
            <h1 class="text-5xl font-bold text-green-800 mb-6 leading-tight">
                Basura Tecnológica
            </h1>
            <p class="text-xl text-green-700 max-w-3xl mx-auto leading-relaxed">
                Conoce el impacto ambiental de los desechos electrónicos y cómo podemos contribuir a un futuro más
                sostenible
            </p>
        </div>

        <!-- What is E-waste Section -->
        <section class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0 min-h-[400px]">
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-green-800 mb-6">
                            ¿Qué es la basura tecnológica?
                        </h2>
                        <p class="text-green leading-relaxed text-lg mb-6">
                            La basura electrónica, a menudo conocida como E-waste es un tipo de basura generada por la
                            electrónica en el mundo industrial, un tipo de basura que se genera cuando un dispositivo ya
                            sea teléfonos, tablets, computadoras, impresoras y entre una gran variedad de estos llegan
                            al fin de su vida útil dejando rastros de contaminación.
                        </p>
                        <p class="text-green leading-relaxed text-lg">
                            Normalmente contiene una serie de componentes peligrosos que tienen un gran impacto al medio
                            ambiente afectando incluso a la salud humana ya que al no tener un lugar para su reciclaje o
                            desecho terminan contaminando.
                        </p>
                    </div>
                    <div class="relative">
                        <img src="{{ Storage::url('images/index/basura_tecnologica.jpg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Causes Section -->
        <section class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0 min-h-[400px]">
                    <div class="relative">
                        <img src="{{ Storage::url('images/index/basura_tecnologica2.jpeg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center order-1 lg:order-2">
                        <h2 class="text-3xl font-bold text-green-800 mb-6">
                            Causas de generación de la Basura Tecnológica
                        </h2>
                        <p class="text-green leading-relaxed text-lg mb-6">
                            Generalmente la basura tecnológica se genera a partir del fin de la vida útil de un
                            dispositivo electrónico donde este no es depositado en un sitio adecuado, donado
                            o vendido para su reparación, esta llega a zonas como ríos, basureros o quedar
                            almacenados en lugares no adecuados.
                        </p>
                        <p class="text-green leading-relaxed text-lg">
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
                <h2 class="text-4xl font-bold text-green-800 mb-4">
                    Tipos de Basura Tecnológica
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative h-48">
                        <img src="{{ Storage::url('images/index/aire_acondicionado.jpeg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Equipos de temperatura</h3>
                        <p class="text-gray-600 mb-2"><strong>17%</strong></p>
                        <p class="text-green">Refrigeradores, aires acondicionados, bombas de calor</p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative h-48">
                        <img src="{{ Storage::url('images/index/monitores.jpeg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Pantallas y monitores</h3>
                        <p class="text-gray-600 mb-2"><strong>8%</strong></p>
                        <p class="text-green">Televisores, monitores, laptops, tablets</p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative h-48">
                        <img src="{{ Storage::url('images/index/lavadoras.jpeg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Equipos grandes</h3>
                        <p class="text-gray-600 mb-2"><strong>22%</strong></p>
                        <p class="text-green">Lavadoras, secadoras, paneles solares</p>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative h-48">
                        <img src="{{ Storage::url('images/index/lamparas.jpeg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-green-800 mb-3">Lámparas</h3>
                        <p class="text-gray-600 mb-2"><strong>3%</strong></p>
                        <p class="text-green">LED, fluorescentes, lámparas de descarga</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Environmental Impact Section -->
        <section class="mb-20">
            <div
                class="bg-gradient-to-r from-green-800 to-emerald-700 rounded-3xl shadow-xl text-white overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0 min-h-[400px]">
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold mb-6">
                            Impactos Ambientales
                        </h2>
                        <p class="leading-relaxed text-lg mb-6 text-green-100">
                            La basura tecnológica contiene metales pesados
                            (plomo y mercurio principalmente), sustancias tóxicas lo que sumado al manejo
                            inadecuado contamina suelos y aguas subterráneas.
                        </p>
                        <p class="leading-relaxed text-lg text-green-100">
                            Si estos se queman contamina
                            el aire y tienen una significante contribución a la huella de carbono global y
                            degradación de ecosistemas.
                        </p>
                    </div>
                    <div class="relative">
                        <img src="{{ Storage::url('images/index/impacto.jpg') }}" alt=""
                            class="absolute inset-0 w-full h-full object-cover">
                        <!-- Overlay sutil para mejorar la legibilidad si fuera necesario -->
                        <div class="absolute inset-0 bg-gradient-to-l from-transparent to-green-800/20"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="mb-20">
            <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-green-800 mb-4">
                        Global E-waste Monitor 2024
                    </h2>
                    <p class="text-xl text-gray-600">Estadísticas globales sobre residuos electrónicos</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-4xl font-bold text-green-600 mb-2">62Mt</div>
                        <div class="text-green-800 font-semibold mb-2">Generación global 2022</div>
                        <div class="text-gray-600 text-sm">Proyección 82 Mt para 2030</div>
                    </div>

                    <div class="text-center p-6 bg-emerald-50 rounded-2xl">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">5%</div>
                        <div class="text-emerald-800 font-semibold mb-2">Crecimiento anual</div>
                        <div class="text-gray-600 text-sm">2.6 Mt por año</div>
                    </div>

                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-4xl font-bold text-green-600 mb-2">22.3%</div>
                        <div class="text-green-800 font-semibold mb-2">Tasa de reciclaje</div>
                        <div class="text-gray-600 text-sm">Recolectado y reciclado formalmente</div>
                    </div>

                    <div class="text-center p-6 bg-emerald-50 rounded-2xl">
                        <div class="text-4xl font-bold text-emerald-600 mb-2">$62B</div>
                        <div class="text-emerald-800 font-semibold mb-2">Valor perdido</div>
                        <div class="text-gray-600 text-sm">En materiales recuperables</div>
                    </div>

                    <div class="text-center p-6 bg-green-50 rounded-2xl">
                        <div class="text-4xl font-bold text-green-600 mb-2">26kg</div>
                        <div class="text-green-800 font-semibold mb-2">Líder per cápita</div>
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
                <h2 class="text-4xl font-bold text-green-800 mb-4">
                    Regulaciones Actuales
                </h2>
                <p class="text-xl text-gray-600">Marco normativo internacional y regional</p>
            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-green-500">
                    <h3 class="text-2xl font-bold text-green-800 mb-4">🌍 Global</h3>
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
                    <h3 class="text-2xl font-bold text-green-800 mb-4">🇺🇸 Estados Unidos</h3>
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
        <section
            class="text-center bg-gradient-to-r from-green-600 to-emerald-600 rounded-3xl shadow-xl p-12 text-white">
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
