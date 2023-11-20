<?php

//Las funciones de array están en la documentación https://www.php.net/manual/es/ref.array.php

$edades = array (12, 33, 44, 55);

// count me dice la cantidad de elementos que hay en el array
echo count($edades);

// array_push me permite ingresar un elemento al final del arreglo
array_push($edades, 13);

echo "\n";

var_dump($edades);

// is_array retorna true o false en caso de que sea un arreglo

$esto_no_es_un_arreglo ="";

var_dump(is_array($edades));

echo "\n";

// explode me convierte un string en array, especificando el separador

$lista_de_frutas = "Fresa,Cereza,Manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);

// implode

$lista_cena = array("pollo", "arroz", "papas");
$lista_cena_implode = implode(", ", $lista_cena);

var_dump($lista_cena_implode);