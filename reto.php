<?php

$horas = readline("Ingrese las horas: ");
$minutos = readline("Ingrese los minutos: ");
$segundos = readline("Ingrese los segundos: ");

$tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

echo "Este tiempo equivale a $tiempo_en_segundos segundos \n";