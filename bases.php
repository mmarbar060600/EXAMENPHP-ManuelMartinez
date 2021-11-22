<?php
$numero = $_POST["numero"];
$operador = $_POST["operador"];
$radio = $_POST["radio"];
function bina($numero){
    $resul  = decbin($numero);
    print "El resultado es: ". $resul;
}
function octal($numero){
    $resul  = decoct($numero);
    print "El resultado es: ". $resul;
}
function hexa($numero){
    $resul  = dechex($numero);
    print "El resultado es: ". $resul;
}
function bindeci($numero){
    $resul  = bindec($numero);
    print "El resultado es: ". $resul;
}
function octadeci($numero){
    $resul  = octdec($numero);
    print "El resultado es: ". $resul;
}
function hexadeci($numero){
    $resul  = hexdec($numero);
    print "El resultado es: ". $resul;
}
if ($radio == "si") {
    $num=mt_rand(0, 2048);
    switch ($operador) {
        case '1':
            $resul1 = decbin($num);
            print "El resultado con el aleatorio es: ". $resul1; 
            break;
        case '2':
            $resul1 = decoct($num);
            print "El resultado con el aleatorio es: ". $resul1; 
            break;
        case '3':
            $resul1 = dechex($num);
            print "El resultado con el aleatorio es: ". $resul1; 
            break;
        case '4':
            $resul1 = bindec($num);
             print "El resultado con el aleatorio es: ". $resul1; 
            break;
        case '5':
            $resul1 = octdec($num);
            print "El resultado con el aleatorio es: ". $resul1; 
            break;
        case '6':
            $resul1 = hexdec($num);
            print "El resultado con el aleatorio es: ". $resul1; 
            break;
        
        default:
            echo "Funcion no valida";
            break;
    }
}
else if ($radio == "no"){
    switch ($operador) {
    case '1':
        bina($numero); 
        break;
    case '2':
        octal($numero); 
        break;
    case '3':
        hexa($numero);
        break;
    case '4':
        bindeci($numero);
        break;
    case '5':
        octadeci($numero); 
        break;
    case '6':
        hexadeci($numero);
        break;
    
    default:
        echo "Funcion no valida";
        break;
}
}
echo "<br>Manuel Martínez 2ºASIR"
?>