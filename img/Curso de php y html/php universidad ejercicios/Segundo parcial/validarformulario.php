<!--empty() determina si una variable está vacía. Una variable es considerada vacía si no existe (No declarada) o si su valor es igual a FALSE. Os explico el único parámetro de la función: variable (Obligatorio): Es la variable que queremos comprobar.-->

<?php 

if (isset($_POST['enviar'])) {
	
	if (empty($nombre)) {
		echo "<h1>Ingreso su Nombre correctamente<h1>";
	}

	if (empty($apellido)) {
		echo "<h1>Ingreso su Apellido correctamente<h1>";
	}

	if (empty($edad)) {
		echo "<h1>Ingreso su Edad correctamente<h1>";
	}

	if (empty($email)) {
		echo "<h1>Ingreso su Email correctamente<h1>";
	}

	if (empty($direccion)) {
		echo "<h1>Ingreso su Direccion correctamente<h1>";
	}

	if (empty($password)) {
		echo "<h1>Ingreso su Contraseña correctamente<h1>";
		
	}
}



 ?>