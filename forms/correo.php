<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolectar los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    $subscribe = isset($_POST['subscribe']) ? 'Sí' : 'No';  // Si está marcado, 'Sí', si no, 'No'

    // Validar los datos (esto es solo un ejemplo de validación básica)
    if (empty($name) || empty($email) || empty($password)) {
        echo "Por favor, complete todos los campos obligatorios.";
    } else {
        // Mostrar los datos recibidos
        echo "<h2>Datos recibidos:</h2>";
        echo "<p><strong>Nombre:</strong> $name</p>";
        echo "<p><strong>Correo Electrónico:</strong> $email</p>";
        echo "<p><strong>Motivo:</strong> $subject</p>";
        echo "<p><strong>Comentarios:</strong> $message</p>";
        echo "<p><strong>Suscripción al boletín:</strong> $subscribe</p>";

        // Aquí puedes guardar los datos en una base de datos o enviarlos por correo
    }
}
?>
