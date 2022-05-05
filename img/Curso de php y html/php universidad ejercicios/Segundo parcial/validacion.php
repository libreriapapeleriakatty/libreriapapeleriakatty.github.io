<?php 
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$password = $_POST["contraseña"];


if ($nombre == "josue" && $apellido == "zuberbuhler" && $edad == 27 && $password == "Deus") {
	echo "<h1> Datos ingresados correctos sesion iniciada :) <h1>";
}else {
	echo "<h1> Datos ingresados incorrectos verifica tus datos :( <h1>";

}


 ?>