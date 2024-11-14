<?php
// 1. Inclusión de archivos
// config.php
/*
<?php
const DB_HOST = "localhost";
const DB_USER = "root";
?>
*/

// funciones.php
/*
<?php
function conectarDB() {
    return "Conectado a la BD";
}
?>
*/

// Diferentes formas de incluir archivos
include 'config.php';        // Incluye y advierte si no existe
require 'config.php';        // Incluye y genera error fatal si no existe
include_once 'config.php';   // Incluye solo una vez
require_once 'config.php';   // Incluye solo una vez (recomendado)

// 2. Variables de Servidor
// Formulario HTML ejemplo
/*
<form action="procesar.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre">
    <input type="file" name="archivo">
    <input type="submit" value="Enviar">
</form>
*/

// procesar.php
session_start();

// $_POST - Datos enviados por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    echo "Nombre recibido: $nombre\n";
}

// $_GET - Datos en la URL
$id = $_GET['id'] ?? '';
echo "ID recibido: $id\n";

// $_FILES - Archivos subidos
if (isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    $ruta_temporal = $archivo['tmp_name'];
    // Mover archivo
    move_uploaded_file($ruta_temporal, "uploads/$nombre");
}

// $_REQUEST - Combina $_GET, $_POST y $_COOKIE
$parametro = $_REQUEST['parametro'] ?? '';

// $_SESSION - Variables de sesión
$_SESSION['usuario'] = "juan";
echo $_SESSION['usuario'] ?? '';

// $_COOKIE - Cookies
setcookie("preferencia", "tema_oscuro", time() + 3600);
$preferencia = $_COOKIE['preferencia'] ?? '';
