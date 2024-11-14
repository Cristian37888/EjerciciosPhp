<?php
// 3. tipos_datos.php

// Boolean
$verdadero = true;
$falso = false;

// Integer
$entero = 42;
$entero_negativo = -42;
$entero_octal = 0755; // Octal (comenzando con 0)
$entero_hex = 0xFF;   // Hexadecimal
$entero_binario = 0b1010; // Binario

// Float
$float = 3.14;
$float_cientifico = 3.14e3; // 3140

// String
$string_simple = 'Texto simple';
$string_variable = "El número es $entero";
$string_heredoc = <<<EOD
    Este es un texto
    multilinea usando
    heredoc
EOD;

// Null
$nulo = null;

// Array
$array_simple = [1, 2, 3];
$array_asociativo = [
    "nombre" => "Juan",
    "edad" => 25
];

// Object
class Persona {
    public $nombre;
}
$objeto = new Persona();

// Iterable
function mostrarIterable(iterable $items) {
    foreach ($items as $item) {
        echo $item . "\n";
    }
}

// NaN
$nan = NAN;
$nan_check = is_nan($nan);

// Conversión de datos
$string_numero = "42";
$numero_convertido = (int)$string_numero;
$float_convertido = (float)"3.14";
$string_convertido = (string)42;
$bool_convertido = (bool)""; // false

// Verificación de tipos
echo gettype($entero) . "\n";
var_dump(is_int($entero));
var_dump(is_string($string_simple));
var_dump(is_object($objeto));
var_dump(is_array($array_simple));
var_dump(is_null($nulo));
