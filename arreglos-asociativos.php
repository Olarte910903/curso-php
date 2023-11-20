<?php

// $edades = array (
//     "Carlos" => 18,
//     "Mr. Michi" => 3,
//     "Miguel" => 32
// );

// echo "La edad de Miguel es: " . $edades["Miguel"];
// echo "\nLa edad de Carlos es: {$edades["Carlos"]}";

$personas = array(
    "Miguel" => array(
        "Edad" => 32,
        "Apellido" => "Olarte"
    )
);

echo "Miguel, Edad: {$personas["Miguel"]["Edad"]}";
