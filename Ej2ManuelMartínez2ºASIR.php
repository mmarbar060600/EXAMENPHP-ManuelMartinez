<?php
$t1 = $_POST["texto1"];
$t2 = $_POST["texto2"];
$t3 = $_POST["texto3"];
$operador = $_POST["operador"];
function mayus($t1)
{
    $resul = strtoupper($t1);
    print "texto en mayusculas: " . $resul;
}
function desor($t1)
{
    $resul = strrev($t1);
    print "desordenado: " . $resul;
}
function arra($t1)
{
    
    $resul = array($t1);
    print_r($resul);
}
function contar($t1)
{
    $resul = strlen($t1);
    print "numero de caracteres: " . $resul;
}
function replace($t3,$t2,$t1)
{
    $resul = str_replace($t3,$t2,$t1);
    print "Reemplazar una palabra del texto: " . $resul;
}
switch ($operador) {
    case '1':
        mayus($t1);
        break;
    case '2':
        desor($t1);
        break;
    case '3':
        arra($t1);
        break;
    case '4':
        contar($t1);
        break;
    case '5':
        replace($t3, $t2, $t1);
        break;
    default:
        echo "Operacion incorrecta";
        break;
}
echo "<br>Manuel Martínez 2ºASIR"
?>