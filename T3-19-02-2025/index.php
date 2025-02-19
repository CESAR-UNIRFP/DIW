<?php
session_start();

// Si se selecciona un idioma, guardarlo en sesión
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    header("Location: contenido.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selecciona tu idioma</title>
</head>
<body>
    <h2>Selecciona tu idioma</h2>
    <a href="?lang=es">Español</a> | 
    <a href="?lang=en">English</a>
    <a href="?lang=pt">Portugues</a>
</body>
</html>