<?php
// 2. variables.php

// Activar tipado estricto
declare(strict_types=1);

// Constantes
const PI = 3.14159;
define("NOMBRE_APP", "Mi Aplicación");
define("VERSION", "1.0.0");

// Variables con tipado débil
$nombre = "Juan";           // PHP infiere que es string
$edad = 25;                // PHP infiere que es int
$precio = 19.99;           // PHP infiere que es float
$activo = true;            // PHP infiere que es boolean

// Variables con tipado fuerte (PHP 7+)
function sumarNumeros(int $a, int $b): int {
    return $a + $b;
}

// Demostración de tipado débil
$numero = "42";            // Es un string
$resultado = $numero + 8;  // PHP convierte automáticamente a int (50)

// Variables variables
$foo = "bar";
$bar = "Hola";
echo $$foo;  // Imprime "Hola"

// Ámbito de variables
$global = "Variable global";

function probarAmbito() {
    global $global;  // Acceder a variable global
    $local = "Variable local";
    echo $global . "\n";
    echo $local . "\n";
}