<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
	<h1>Formulario Datos Personales</h1>
		<form action="guardar.php" method="POST">

		Nombre:<br>
		<input type="text" name="nombre" pattern="[A-Z a-z]+" required ="required" placeholder="Ingrese su Nombre"/><br><br>

		Apellido:<br>
		<input type="text" name="apellido" pattern="[A-Z a-z]+" required ="required" placeholder="Ingrese su Apellido"/><br><br>

		Edad:<br>
		<input type="number" name="edad"  required ="required" pattern="[0-9]+" placeholder="Ingrese su Edad" /><br><br>

		Direccion:<br>
		<input type="text" type="number" required ="required" name="Direccion" placeholder="Ingrese su Direccion" /><br><br>

		Email:<br>
		<input type="email" name="email" required ="required" placeholder="Ingrese su Email" /><br><br>

		Contraseña:<br>
		<input type="password" name="contraseña" required="required" placeholder="Ingrese su Contraseña" /><br><br>

		<input type="submit" value="Enviar Datos Personales">




</form>
</body>
</html>