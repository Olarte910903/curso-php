<?php

//Casting: es cuando forzamos que un tipo de dato se convierta en otro tipo de dato

$numero = "2";

var_dump($numero);

$numero = (int) $numero;

var_dump($numero);

$dias = 5.89;

var_dump($dias);

$dias = (int) $dias;

var_dump($dias);

$banderita = false;

var_dump($banderita);

$banderita_num_bool = 1;

$banderita_num_bool = (bool) $banderita_num_bool;

var_dump($banderita_num_bool);