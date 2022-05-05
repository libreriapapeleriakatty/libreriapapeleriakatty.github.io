<?php 

$nombre= $_POST['nombre'] ;
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];
$direccion= $_POST['direccion'];
$estado_civil= $_POST['estado_civil'];
$cedula=$_POST['cedula'];
$color_favorito=$_POST['color_favorito'];



echo "Bienvenido" ,$nombre, " " ,$apellido;
echo "<br>"; echo "<hr>";
echo "Su edad es: ",$edad;echo"<br>";echo"<hr>";
echo "Su direccion es:" ,$direccion;echo "<br>"; echo"<hr>";
echo "Su estado civil es: ",$estado_civil ; echo "<br>"; echo"<hr>";
echo "Su numero de cedula es: ",$cedula ; echo "<br>"; echo"<hr>";
echo "Su color favorito es: ",$color_favorito ; echo "<br>"; echo"<hr>";




 
 ?>