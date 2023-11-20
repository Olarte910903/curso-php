<?php

$tiendta_de_cafes = array(
    "americano" => 50,
    "tinto" => 20,
    "pintadito"=> 40,
    "colada" => 60
);

foreach($tiendta_de_cafes as $price){
    echo "El café cuesta $$price usd\n";
}