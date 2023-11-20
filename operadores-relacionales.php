<?php

// == Igual

$a = 5;
$b = 5;

var_dump($a == $b);

//  === Idéntico

$c = "5";

var_dump($a === $c);

//!= Diferente

var_dump($a != $b);

// !== Diferente compara tipos

var_dump($a !== $c);

// Otros operadores: < > <= >=

// <=> Nave espacial

echo 2 <=> 1; // 1
echo 1 <=> 1; // 0
echo -50 <=> 1; // -1

// ?? Fusión de null

$edad = 32;

echo $edad_mia ?? $edad; // Si la variable de la izquierda no está definida, usa la de la derecha