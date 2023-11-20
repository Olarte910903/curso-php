<?php

$asientos_disponibles = 4;
$es_hijo_de_tom_holland = true;

if ($asientos_disponibles > 0)
    echo "Puedes ver la pelicula de Spidey";
else if ($es_hijo_de_tom_holland == true)
    echo "No te creo, pero igual puedes ver la película";
else
    echo "Lo sentimos, te tocara spoilearte";
echo "\n";