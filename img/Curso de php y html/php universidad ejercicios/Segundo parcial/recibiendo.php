<?php 
$nombre= $_GET["nombre"] ;
$apellido= $_GET["apellido"];
$edad= $_GET["edad"];
$correo_electronico=$_GET["correo"];
$direccion=$_GET["domicilio"];
$telefono=$_GET["iphone"];
$color_favorito=$_GET["red"];
$tipo_sexo=$_GET["masculino"];
$seguridad=$_GET["Contraseña"];
$continente=$_GET["Continente"];
$web=$_GET["web"];



echo "Bienvenido Señor " ,$nombre, " " ,$apellido;
echo "<br>"; echo "<hr>";
echo "Su edad es: ",$edad;echo"<br>";echo"<hr>";
echo "Su Correo es: ",$correo_electronico;echo"<br>";echo"<hr>";
echo "Su Direccion es: ",$direccion;echo"<br>";echo"<hr>";
echo "Su Telefono es: ",$telefono;echo"<br>";echo"<hr>";
echo "Su Color favorito es: ",$color_favorito;echo"<br>";echo"<hr>";
//echo "Su color favorito es: ",$color_favorito1;echo"<br>";echo"<hr>";
echo "Su Tipo de sexo es: ",$tipo_sexo;echo"<br>";echo"<hr>";
//echo "Su Tipo de sexo es: ",$tipo_sexo1;echo"<br>";echo"<hr>";
echo "Su Contraseña es: ",$seguridad;echo"<br>";echo"<hr>";
echo "Su continente es: ",$continente;echo"<br>";echo"<hr>";
echo "Su web es: ",$web;echo"<br>";echo"<hr>";




?>