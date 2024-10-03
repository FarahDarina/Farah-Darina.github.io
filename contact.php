<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        echo "<h1>Gracias, $nombre He recibido tu mensaje.</h1>";
    } else {
        echo "<h1>Lo siento te falta completar algunos campos, vuelve a intentarlo .</h1>";
    }
}
?>