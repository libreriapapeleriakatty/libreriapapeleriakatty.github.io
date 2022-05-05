<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario personal</title>
</head>
<body>

	<h1>FORMULARIO</h1> 
      <form action="recibiendo.php"method="GET" enctype="multipart/form-data">

	<label for='nombre'>Nombre:</label>	
      <p><input type="text" name="nombre" placeholder="Introduce Nombre" /><br/></p>
      <label for='nombre'>Apellido:</label>
      <p><input  type="text" name="apellido" placeholder="Introduce Apellido" /><br/></p>

      <label for='nombre'>Edad:</label>
      <p><input type="number" name="edad" placeholder="Introduce su Edad" /><br/></p>

       <label for='correo'>Email:</label>
      <p> <input type="eamil" name="correo" placeholder="Introduce su Email"><br></p>

       <label for='correo'>Domicilio:</label>
      <p> <input type="text" type="number" name="domicilio" placeholder="Introduce su Domicilio"><br></p>

      <label for='iphone'>Telefono:</label>
       <p> <input type="number" name="iphone" placeholder="Introduce su numero"><br></p>

      <label for='favorito'>Color favorito:</label>
      <br>
      <input id="red" type="checkbox" name="red" value="red">
      <label for="red">Rojo</label>
      <br>
      <input id="green" type="checkbox" name="red" value="green">
      <label for="green">Verde</label>
      <br><br>
       

       <label for='favorito'>Tipo de sexo:</label>
       <input  id="masculino" type="radio" name="masculino" value="masculino">
      <label for="masculino">Masculino</label>
      <input  id="femenino" type="radio" name="masculino" value="femenino">
      <label for="femenino">femenino</label>
      <br><br>


      <label for='Continentes'>Continentes:</label>
      <p>
      	America del sur <input type="radio" name="Continente" value="america del sur"/>
      	Europa <input type="radio" name="Continente" value="Europa"/>
      	Asia<input type="radio" name="Continente" value="Asia"/>
      </p>

      <label for='Contraseña'>Contraseña:</label>
      <p> <input type="password" name="Contraseña" placeholder="ingrese su Contraseña"><br></p>

      <label for='web'>Pagina web:</label>
      <p> <input type="url" name="web" placeholder="ingrese su pagina web"><br></p>

      <p><input type="submit" value="Enviar"/></p> 



</body>
</html>