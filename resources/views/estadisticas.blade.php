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
        <p><b>Tipos de Basura tecnológica:</b>
Equipos de intercambio de temperatura (17%): Refrigeradores, aires acondicionados, bombas de calor.  
Pantallas y monitores (8%): Televisores, monitores, laptops, tablets.  
Equipos grandes (22%): Lavadoras, secadoras, paneles solares.  
Equipos pequeños (35%): Aspiradoras, microondas, herramientas eléctricas, dispositivos médicos.  
Equipos pequeños de TI (15%): Smartphones, GPS, computadoras, impresoras.  
Lámparas (3%): LED, fluorescentes, lámparas de descarga (Forti et al., 2023).  </p>

<br>

        <p><b>Regulaciones Actuales:</b>
           Global: La Convención de Basilea actualizó sus anexos en 2022 para incluir definiciones más específicas de e-waste peligroso y 
           controlar mejor su comercio transfronterizo.  
           Unión Europea: La Directiva WEEE revisada en 2023 establece objetivos de recolección del 55% para 2025 y nuevos requisitos de trazabilidad digital.  
           Estados Unidos: 32 estados tienen ahora legislación de e-waste, con California liderando la implementación de "derecho a reparar" para dispositivos electrónicos.  
           Mercados emergentes: India implementó reglas extendidas de responsabilidad del productor en 2023, mientras que Brasil lanzó su Sistema Nacional de Gestión de Residuos Electrónicos (Xavier et al., 2023).  </p>

        <br>

        <p>Cada mexicano genera en promedio 11.8 kilogramos de residuos electrónicos al año, algo así como el peso de una Smart TV de 50 pulgadas por persona, según el Monitor Global E-Waste 2024. El informe elaborado 
            por el Instituto de las Naciones Unidas para la Formación Profesional y la Investigación (UNITAR, por sus siglas en inglés), establece que nuestro país genera anualmente 1.5 millones de toneladas de desechos tecnológicos, 
            y sólo el 4 por ciento se recicla. De esta forma, México se coloca en el tercer lugar en el continente americano, en generación de basura electrónica, sólo por debajo de Brasil y Estados Unidos,
            que producen 2.4 millones de toneladas y 7.2 millones de toneladas al año, respectivamente.</p>

    </main>
    @include('layouts.footer')
</body>
</html>