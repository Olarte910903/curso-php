<?php

function get_pokemon(){

    $numero_aleatorio = rand(1, 5);

    switch($numero_aleatorio){
        case 1:
            echo "pikachu\n";
            break;
        case 2:
            echo "charmander\n";
            break;
        case 3:
            echo "bullbasur\n";
            break;
        default:
            echo "no existe\n";

    }
}

get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();
