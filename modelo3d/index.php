<?php

$enlace = "";
    $fecha_actual = strtotime(date("d-m-Y h:i:00",time()));
    $fecha_inicio = strtotime("09-10-2015 22:00:00");
    $fecha_final = strtotime("10-10-2015 12:00:00");

    echo $fecha_inicio."-inicio</br>";
    echo $fecha_final."-final</br>";
    echo $fecha_actual."-actual</br>";

    if ($fecha_actual > $fecha_inicio && $fecha_actual < $fecha_final){
    	echo "mantenimiento";
    }else{
    	echo "normal";
    }
?>