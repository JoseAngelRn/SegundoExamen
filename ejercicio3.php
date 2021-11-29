<?php
#Recogida de variables
$var_text = $_POST["texto"];

if ($var_text == strrev($var_text)) {
    print "El texto introducido: ".$var_text." es palíndromo";
}
else {
    print "El texto introducido: ".$var_text." NO es palíndromo";
}

?>