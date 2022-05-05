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
	if (isset($_POST['enviar'])) {
		$nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $email = $_POST["email"];
        $direccion =$_POST ["Direccion"];
        $password = $_POST["contraseña"];
		
	}



	 ?>
		<form action="validarformulario.php" method="POST">

		Nombre:<br>
		<input type="text" name="nombre"  required="required" placeholder="Ingrese su Nombre"/><br><br>

		Apellido:<br>
		<input type="text" name="apellido"  required="required"   placeholder="Ingrese su Apellido"/><br><br>

		Edad:<br>
		<input type="number" name="edad"   pattern="[0-9]+" required="required" placeholder="Ingrese su Edad"/><br><br>

		Direccion:<br>
		<input type="text" type="number" name="Direccion" required="required" placeholder="Ingrese su Direccion"/><br><br>

		Email:<br>
		<input type="email" name="email" required="required"  placeholder="Ingrese su Email" /><br><br>

		Contraseña:<br>
		<input type="password" name="contraseña"  required="required" placeholder="Ingrese su Contraseña" /><br><br>

		<input type="submit" name="enviar" value="Enviar Datos">




</form>
       
</body>
</html>