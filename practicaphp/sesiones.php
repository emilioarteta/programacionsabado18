<?php 
session_start();
$_SESSION["nombre"]= "Juan";
$_SESSION["email"]= "juan@gmail.com";

echo $_SESSION ["nombre"];
 ?>}
