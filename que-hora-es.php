<?php

// Leer datos de usuario

$segundos = readline("Ingresa el tiempo en segundos: ");

echo $segundos;

echo "\n";

$horas = (int) ($segundos / 3600);  //ojo al uso del casting y la precedencia

$segundos = (int) ($segundos % 3600);

$minutos = (int) ($segundos / 60);

$segundos = (int) ($segundos % 60);

echo $horas . " " . $segundos;

echo "\n";

echo "Son $horas horas, $minutos minutos, $segundos segundos";