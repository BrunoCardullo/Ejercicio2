<?php

include_once "funciones.php";
include_once "calculadora.php";
//include "noexiste.php";
//include "funciones.php";

/*require "funciones.php";
require "noexiste.php";
require "funciones.php";*/

$resultado = sumar(1,2);
echo "<br>";
echo $resultado;

echo "<br>";
$resul1 = Calculadora::Sumar(3,3);

echo $resul1;

?>