<?php
//ARRAYS
//ARRAY de 7 elementos con el nombre de un día de la semana en cada uno de ellos:
echo "<h1>ARRAYS</h1>";
//ARRAY INDEXADO
$aDias= array ("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "sabado", "Domingo");
//mostrar datos de un array
echo "El primer día es el: ".$aDias[0]."<br>";
$aNumeros=array(33, 12, 83, 55);
echo "El segundo numero es el: ".$aNumeros[1]. "<br/>";
//array asociativo
echo"<h2>ARRAY ASOCIATIVO</h2>";
$aColores= array("color1"=>"rojo", "color2"=>"verde", "color3"=>"azul" );
echo "Color 3: ".$aColores["color2"]."<br>";
$aCosas = array("color1" => "rojo" , "importe"=> 300, "activo"=> true, 3 => 55);
echo "activo: ".$aCosas["activo"]."<br/>";
echo "3: ".$aCosas[3]. " <br/>";

//Array multidimensional
echo "<h2>ARRAYS MULTIDIMENSIONALES</h2>";
$colores = array( 
   'frutas'=> array("manzana" => "roja" , "ciruela"=> "purpura"),
   'flores'=> array("rosa" => "rosada" , "violeta"=> "azul"));
echo "Una ciruela es: ".$colores["frutas"]["ciruela"].", y una violeta es ".$colores["flores"]["violeta"];

