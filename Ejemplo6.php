<?php
// 1. if-else
$edad = 18;
if ($edad >= 18) {
    echo "Es mayor de edad\n";
} elseif ($edad >= 13) {
    echo "Es adolescente\n";
} else {
    echo "Es menor de edad\n";
}

// 2. switch
$dia = "Lunes";
switch ($dia) {
    case "Lunes":
        echo "Primer día de la semana\n";
        break;
    case "Viernes":
        echo "¡Último día laboral!\n";
        break;
    default:
        echo "Otro día de la semana\n";
}

// 3. Operador ternario
$edad = 20;
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $mensaje . "\n";

// 4. Null coalesce
$nombre = $_GET['nombre'] ?? "Invitado";
echo $nombre . "\n";

// 5. Operador Spaceship
$a = 5;
$b = 10;
$resultado = $a <=> $b;
// Retorna: -1 si $a < $b, 0 si $a == $b, 1 si $a > $b
echo $resultado . "\n";

// 6. Operador de fusión null
$usuario = null;
$nombreUsuario = $usuario ?? "Anónimo";
