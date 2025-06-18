<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <title>E-waste México - Residuos Electrónicos</title>
    <style>
        .chart-container {
            position: relative;
            height: 400px;
        }
        
        @media (max-width: 768px) {
            .chart-container {
                height: 300px;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 to-emerald-100 min-h-screen">
    @include('layouts.nav')
    
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <!-- Hero Section -->
        <div class="text-center mb-12 lg:mb-16">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-green-800 mb-4 lg:mb-6 leading-tight">
                Residuos Electrónicos en México
            </h1>
            <p class="text-lg sm:text-xl text-green-700 max-w-3xl mx-auto leading-relaxed px-4">
                Análisis de la generación y gestión de basura tecnológica en nuestro país
            </p>
        </div>

        <!-- Mexico Stats Hero -->
        <section class="mb-12 lg:mb-20">
            <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl lg:rounded-3xl shadow-xl text-white p-6 lg:p-12">
                <div class="grid lg:grid-cols-2 gap-6 lg:gap-8 items-center">
                    <div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4 lg:mb-6">México y los Residuos Electrónicos</h2>
                        <div class="space-y-3 lg:space-y-4">
                            <div class="flex items-center">
                                <div class="bg-white/20 rounded-full p-2 lg:p-3 mr-3 lg:mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xl lg:text-2xl font-bold">11.8 kg</p>
                                    <p class="text-green-100 text-sm lg:text-base">por persona al año</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-white/20 rounded-full p-2 lg:p-3 mr-3 lg:mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xl lg:text-2xl font-bold">1.5 millones</p>
                                    <p class="text-green-100 text-sm lg:text-base">de toneladas anuales</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-white/20 rounded-full p-2 lg:p-3 mr-3 lg:mr-4 flex-shrink-0">
                                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xl lg:text-2xl font-bold">3er lugar</p>
                                    <p class="text-green-100 text-sm lg:text-base">en el continente americano</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl lg:rounded-2xl p-6 lg:p-8 flex items-center justify-center min-h-[200px] lg:min-h-[250px]">
                        <div class="text-center">
                            <svg class="w-12 h-12 lg:w-16 lg:h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <p class="text-sm font-medium">Residuos electrónicos México</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Types Section with Chart -->
        <section class="mb-12 lg:mb-20">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-green-800 mb-3 lg:mb-4">
                    Tipos de Basura Tecnológica
                </h2>
                <p class="text-lg lg:text-xl text-gray-600 px-4">Distribución por categorías según Global E-waste Monitor 2024</p>
            </div>
            
            <div class="grid xl:grid-cols-2 gap-8 lg:gap-12 items-start">
                <!-- Chart -->
                <div class="bg-white rounded-2xl lg:rounded-3xl shadow-xl p-6 lg:p-8 order-2 xl:order-1">
                    <div class="chart-container">
                        <canvas id="wasteTypesChart"></canvas>
                    </div>
                </div>
                
                <!-- Categories List -->
                <div class="space-y-3 lg:space-y-4 order-1 xl:order-2">
                    <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-4 lg:p-6 border-l-4 border-green-500">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-2">
                            <h3 class="text-lg lg:text-xl font-bold text-green-800 mb-1 sm:mb-0">Equipos pequeños</h3>
                            <span class="text-xl lg:text-2xl font-bold text-green-600">35%</span>
                        </div>
                        <p class="text-gray-700 text-sm lg:text-base">Aspiradoras, microondas, herramientas eléctricas, dispositivos médicos</p>
                    </div>

                    <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-4 lg:p-6 border-l-4 border-emerald-500">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-2">
                            <h3 class="text-lg lg:text-xl font-bold text-green-800 mb-1 sm:mb-0">Equipos grandes</h3>
                            <span class="text-xl lg:text-2xl font-bold text-emerald-600">22%</span>
                        </div>
                        <p class="text-gray-700 text-sm lg:text-base">Lavadoras, secadoras, paneles solares</p>
                    </div>

                    <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-4 lg:p-6 border-l-4 border-teal-500">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-2">
                            <h3 class="text-lg lg:text-xl font-bold text-green-800 mb-1 sm:mb-0">Equipos de temperatura</h3>
                            <span class="text-xl lg:text-2xl font-bold text-teal-600">17%</span>
                        </div>
                        <p class="text-gray-700 text-sm lg:text-base">Refrigeradores, aires acondicionados, bombas de calor</p>
                    </div>

                    <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-4 lg:p-6 border-l-4 border-lime-500">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-2">
                            <h3 class="text-lg lg:text-xl font-bold text-green-800 mb-1 sm:mb-0">Equipos pequeños de TI</h3>
                            <span class="text-xl lg:text-2xl font-bold text-lime-600">15%</span>
                        </div>
                        <p class="text-gray-700 text-sm lg:text-base">Smartphones, GPS, computadoras, impresoras</p>
                    </div>

                    <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-4 lg:p-6 border-l-4 border-green-400">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-2">
                            <h3 class="text-lg lg:text-xl font-bold text-green-800 mb-1 sm:mb-0">Pantallas y monitores</h3>
                            <span class="text-xl lg:text-2xl font-bold text-green-500">8%</span>
                        </div>
                        <p class="text-gray-700 text-sm lg:text-base">Televisores, monitores, laptops, tablets</p>
                    </div>

                    <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-4 lg:p-6 border-l-4 border-emerald-400">
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-2">
                            <h3 class="text-lg lg:text-xl font-bold text-green-800 mb-1 sm:mb-0">Lámparas</h3>
                            <span class="text-xl lg:text-2xl font-bold text-emerald-500">3%</span>
                        </div>
                        <p class="text-gray-700 text-sm lg:text-base">LED, fluorescentes, lámparas de descarga</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Americas Comparison Chart -->
        <section class="mb-12 lg:mb-20">
            <div class="bg-white rounded-2xl lg:rounded-3xl shadow-xl p-6 lg:p-12">
                <div class="text-center mb-8 lg:mb-12">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-green-800 mb-3 lg:mb-4">
                        Generación de E-waste en América
                    </h2>
                    <p class="text-lg lg:text-xl text-gray-600 px-4">Comparativa de los principales países generadores</p>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="bg-gray-50 rounded-xl lg:rounded-2xl p-6 lg:p-8">
                        <div class="chart-container">
                            <canvas id="americasChart"></canvas>
                        </div>
                    </div>
                    
                    <div class="space-y-4 lg:space-y-6">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl lg:rounded-2xl p-4 lg:p-6">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                <div class="mb-2 sm:mb-0">
                                    <h3 class="text-xl lg:text-2xl font-bold">🇺🇸 Estados Unidos</h3>
                                    <p class="text-green-100 text-sm lg:text-base">Líder continental</p>
                                </div>
                                <div class="text-left sm:text-right">
                                    <p class="text-2xl lg:text-3xl font-bold">7.2</p>
                                    <p class="text-green-100 text-sm lg:text-base">millones de toneladas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white rounded-xl lg:rounded-2xl p-4 lg:p-6">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                <div class="mb-2 sm:mb-0">
                                    <h3 class="text-xl lg:text-2xl font-bold">🇧🇷 Brasil</h3>
                                    <p class="text-emerald-100 text-sm lg:text-base">Segundo lugar</p>
                                </div>
                                <div class="text-left sm:text-right">
                                    <p class="text-2xl lg:text-3xl font-bold">2.4</p>
                                    <p class="text-emerald-100 text-sm lg:text-base">millones de toneladas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-teal-500 to-teal-600 text-white rounded-xl lg:rounded-2xl p-4 lg:p-6">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                                <div class="mb-2 sm:mb-0">
                                    <h3 class="text-xl lg:text-2xl font-bold">🇲🇽 México</h3>
                                    <p class="text-teal-100 text-sm lg:text-base">Tercer lugar</p>
                                </div>
                                <div class="text-left sm:text-right">
                                    <p class="text-2xl lg:text-3xl font-bold">1.5</p>
                                    <p class="text-teal-100 text-sm lg:text-base">millones de toneladas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-100 rounded-xl lg:rounded-2xl p-4 lg:p-6">
                            <div class="text-center">
                                <p class="text-base lg:text-lg font-semibold text-gray-700 mb-2">Dato importante:</p>
                                <p class="text-gray-800 text-sm lg:text-base">En México solo el <span class="text-red-600 font-bold text-lg lg:text-xl">4%</span> de los residuos electrónicos se reciclan adecuadamente</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recycling Rate Chart -->
        <section class="mb-12 lg:mb-20">
            <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl lg:rounded-3xl shadow-xl text-white p-6 lg:p-12">
                <div class="text-center mb-8 lg:mb-12">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-3 lg:mb-4">Crisis del Reciclaje en México</h2>
                    <p class="text-lg lg:text-xl text-red-100 px-4">Solo 4% de residuos electrónicos se reciclan correctamente</p>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl lg:rounded-2xl p-6 lg:p-8">
                        <div class="chart-container">
                            <canvas id="recyclingChart"></canvas>
                        </div>
                    </div>
                    
                    <div class="space-y-4 lg:space-y-6">
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl lg:rounded-2xl p-4 lg:p-6">
                            <h3 class="text-xl lg:text-2xl font-bold mb-3 lg:mb-4">⚠️ El Problema</h3>
                            <ul class="space-y-2 text-red-100 text-sm lg:text-base">
                                <li>• 96% termina en basureros o sitios inadecuados</li>
                                <li>• 11.8 kg per cápita = peso de una Smart TV de 50"</li>
                                <li>• Contaminación de suelos y agua</li>
                                <li>• Pérdida de materiales valiosos</li>
                            </ul>
                        </div>
                        
                        <div class="bg-white/20 backdrop-blur-sm rounded-xl lg:rounded-2xl p-4 lg:p-6">
                            <h3 class="text-xl lg:text-2xl font-bold mb-3 lg:mb-4">💡 La Oportunidad</h3>
                            <ul class="space-y-2 text-red-100 text-sm lg:text-base">
                                <li>• Recuperación de metales preciosos</li>
                                <li>• Creación de empleos verdes</li>
                                <li>• Reducción de impacto ambiental</li>
                                <li>• Economía circular</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Regulations Section -->
        <section class="mb-12 lg:mb-20">
            <div class="text-center mb-8 lg:mb-12">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-green-800 mb-3 lg:mb-4">
                    Regulaciones Actuales
                </h2>
                <p class="text-lg lg:text-xl text-gray-600 px-4">Marco normativo internacional y regional</p>
            </div>
            
            <div class="space-y-4 lg:space-y-6">
                <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-6 lg:p-8 border-l-4 border-green-500">
                    <h3 class="text-xl lg:text-2xl font-bold text-green-800 mb-3 lg:mb-4">🌍 Global</h3>
                    <p class="text-gray-800 leading-relaxed text-sm lg:text-base">
                        La Convención de Basilea actualizó sus anexos en 2022 para incluir 
                        definiciones más específicas de e-waste peligroso y controlar mejor su comercio 
                        transfronterizo.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-6 lg:p-8 border-l-4 border-emerald-500">
                    <h3 class="text-xl lg:text-2xl font-bold text-emerald-800 mb-3 lg:mb-4">🇪🇺 Unión Europea</h3>
                    <p class="text-gray-800 leading-relaxed text-sm lg:text-base">
                        La Directiva WEEE revisada en 2023 establece objetivos de 
                        recolección del 55% para 2025 y nuevos requisitos de trazabilidad digital.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-6 lg:p-8 border-l-4 border-teal-500">
                    <h3 class="text-xl lg:text-2xl font-bold text-teal-800 mb-3 lg:mb-4">🇺🇸 Estados Unidos</h3>
                    <p class="text-gray-800 leading-relaxed text-sm lg:text-base">
                        32 estados tienen ahora legislación de e-waste, con California 
                        liderando la implementación de "derecho a reparar" para dispositivos electrónicos.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl lg:rounded-2xl shadow-lg p-6 lg:p-8 border-l-4 border-lime-500">
                    <h3 class="text-xl lg:text-2xl font-bold text-lime-800 mb-3 lg:mb-4">🌎 Mercados emergentes</h3>
                    <p class="text-gray-800 leading-relaxed text-sm lg:text-base">
                        India implementó reglas extendidas de responsabilidad del 
                        productor en 2023, mientras que Brasil lanzó su Sistema Nacional de Gestión de 
                        Residuos Electrónicos.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl lg:rounded-3xl shadow-xl p-8 lg:p-12 text-white">
            <h2 class="text-2xl lg:text-3xl font-bold mb-4 lg:mb-6">¡México necesita actuar ya!</h2>
            <p class="text-lg lg:text-xl mb-6 lg:mb-8 max-w-2xl mx-auto px-4">
                Con solo 4% de reciclaje, tenemos una enorme oportunidad de mejora para proteger nuestro medio ambiente.
            </p>
            <div class="flex flex-wrap justify-center gap-3 lg:gap-4">
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 lg:px-6 lg:py-3">
                    <span class="font-semibold text-sm lg:text-base">🏭 Crear más centros de reciclaje</span>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 lg:px-6 lg:py-3">
                    <span class="font-semibold text-sm lg:text-base">📚 Educación ambiental</span>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 lg:px-6 lg:py-3">
                    <span class="font-semibold text-sm lg:text-base">⚖️ Regulaciones más estrictas</span>
                </div>
            </div>
        </section>
    </main>
    
    @include('layouts.footer')

    <script>
        // Configuración responsiva para los charts
        const chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: window.innerWidth < 768 ? 'bottom' : 'right',
                    labels: {
                        padding: 15,
                        usePointStyle: true,
                        font: {
                            size: window.innerWidth < 768 ? 10 : 12
                        }
                    }
                }
            }
        };

        // Waste Types Pie Chart
        const ctx1 = document.getElementById('wasteTypesChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Equipos pequeños', 'Equipos grandes', 'Equipos de temperatura', 'Equipos pequeños de TI', 'Pantallas y monitores', 'Lámparas'],
                datasets: [{
                    data: [35, 22, 17, 15, 8, 3],
                    backgroundColor: [
                        '#10B981', // green-500
                        '#059669', // green-600
                        '#0D9488', // teal-600
                        '#65A30D', // lime-600
                        '#22C55E', // green-500
                        '#16A34A'  // green-600
                    ],
                    borderWidth: 3,
                    borderColor: '#ffffff'
                }]
            },
            options: {
                ...chartOptions,
                plugins: {
                    ...chartOptions.plugins,
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });

        // Americas Comparison Bar Chart
        const ctx2 = document.getElementById('americasChart').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Estados Unidos', 'Brasil', 'México'],
                datasets: [{
                    label: 'Millones de toneladas',
                    data: [7.2, 2.4, 1.5],
                    backgroundColor: [
                        '#10B981', // green-500
                        '#059669', // green-600
                        '#0D9488'  // teal-600
                    ],
                    borderColor: [
                        '#047857',
                        '#065F46',
                        '#0F766E'
                    ],
                    borderWidth: 2,
                    borderRadius: 8,
                    borderSkipped: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#E5E7EB'
                        },
                        ticks: {
                            callback: function(value) {
                                return value + ' Mt';
                            },
                            font: {
                                size: window.innerWidth < 768 ? 10 : 12
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: window.innerWidth < 768 ? 10 : 12
                            }
                        }
                    }
                }
            }
        });

        // Mexico Recycling Chart
        const ctx3 = document.getElementById('recyclingChart').getContext('2d');
        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: ['No reciclado', 'Reciclado'],
                datasets: [{
                    data: [96, 4],
                    backgroundColor: [
                        '#DC2626', // red-600 for not recycled
                        '#10B981'  // green-500 for recycled
                    ],
                    borderWidth: 4,
                    borderColor: 'rgba(255,255,255,0.8)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '60%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: 'white',
                            padding: 20,
                            usePointStyle: true,
                            font: {
                                size: window.innerWidth < 768 ? 12 : 14,
                                weight: 'bold'
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });

        // Actualizar charts al redimensionar la ventana
        window.addEventListener('resize', function() {
            // Los charts de Chart.js se redimensionan automáticamente
            // pero podemos actualizar la posición de las leyendas si es necesario
        });
    </script>
</body>
</html>