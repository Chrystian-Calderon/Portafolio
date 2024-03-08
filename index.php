<?php
$idioma_preferido = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Redirigir según el idioma
if ($idioma_preferido == 'es') {
    // Redirigir a la carpeta en español
    header('Location: ./en/');
    exit();
} else {
    // Redirigir a la carpeta en inglés (predeterminado)
    header('Location: ./en/');
    exit();
}
?>