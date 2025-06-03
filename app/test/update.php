<?php

require_once '../models/Mascota.php';

$mascota = new Mascota();

$parametros = [
  "idpropietario" => 1,
  "tipo"          => "Gato",
  "nombre"        => "Chifu",
  "color"         => "gris con blanco",
  "genero"        => "macho",
  "idmascota"     => 5,
];

$num = $mascota->update($parametros);
var_dump($num);