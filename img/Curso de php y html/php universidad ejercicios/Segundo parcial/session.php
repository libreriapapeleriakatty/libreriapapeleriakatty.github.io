<?php 
 //sesion.- almacena y persiste datos del usuario mientras que navega por un sitio web, hasta que cierre sesion o cierre el navegador.
//iniciar sesion
session_start();

//variable local 
$variable_normal="soy una cadena de texto";

//variable de sesion

$_SESSION['variable_persistente']="soy una persona activa";
echo $variable_normal."<br/>";
echo $_SESSION ['variable_persistente'];
 ?>