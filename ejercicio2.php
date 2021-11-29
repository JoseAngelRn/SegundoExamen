<?php
#Recogida de variables
$CAX = $_POST["CoordenadaAX"];
$CAY = $_POST["CoordenadaAY"];
$CBX = $_POST["CoordenadaBX"];
$CBY = $_POST["CoordenadaBY"];

function distancia($CAX, $CAY, $CBX, $CBY){
    $resX = ($CAX - $CBX);
    $resY = ($CAY- $CBY);
    $resX2 = pow($resX, 2);
    $resY2 = pow($resY, 2);
    $res = sqrt($resX2 + $resY2);
    print "Distancia entre el punto A($CAX, $CAY) y el punto B($CBX, $CBY) es: " .$res;
}

distancia($CAX, $CAY, $CBX, $CBY);
?>