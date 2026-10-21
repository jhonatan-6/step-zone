<?php
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $mascota = $_POST["mascota"];

  echo "<h1>Turno reservado en Veterinaria Patitas</h1>";
  echo "<p>Nombre completo: $nombre</p>";
  echo "<p>Correo electrónico: $correo</p>";
  echo "<p>Información de tu mascota: $mascota</p>";

  $servicios = [
    "Consulta general - Bs 60",
    "Vacuna antirrábica - Bs 40",
    "Baño y corte - Bs 50"
  ];

  echo "<h2>Servicios de la veterinaria</h2>";
  echo "<ul>";
  foreach ($servicios as $servicio) {
    echo "<li>$servicio</li>";
  }
  echo "</ul>";

  echo "<p>Te atiende Jhonatan Pastor Quispe Samo.</p>";
?>