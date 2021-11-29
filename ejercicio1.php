<?php
#Recogida de variables
$SueldoAnual = $_POST["Numero"];

if ($SueldoAnual <= 10000) {
    $res = $SueldoAnual * (5/100);
    print "Su tipo impositivo es un 5%"."<br>";
    print "Tienes que pagar: ".$res."€";
}
elseif ($SueldoAnual > 10000 AND $SueldoAnual <= 20000) {
    $res = $SueldoAnual * (15/100);
    print "Su tipo impositivo es un 15%"."<br>";
    print "Tienes que pagar: ".$res."€";
}
elseif ($SueldoAnual > 20000 AND $SueldoAnual <= 35000) {
    $res = $SueldoAnual * (20/100);
    print "Su tipo impositivo es un 20%"."<br>";
    print "Tienes que pagar: ".$res."€";
}
elseif ($SueldoAnual > 35000 AND $SueldoAnual < 60000) {
    $res = $SueldoAnual * (30/100);
    print "Su tipo impositivo es un 30%"."<br>";
    print "Tienes que pagar: ".$res."€";
}
elseif ($SueldoAnual >= 60000) {
    $res = $SueldoAnual * (45/100);
    print "Su tipo impositivo es un 45%"."<br>";
    print "Tienes que pagar: ".$res."€";
}



?>