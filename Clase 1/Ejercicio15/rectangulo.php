<?php
 
 include_once "figurasGeometricas.php";

class Rectangulo extends figuraGeometrica
{
    
    private $_ladoUno;
    private $_ladoDos;

    public function Rectangulo($l1, $l2)
    {
        $_ladoUno = $l1;
        $_ladoDos = $l2;
    }

    protected function CalcularDatos()
    {

    }

    public function Dibujar()
    {

    }

    public function ToString()
    {
        
    }
}


?>