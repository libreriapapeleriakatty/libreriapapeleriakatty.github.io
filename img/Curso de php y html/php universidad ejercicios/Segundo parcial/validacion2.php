<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
	<h1>Validar Formularios</h1>

	<?php 
	if (isset($_GET['error'])) {
		$error = $_GET['error'];


		if ($error == 'faltan_valores') {
			echo '<strong style="color:red">Introduzca todos los datos en todos los campos</strong>';
		} 

		if ($error == 'nombre') {
			echo '<strong style="color:red">Introduzca bien el nombre</strong>';
		} 

		if ($error == 'apellido') {
			echo '<strong style="color:red">Los apellidos no son correctos</strong>';
		} 

		if ($error == 'edad') {
			echo '<strong style="color:red">Ingrese una edad correcta</strong>';
		} 

		if ($error == 'email') {
			echo '<strong style="color:red">El correo es erroneo</strong>';
		} 

		if ($error == 'contraseña') {
			echo '<strong style="color:red">Ingrese una contraseña correctas</strong>';
		} 

	}



	 ?>

	


	
		<form action="procesar.php" method="POST">

		<label for="name">Nombre:</label>
		<input type="text" name="nombre"  required="required" placeholder="Ingrese su Nombre"/><br><br>

		<label for="name">Apellido:</label>
		<input type="text" name="apellido"  required="required"   placeholder="Ingrese su Apellido"/><br><br>

		<label for="name">Edad:</label>
		<input type="number" name="edad"   pattern="[0-9]+" required="required" placeholder="Ingrese su Edad"/><br><br>

		<label for="name">Email:</label>
		<input type="email" name="email" required="required"  placeholder="Ingrese su Email" /><br><br>

		<label for="name">Contraseña:</label>
		<input type="password" name="contraseña"  minlength="5" required="required" placeholder="Ingrese su Contraseña" /><br><br>

		<input type="submit" name="enviar" value="Enviar Datos">




</form>
       
</body>
</html>