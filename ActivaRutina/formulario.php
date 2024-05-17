<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activa_rutina";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correo_electronico'];
    $mensaje = $_POST['mensaje'];

    // Validar que los datos no estén vacíos
    if (!empty($nombre_completo) && !empty($correo_electronico) && !empty($mensaje)) {
        // Preparar y vincular la consulta SQL
        $stmt = $conn->prepare("INSERT INTO formulario (nombre_completo, correo_electronico, mensaje) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre_completo, $correo_electronico, $mensaje);

        // Ejecutar la consulta SQL
        if ($stmt->execute()) {
            // Mensaje de éxito si la consulta se ejecutó correctamente
            echo "Nuevo registro creado con éxito";
        } else {
            // Mensaje de error si la consulta falló
            echo "Error: " . $stmt->error;
        }

        $stmt->close(); // Cerrar la consulta preparada
    } else {
        // Mensaje si hay campos vacíos en el formulario
        echo "Todos los campos son obligatorios.";
    }
} else {
    // Mensaje si la solicitud no es POST
    echo "Solicitud inválida.";
}

$conn->close(); // Cerrar la conexión a la base de datos
echo '<script>setTimeout(function() { window.location.href = "index.php"; }, 3000);</script>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
    .mensaje-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(330deg, #f55940, #eb8c48);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        
        .mensaje-box {
            background-color: white;
            padding: 20px;
            border-radius: 1.2rem;
            text-align: center;
        }
        
        .mensaje-box p {
            color: #3c763d;
            margin: 0;
        }
</style>
<body>
    <!-- Mostrar mensaje de éxito si el formulario se ha enviado -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($nombre_completo) && !empty($correo_electronico) && !empty($mensaje)) : ?>
    <div class="mensaje-overlay">
        <div class="mensaje-box">
            <p class="mensaje-exito">Mensaje enviado exitosamente. Nos pondremos en contacto contigo pronto.</p>
        </div>
    </div>
    <?php endif; ?>
</body>
</html>
