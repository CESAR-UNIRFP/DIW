<?php
session_start();

// Idioma por defecto
$lang = $_SESSION['lang'] ?? 'pt';

// Seleccionar el archivo JSON correspondiente
$jsonFile = "json/$lang.json";

if (!file_exists($jsonFile)) {
    $jsonFile = "json/es.json"; // Fallback al español
}
$contenido = json_decode(file_get_contents($jsonFile), true);

// Asignación de variables
$titulo = $contenido['titulo'] ?? 'Título por defecto';
$mensaje = $contenido['mensaje'] ?? 'Mensaje por defecto';
$cambio = $contenido['cambio'] ?? 'Select language';
$cambio2 = $contenido['cambio2'] ?? 'NUEVO TEXTO';

?>