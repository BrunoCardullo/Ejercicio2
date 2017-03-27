<?php

abstract class FiguraGeometrica
{
//Atributos    
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

//Metodos
    function FiguraGeometrica($color, $perimetro, $superficie)
    {
        $_color = $color;
        $_perimetro = $perimetro;
        $_superficie= $superficie;
    }

    function GetColor()
    {
        return $color;
    }

    function SetColor($colorIngresado)
    {
        $color = $colorIngresado;
    }

    function ToString()
    {
        return $color + $perimetro + $superficie;
    }
    
    public abstract Dibujar(){} 

    protected abstract CalcularDatos(){}
}


?>