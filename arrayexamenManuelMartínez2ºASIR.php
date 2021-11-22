<?php
$operador = $_POST["operador"];
//Datos de las entradas
$entrada=$_POST["entrada"];
    $e= $entrada["e"];
    $e1= $entrada["e1"];
    $e2= $entrada["e2"];
    $e3= $entrada["e3"];
    $e4= $entrada["e4"];
function primer($entrada)
{
    array_shift($entrada);
    print_r($entrada);
}
    function quita($entrada)
{
    array_pop($entrada);
    print_r($entrada);
}
function orde($entrada)
{
    krsort($entrada);
    echo "Ordenado clave inverso: ";
    print_r($entrada);
}
function divi($entrada)
{
    $arradiv = array_chunk($entrada, 2);
    print_r($arradiv);
}
switch ($operador) {
    case '1':
        primer($entrada);
        break;
    
    case '2':
        quita($entrada);
        break;
    case '3':
        orde($entrada);
        break;
    case '4';
        divi($entrada);
        break;
    default;
    echo "Opcion no valida";
    break;
        
}
?>