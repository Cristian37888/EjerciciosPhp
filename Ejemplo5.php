<?php
declare(strict_types=1);

// 1. Función básica
function saludar(string $nombre): string {
    return "Hola, $nombre!";
}

// 2. Parámetros por valor
function incrementar(int $numero): int {
    return $numero + 1;
}

// 3. Parámetros por referencia
function incrementarReferencia(int &$numero): void {
    $numero++;
}

// 4. Parámetros por defecto
function configurar(string $nombre = "Usuario", int $edad = 18): string {
    return "Nombre: $nombre, Edad: $edad";
}

// 5. Fuerte tipado
function sumar(int $a, int $b): int {
    return $a + $b;
}

// 6. Argumentos variables
function sumarTodos(...$numeros): int {
    return array_sum($numeros);
}

// 7. Return con tipo de dato mixto
function obtenerValor(bool $esNumero): int|string {
    return $esNumero ? 42 : "cuarenta y dos";
}

// Ejemplos de uso:
echo saludar("Juan") . "\n";

$numero = 5;
incrementarReferencia($numero);
echo $numero . "\n"; // Muestra 6

echo configurar("María", 25) . "\n";
echo configurar() . "\n"; // Usa valores por defecto

echo sumarTodos(1, 2, 3, 4, 5) . "\n"; // Suma todos los argumentos
