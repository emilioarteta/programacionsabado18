<?php  
//ciclo while
echo "<h2>CICLO WHILE</h2>";
$x=1;
while ($x<= 10) {
	echo "El valor de la variable es ".$x."<br>";
	$x++;
}


// ciclo do while

echo "<h2>CICLO WHILE</h2>";
$i=1;
do{
	echo "el valor de la variable es ".$i."<br>";
	$i++;
} while ($i<=10);

// ciclo for
echo "<h2>ciclo for</h2>";
for ($i=0; $i <10 ; $i++) { 
	echo "el valor de la variable es ".$i."<br>";
}
	// ciclo foreach
echo "<h2>ciclo foreach</h2>";

$personas = array("Juan","Luis","Maria", "Jose","Bernardo","Julio");
foreach ($personas as $row) {
	echo $row."<br>";
}

?>