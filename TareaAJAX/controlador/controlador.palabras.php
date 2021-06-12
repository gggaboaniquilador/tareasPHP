<?php
require_once "../modelo/mdlpalabras.php";

$a=modeloPalabra::Leer();

foreach ($a as $key => $value) {
    $palabra[$key]=$value["palabra"];
}
$q=$_REQUEST["datos"]; 

$hint="";

if ($q !== "")
{
    $q=strtolower($q); 
    $len=strlen($q);
    foreach($palabra as $word) 
    {
        if (stristr($q, substr($word,0,$len))) 
        {
            if ($hint==="")
            {
                $hint=$word;
            }
            else
            {
                $hint .= ", $word";
            }
        }
    }
}
echo $hint==="" ? "No hay sugerencias, ingresa la palabra completa y presiona enviar" : $hint;
