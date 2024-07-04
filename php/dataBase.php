<?php
$servidor = 'mysql:host=localhost;dbname=aeroliea';
$usuario = 'root';
$password = '';

try {
    $conn = new PDO($servidor, $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión OK con PDO"; // Puedes dejar este mensaje o comentarlo
} catch (PDOException $e) {
    echo "Conexión fallida - ERROR de conexión: " . $e->getMessage();
}
?>
