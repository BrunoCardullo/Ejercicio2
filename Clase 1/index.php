<?php
//echo "Hola mundo";

    $numeros = array (
    rand(0,10),
    rand(0,10),
    rand(0,10),
    rand(0,10),
    rand(0,10),
    );
    //var_dump($numeros);

$promedio = array_sum($numeros) / count($numeros);

if($promedio < 6)
{
    echo "El promedio es menor a 6";
}

if($promedio > 6)
{
    echo "El promedio es mayor a 6";
}

if($promedio == 6)
{
    echo "El promedio es igual a 6";
}