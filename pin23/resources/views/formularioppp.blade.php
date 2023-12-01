<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionales si los necesitas */
        .centered-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ajusta la altura según tu necesidad */
        }
    </style>
</head>

<body class="bg-gray-100">
    <div>
        <div class="mx-4 my-50  mt-4">
            <div class=" justify-center ">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-6">
                        <h5 class="text-center font-bold mb-4">Universidad Peruana Unión<br>Facultad de Ingeniería y
                            Arquitectura<br>EP Ing. de Sistemas</h5>
                        <p class="text-center">Evaluación de Prácticas Preprofesionales</p>
                        <!-- Aquí puedes agregar más contenido si lo necesitas -->
                        <form class="my-4">
                            <ul>
                                <li class="py-2">
                                    <span class="font-bold">Nombre:</span>
                                    <span class="ml-2">Juan Pérez</span>
                                </li>
                                <li class="py-2">
                                    <span class="font-bold">Fecha:</span>
                                    <span class="ml-2">2023-11-26</span>
                                </li>
                                <li class="py-2">
                                    <span class="font-bold">Empresa:</span>
                                    <span class="ml-2">Empresa X</span>
                                </li>
                                <li class="py-2">
                                    <span class="font-bold">Tipo de Evaluación:</span>
                                    <span class="ml-2">Evaluación 1</span>
                                </li>
                                <li class="py-2">
                                    <span class="font-bold">Nombre del Supervisor:</span>
                                    <span class="ml-2">David Mamani Pari</span>
                                </li>
                                <!-- Puedes agregar más elementos de lista para más datos -->
                            </ul>

                                <div class="bg-gray-100 p-6 rounded-lg">
                                    <h2 class="text-lg font-bold mb-4">Instrucciones:</h2>
                                    <ol class="list-decimal pl-6">
                                        <li class="mb-2">Este instrumento permitirá evaluar en el estudiante el logro de sus competencias de sus prácticas preprofesionales.</li>
                                        <li class="mb-2">Marque según su evaluación de [1 – 5] o NA en la columna de la derecha, considere:</li>
                                        <ul class="list-disc pl-6">
                                            <li class="mb-2">5= sobresaliente</li>
                                            <li class="mb-2">4= satisfactorio</li>
                                            <li class="mb-2">3= aceptable</li>
                                            <li class="mb-2">2= Mínimo</li>
                                            <li class="mb-2">1= Carece</li>
                                            <li class="mb-2">NA= No aplica</li>
                                        </ul>
                                        <!-- Puedes agregar más instrucciones según sea necesario -->
                                    </ol>
                                </div>
                                <hr class=" my-4">

                                <div class="overflow-x-auto">
                                    <h2 class="text-lg font-bold mb-1 mt-5">Evaluación de desempeño:</h2>
                                    <table class="min-w-full bg-white border border-gray-300">
                                        <thead>
                                            <tr>
                                                <th class="border border-gray-300">N°</th>
                                                <th class="border border-gray-300 px-4 py-2">ÍTEMS</th>
                                                <th class="border border-gray-300 px-4 py-2" colspan="6">Nivel en que se ha manifestado la competencia</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2" colspan="2">DIMENSION: REDES INFORMATICAS Y TELECOMUNICACIONES</td>
                                                <td class="border border-gray-300 px-4 py-2">1</td>
                                                <td class="border border-gray-300 px-4 py-2">2</td>
                                                <td class="border border-gray-300 px-4 py-2">3</td>
                                                <td class="border border-gray-300 px-4 py-2">4</td>
                                                <td class="border border-gray-300 px-4 py-2">5</td>
                                                <td class="border border-gray-300 px-4 py-2">NA</td>

                                            </tr>

                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">1</td>
                                                <td class="border border-gray-300 px-4 py-2">Es capaz para comprender y describir los roles de la capa de protocolos (TCP/IP­ - OSI)</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>

                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">2</td>
                                                <td class="border border-gray-300 px-4 py-2">Ha desarrollado la Capacidad para diseñar, calcular y aplicar las máscaras de red y el direccionamiento del IPv4</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">3</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para construir una red de datos usando los comandos de configuración básica de un switch administrable</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">4</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para comprender y describir el propósito de un router, sus tablas de enrutamiento y el proceso de búsqueda de las rutas</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">5</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para comprender y crear redes lógicamente separadas (VLAN)</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">6</td>
                                                <td class="border border-gray-300 px-4 py-2">Es capaz de comprender, configurar y solucionar problemas relacionados al protocolo de configuración dinámica de host (DHCP) para las redes IPv4</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">7</td>
                                                <td class="border border-gray-300 px-4 py-2">Entiende como configurar las listas de control de acceso (ACL) a los recursos de la red para las redes IPv4</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2" colspan="2">DIMENSIÓN: INGENIERÍA DE SOFTWARE</td>
                                                <td class="border border-gray-300 px-4 py-2">1</td>
                                                <td class="border border-gray-300 px-4 py-2">2</td>
                                                <td class="border border-gray-300 px-4 py-2">3</td>
                                                <td class="border border-gray-300 px-4 py-2">4</td>
                                                <td class="border border-gray-300 px-4 py-2">5</td>
                                                <td class="border border-gray-300 px-4 py-2">NA</td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">8</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para describir la especificación técnica del proyecto</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">9</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad de aplicar estándares (metodologías ágiles, RUP u otra) para la construcción del software</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">10</td>
                                                <td class="border border-gray-300 px-4 py-2">Es capaz de evaluar sistemas de software en función a un criterio de calidad</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">11</td>
                                                <td class="border border-gray-300 px-4 py-2">Es capaz de programar algún lenguaje de programación emergente al negocio</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">12</td>
                                                <td class="border border-gray-300 px-4 py-2">Cuenta con la capacidad para diseñar la capa interfaz de su aplicación con algún entorno (web, escritorio, móvil)</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">13</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para implementar algún patrón de programación en su arquitectura de software</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">14</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene los conceptos y metodologías para integrar distintas aplicaciones Empresariales mediante las arquitecturas Distribuidas (RMI, CORBA, WEB SERVICES, SOAP,RPC,JSON)</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">15</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para resolver un problema identificar su procedimiento y diseñar el algoritmo de solución.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">16</td>
                                                <td class="border border-gray-300 px-4 py-2">Es capaz de utilizar estructura de datos como arraylist, List, u otras.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">17</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad de usar el lenguaje estructura de consultas SQL</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">18</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para realizar respaldos y recuperación de datos de una base de datos</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">19</td>
                                                <td class="border border-gray-300 px-4 py-2">Es capaz de usar el lenguaje avanzado de la base de datos como Store procedure, cursores o Triggers</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">20</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para modelar conceptualmente y físicamente la base de datos desde los paradigmas relacional, entidad relación y  UML</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">21</td>
                                                <td class="border border-gray-300 px-4 py-2">Puede desarrollar el proceso ETL</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">22</td>
                                                <td class="border border-gray-300 px-4 py-2">Conocimientos básicos de inteligencia de negocios</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2" colspan="2">DIMENSIÓN: GESTIÓN DE TECNOLOGÍAS DE INFORMACIÓN</td>
                                                <td class="border border-gray-300 px-4 py-2">1</td>
                                                <td class="border border-gray-300 px-4 py-2">2</td>
                                                <td class="border border-gray-300 px-4 py-2">3</td>
                                                <td class="border border-gray-300 px-4 py-2">4</td>
                                                <td class="border border-gray-300 px-4 py-2">5</td>
                                                <td class="border border-gray-300 px-4 py-2">NA</td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">23</td>
                                                <td class="border border-gray-300 px-4 py-2">Tiene la capacidad para usar algunos de los marcos de referencias como ISOs, CMMI, COBIT y aplicarlos en el proceso de auditoría informática</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">24</td>
                                                <td class="border border-gray-300 px-4 py-2">Puede construir, configurar, mantener y evaluar servicios tecnológicos aplicando el marco de referencia de ITIL</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">25</td>
                                                <td class="border border-gray-300 px-4 py-2">Formula y planifica un proyecto informático basándose en los principios de la gestión</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">26</td>
                                                <td class="border border-gray-300 px-4 py-2">Monitorea y controla el proyecto considerando las métricas de la gestión</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">27</td>
                                                <td class="border border-gray-300 px-4 py-2">Evalúa y justifica el rendimiento del proyecto cuantitativamente</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2" colspan="2">DIMENSIÓN: COMPETENCIAS TRANSVERSAL</td>
                                                <td class="border border-gray-300 px-4 py-2">1</td>
                                                <td class="border border-gray-300 px-4 py-2">2</td>
                                                <td class="border border-gray-300 px-4 py-2">3</td>
                                                <td class="border border-gray-300 px-4 py-2">4</td>
                                                <td class="border border-gray-300 px-4 py-2">5</td>
                                                <td class="border border-gray-300 px-4 py-2">NA</td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">28</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para expresar de manera oral hechos o ideas en forma clara, coherente y congruente.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">29</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para establecer y mantener relaciones cordiales y/o redes de contacto con las personas con quienes interactúa en los diferentes contextos.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">30</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para proponer soluciones en situaciones reales e identificar alternativas en contraposición con los métodos y enfoques tradicionales, para la toma de decisiones asumiendo riesgos</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">31</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para establecer horarios, cumplir con los mismos y utilizar el tiempo adecuadamente.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">32</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad de adaptación a las demandas y necesidades cambiantes del entorno, realizando los ajustes o modificaciones ante nuevas situaciones, personas y procesos.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">33</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad y disposición para participar como miembro integrado de un equipo, trabaja en forma colaborativa con otros. Actúa junto con otros en forma interdependiente e interdisciplinaria, compartiendo funciones y responsabilidades.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">34</td>
                                                <td class="border border-gray-300 px-4 py-2">Habilidad para influir, orientar o convencer con efectividad a las  personas, para conseguir que apoyen sus ideas o proyectos y lograr su compromiso para lograr el desarrollo de los objetivos.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">35</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para analizar y generar alternativas, con el fin de elegir la más adecuada y garantizar su ejecución en el momento oportuno.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">36</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para trabajar en oposición y/o bajo presión, concentrándose en los obstáculos y superándolos, manteniendo firme su carácter.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">37</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad para actuar conforme a los principios cristianos, a la legislación, a las normas sociales, organizacionales, con respecto a las actividades relacionadas con el ejercicio de su profesión.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">37</td>
                                                <td class="border border-gray-300 px-4 py-2">Capacidad e interés para actualizarse con los nuevos desarrollos de la profesión. Busca su desarrollo activo en lo personal y profesional.</td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>
                                                <td class="border border-gray-300 px-4 py-2"><input type="checkbox" id="miCheckbox" name="miCheckbox" ></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class=" bg-white rounded-xl shadow-md overflow-x-auto">

                                    <h2 class="text-lg font-bold mb-1 mt-5">Resaltar los aspectos generales que el estudiante debe mejorar:</h2>

                                    <div>
                                     <textarea
                                       class="w-full p-2 mt-2 rounded border border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400"
                                       rows="4"
                                       placeholder="Add your comment..."
                                     ></textarea>
                                    </div>



                                  </div>
                    </div>

                      <div class="flex justify-center">

                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Guardar
                        </button>

                    </div>
                </div>
            </div>
            <script>
                document.getElementById("guardar").addEventListener("click", function() {
                    Swal.fire({
                        title: "¿Estás seguro de Guardar?",
                        text: "No podrás revertir esto",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Sí, guardar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Salir",
                                icon: "success"
                            });

                        }
                    });
                });
            </script>

        </div>
    </div>
</body>

</html>
