<?php

function verificar_estudiante ($rango, $edad){
    if($rango > 100 && $edad > 18){
        echo "Eres estudiante legend\n";
    }else{
        echo "No eres estudiante legend\n";
    }
}

verificar_estudiante(20, 30);
verificar_estudiante(150, 20);