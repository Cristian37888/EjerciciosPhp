<?php
// 1. Try-Catch básico
try {
    $resultado = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// 2. Try-Catch con múltiples excepciones
function procesarArchivo(string $archivo) {
    try {
        if (!file_exists($archivo)) {
            throw new Exception("El archivo no existe");
        }
        if (!is_readable($archivo)) {
            throw new RuntimeException("El archivo no se puede leer");
        }
        // Procesar archivo...
    } catch (Exception $e) {
        echo "Error general: " . $e->getMessage() . "\n";
    } catch (RuntimeException $e) {
        echo "Error de ejecución: " . $e->getMessage() . "\n";
    } finally {
        echo "Este bloque siempre se ejecuta\n";
    }
}

// 3. Lanzar excepciones personalizadas
class MiExcepcion extends Exception {
    public function __construct($mensaje = "", $codigo = 0) {
        parent::__construct($mensaje, $codigo);
    }
}

try {
    throw new MiExcepcion("Este es un error personalizado");
} catch (MiExcepcion $e) {
    echo "Error personalizado: " . $e->getMessage() . "\n";
}
