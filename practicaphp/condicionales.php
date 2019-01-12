<?php
//CONDICIONALES
echo "<h1>  CONDICIONALES EN PHP</h1>";
$edad= 14;
if ($edad> 18) {echo "Es mayor de edad";
}
// Ejemplo 2
$hora=15;
if ($hora<=12) {echo "buenos días";
	# code...
} else {echo "Buenas tardes";
	# code...
}
//ejemplo 3
echo "<br>";
if ($hora<12) { 
	echo "La hora es menor a 12";
	# code...
} else if ($hora => 12 && $hora <=13 ){
	echo "Medio día";# code...
	# code...
} else {
	echo "La hora es mayor a 13";
}
// operadores de comparación

?>