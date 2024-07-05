<?php
include 'dataBase.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verificar si el correo ya está registrado
    $check_email_sql = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check_email_sql->bind_param("s", $email);
    $check_email_sql->execute();
    $check_email_sql->store_result();

    if ($check_email_sql->num_rows > 0) {
        echo "Este correo electrónico ya está registrado.";
    } else {
        if ($password == $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

            if ($sql) {
                $sql->bind_param("sss", $username, $email, $hashed_password);

                if ($sql->execute()) {
                    echo "¡Registro exitoso!";
                } else {
                    echo "Error: No se pudo ejecutar la consulta.";
                }
            } else {
                echo "Error: No se pudo preparar la consulta.";
            }

            $sql->close();
        } else {
            echo "¡Las contraseñas no coinciden!";
        }
    }

    $check_email_sql->close();
} else {
    echo "Método de solicitud inválido.";
}

$conn->close();
?>
