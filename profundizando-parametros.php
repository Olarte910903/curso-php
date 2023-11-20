<?php

// parámetros por defecto

function estudiante ($edad = 18, $ranking = 100){
    if($edad > 18 && $ranking > 100){
        echo "Eres un estudiante supremo\n";
    }else{
        echo "Eres un estudiante normal\n";
    }
}

estudiante();
estudiante(20, 150);

// array unpacking (operador de propagación)

function unpacked ($num1, $num2){
    echo $num1 + $num2;
}

$arreglo = [4, 5];
unpacked(...$arreglo);

// se puede implementar en los parámetros de una función

function suma_infinita (...$params){
    $suma = 0;

    foreach($params as $numero){
        $suma += $numero;
    }

    echo "La sumatoria es: $suma";
}

suma_infinita(2,2,2,2,2);


