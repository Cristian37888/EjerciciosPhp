<?php
// 1. Definición de Clase básica
class Usuario {
    // Constantes de clase
    public const ESTADO_ACTIVO = 1;
    public const ESTADO_INACTIVO = 0;

    // Atributos con visibilidad
    private string $nombre;
    protected int $edad;
    public string $email;

    // Constructor
    public function __construct(string $nombre, int $edad, string $email) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }

    // Destructor
    public function __destruct() {
        echo "Usuario {$this->nombre} destruido\n";
    }

    // Métodos
    public function getNombre(): string {
        return $this->nombre;
    }

    protected function validarEdad(): bool {
        return $this->edad >= 18;
    }
}

// 2. Herencia
class Empleado extends Usuario {
    private string $puesto;

    public function __construct(string $nombre, int $edad, string $email, string $puesto) {
        parent::__construct($nombre, $edad, $email);
        $this->puesto = $puesto;
    }

    public function getPuesto(): string {
        return $this->puesto;
    }
}

// 3. Abstracción
abstract class Animal {
    protected string $nombre;

    abstract public function hacerSonido(): string;

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
}

class Perro extends Animal {
    public function hacerSonido(): string {
        return "¡Guau!";
    }
}

// 4. Interfaces
interface Nadador {
    public function nadar(): string;
}

interface Corredor {
    public function correr(): string;
}

class Atleta implements Corredor, Nadador {
    public function nadar(): string {
        return "Nadando...";
    }

    public function correr(): string {
        return "Corriendo...";
    }
}

// 5. Características de PHP 8
class Producto {
    // Constructor Property Promotion
    public function __construct(
        public string $nombre,
        public float $precio,
        public ?string $descripcion = null
    ) {}

    // Named Arguments (al usar)
    // $producto = new Producto(nombre: "Laptop", precio: 999.99);

    // Match expression
    public function obtenerCategoriaPrecio(): string {
        return match(true) {
            $this->precio >= 1000 => "Premium",
            $this->precio >= 500 => "Intermedio",
            default => "Básico",
        };
    }

    // Nullsafe operator
    public function getDescripcionSegura(): ?string {
        return $this->descripcion?->trim();
    }
}

// Ejemplo de uso
$usuario = new Usuario("Juan", 25, "juan@email.com");
$empleado = new Empleado("María", 30, "maria@email.com", "Gerente");
$perro = new Perro();
$perro->setNombre("Rex");
$atleta = new Atleta();
$producto = new Producto("Laptop", 1299.99);

// Autocarga de clases (en la práctica, usar Composer)
spl_autoload_register(function ($clase) {
    include 'clases/' . $clase . '.php';
});
