<?php
// 4. arrays.php

// Arrays Indexados
$frutas = ["manzana", "pera", "plátano"];
$numeros = array(1, 2, 3, 4, 5);

// Acceso a arrays indexados
echo $frutas[0] . "\n";  // manzana
echo $numeros[2] . "\n"; // 3

// Arrays Asociativos
$persona = [
    "nombre" => "María",
    "edad" => 30,
    "ciudad" => "Madrid"
];

// Acceso a arrays asociativos
echo $persona["nombre"] . "\n";

// Arrays Multidimensionales
$matriz = [
    ["a", "b", "c"],
    ["d", "e", "f"],
    ["g", "h", "i"]
];

$estudiantes = [
    "grupo_a" => [
        ["nombre" => "Juan", "nota" => 8],
        ["nombre" => "Ana", "nota" => 9]
    ],
    "grupo_b" => [
        ["nombre" => "Pedro", "nota" => 7],
        ["nombre" => "María", "nota" => 10]
    ]
];

// Acceso a arrays multidimensionales
echo $matriz[0][1] . "\n";  // b
echo $estudiantes["grupo_a"][0]["nombre"] . "\n";  // Juan

// Concatenación de valores
$nombre_completo = $persona["nombre"] . " García";

// Operadores de array
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

// Unión de arrays
$union = $array1 + $array2;

// Operador de comparación
var_dump($array1 == $array2);  // Compara valores
var_dump($array1 === $array2); // Compara valores y tipos

// Funciones útiles de arrays
$longitud = count($frutas);
array_push($frutas, "naranja");
$primer_elemento = array_shift($numeros);
sort($frutas);
rsort($numeros);

/* Comentarios:
   Este es un comentario
   multilinea */
