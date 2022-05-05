<?php 
//abrir fichero
$archivo = fopen("fichero_texto.txt", "a+");// el fopen es el inicio de un archivo que tengo que agregar que archivo voy a leer y el r es un permiso para ingresar tipo de texto es que voy a presentar solo texto el a+ es para ingrsar mas texto.

//leer el contenido del archivo 
while (!feof($archivo)) {//feof me permite leer todos los archivo de mi fichero de linea por linea

    
$contenido = fgets($archivo);
echo $contenido."<br/>";

}

//me permite escribir dentro de un fichero de texto
fwrite($archivo, "Texto que he colocado por medio de una funcion");//cuando ejecuto esta funcion se ejecuta automaticamente el texto que ingreso.


// cerrar el archivo
fclose($archivo);// eswta funcion me permite cerrar un archivo


 ?>