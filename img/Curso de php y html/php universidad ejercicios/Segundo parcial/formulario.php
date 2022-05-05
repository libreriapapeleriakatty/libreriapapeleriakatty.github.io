<!DOCTYPE html>
<!-- Atributos para crear un formulario-->
<!-- "autofocus"=: hace el foco en el campo seleccionado-->
<!-- "disabled"=: bloquea en el campo que no se puede escribir-->
<!-- "maxlenght"=: me permite indicarle cuantos maximos caracteres se puede ingresar en el campo-->
<!-- "mixlenght"=: me permite introducir los atributos indicados (no menos)-->
<!-- "pattern"=: me permite ingresar letras mayuscula de [A-Z]+ -->
<!-- "plasceholdder"=: me permite introduccir un texto por defecto y cuando valla a escribir el texto se desaparezca-->
<!-- "required": me permite que el campo valla con informacion y si no va a fallar la variacion, si no le pongo texto me sale rellene este campo-->
<!-- "value": me sirve para realizar los campos con textos real-->



<!-- Tipos de un formulario-->
<!-- type="email" significa para poder introduccir un email al type del formulario-->
<!-- type="password" me permite poner como contraseña el tipo del formulario-->
<!-- type="radio" me permite poner un circulo y uno puede diseñar y seleccionar el botton-->
<!-- type="button" mas value me permite poney crear un botton y darle valor-->
<!-- type="color" para seleccionar color-->
<!-- type="date" para seleccionar fecha-->
<!-- type="datetime-local" para seleccionar fecha y hora-->
<!-- type="file" me permite seleccionar un fichero por ejemplo opcion en archivos etc -->
<!-- type="month" me permite seleccionar un mes-->
<!-- type="number" me permite seleccionar un numero-->
<!-- type="range" me permite seleccionar selecctor pasos  de 0 a 5 pasos-->
<!-- type="search" me permite seleccionar unn buscador -->
<!-- type="tel" me permite para poner numero de telefono -->
<!-- type="time" me permite seleccionar tiempo -->
<!-- type="url" me permite seleccionar solo en url -->
<!-- type="week" me permite seleccionar el tipo de semana-->
<!-- type="value" es para darle valor -->



<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIOS PHP</title>
</head>
<body>
      <h1>FORMULARIO</h1> 
      <form action="recibiendo.php"method="POST" enctype="multipart/form-data">

      <label for='nombre'>Nombre:</label>	
      <p><input type="text" name="nombre" placeholder="Introduce Nombre" /><br/></p>
      
      
      
      <label for='nombre'>Apellido:</label>
      <p><input type="text" name="apellido" placeholder="Introduce Apellido" /><br/></p>

      <label for="nombre">Boton:</label>
      <p><input type="button" name="boton" value="Dar clic"><br/></p>

      <input id="red" type="checkbox" name="red" value="red">
      <label for="red">Rojo</label>
      <br>
      <input id="green" type="checkbox" name="green" value="green">
      <label for="green">Verde</label>
       <hr>

      <input  id="sexo" type="radio" name="masculino" value="sexo">
      <label for="sexo">Masculino</label>
      

      <input  id="mujer" type="radio" name="masculino" value="mujer">
      <label for="mujer">femenino</label>
      <br>
      
      <label for="color">Color:</label>
      <p> <input type="color" name="color"><br></p>

      <label for='fecha'>Fecha:</label>
      <p> <input type="date" name="fecha"><br></p>

       <label for='fecha'>Fecha hora actual:</label>
       <p> <input type="datetime-local" name="date"><br></p>

       <label for='año'>Mes del año:</label>
       <p> <input type="month" name="mes"><br></p>

       <label for='buscador'>Buscador:</label>
       <p> <input type="search" name="buscador"><br></p>

       <label for='iphone'>Telefono:</label>
       <p> <input type="tel" name="iphone"><br></p>

       <label for='horas'>Horas:</label>
       <p> <input type="time" name="Horas"><br></p>

        <label for='semanas'>Semanas:</label>
       <p> <input type="week" name="semanas"><br></p>

       <label for='correo'>Email:</label>
      <p> <input type="eamil" name="correo"><br></p>

       <label for='archivo'>Archivo:</label>
      <p> <input type="file" name="archivo" multiple="multiple"><br></p>

      <label for='Numero'>Numero:</label>
      <p> <input type="number" name="numero"><br></p>

      <label for='Contraseña'>Contraseña:</label>
      <p> <input type="password" name="Contraseña"><br></p>

      <label for='Continentes'>Continentes:</label>
      <p>
      	America del sur <input type="radio" name="Continente" value="america del sur"/>
      	Europa <input type="radio" name="Continente" value="Europa"/>
      	Asia<input type="radio" name="Continente" value="Asia"/>
      </p>
      <label for='web'>Pagina web:</label>
      <p> <input type="url" name="web"><br></p>

      <textarea></textarea> <br/>


     
      <p><input type="submit" value="Enviar"/></p>
 




</form> 
</body>
</html>