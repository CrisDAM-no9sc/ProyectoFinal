<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'andar';

// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli($host, $user, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("A petado: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT nombre, apellido FROM usuarios";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar los datos
    while ($row = $result->fetch_assoc()) {
        echo 'Nombre: ' . htmlspecialchars($row["nombre"]) . ' Apellido: ' . htmlspecialchars($row["apellido"]) . '<br>';
    }
} else {
    echo "No hay resultados disponibles.";
}

$conn->close();
?>
