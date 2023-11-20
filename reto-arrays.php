<?php

$escuela = array(
    array(
        "nombre" => "loki",
        "Ocupacion" => "Estudiante de programación",
        "Color" => "Negro y blanco",
        "Comidas" => array(
            "gusta" => "Urinary Dx",
            "no_gusta" => "pizza",
        ),
    ),
    array(
        "nombre" => "iris",
        "Ocupacion" => "dormir",
        "Color" => "amarillo blanco",
        "Comidas" => array(
            "gusta" => "donkat",
            "no_gusta" => "nueces",
        )
    ),
    array(
        "nombre" => "Frida",
        "Ocupacion" => "molestarle la existencia a los seres humanos",
        "Color" => "Negro y blanco",
        "Comidas" => array(
            "gusta" => "donkat",
            "no_gusta" => "ajo",
        )
    )
);

echo "Las comidas favoritas de {$escuela[0]["nombre"]} es {$escuela[0]["Comidas"]["gusta"]}";