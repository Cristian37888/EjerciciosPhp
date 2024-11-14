<?php
// 1. impresion.php

// echo vs print para imprimir
echo "1. Usando echo:\n";
echo "Echo puede imprimir ", "múltiples ", "argumentos\n"; // Echo puede tomar múltiples parámetros
print "2. Usando print:\n";
print "Print solo acepta un argumento\n"; // Print solo acepta un parámetro

// var_dump vs print_r impresion en pantalla
$array = [
    "nombre" => "Juan",
    "edad" => 25,
    "hobbies" => ["lectura", "deportes"]
];

echo "\n3. Usando var_dump (muestra tipo y estructura):\n";
var_dump($array); // Muestra tipo de datos y estructura detallada

echo "\n4. Usando print_r (más legible):\n";
print_r($array); // Muestra estructura más simple

// Diferencias principales:
// - var_dump muestra el tipo de dato y la longitud de los strings
// - print_r es más legible pero no muestra tipos de datos
// - var_dump es mejor para debugging
// - print_r es mejor para visualización