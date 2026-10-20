<?php
header('Content-Type: text/html; charset=utf-8');

$nombre = $_POST["nombre"] ?? "";
$correo = $_POST["correo"] ?? "";
$equipo = $_POST["equipo"] ?? "";

$servicios = [
    "Diagnóstico de equipo" => 80,
    "Mantenimiento preventivo" => 150,
    "Reparación de computadora" => 250
];

echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>AXON</title>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "</head><body class='resultado'>";

echo "<div class='cuadro'>";
echo "<h1>AXON - Solicitud recibida</h1>";

echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
echo "<p><strong>Correo:</strong> " . htmlspecialchars($correo) . "</p>";
echo "<p><strong>Equipo a revisar:</strong> " . htmlspecialchars($equipo) . "</p>";

echo "<h2>Nuestros servicios</h2>";
echo "<ul>";
foreach ($servicios as $servicio => $precio) {
    echo "<li>" . $servicio . " - Bs " . $precio . "</li>";
}
echo "</ul>";

echo "<p class='firma'>Jared Aguirre Rosas</p>";
echo "</div></body></html>";
?>