<?php 
//variables globales es de tipo array 
//$globals
#var_dump($GLOBALS);//Varibales de tipos array tipos arreglos. 
$numero1=6;
$numero2=4;
function sumar ()
{
$GLOBALS['sumar'] = $GLOBALS['numero1'] + $GLOBALS['numero2'];
}
sumar();
echo $sumar; 
echo "<hr/>";
// ejemplo 2 
//$SERVER
//Esta son las mas usadas del servidor 
echo $_SERVER['SERVER_ADDR'];//Para sacar el ip de la maquina solo que ay que poner el numero de la ip en simbolo sitema buscar en inicio y copiar el ip y sacar el local host y pegar ese numero ip ay que copiar 
echo "<hr/>";

echo $_SERVER['SERVER_NAME'];//Para sacar la ip de la pc
echo "<hr/>";

echo $_SERVER['SERVER_SOFTWARE'];//Para sacar el software de mi maquina.
echo "<hr/>";

echo $_SERVER['HTTP_USER_AGENT'];//Para sacar el software de mi maquina.
echo "<hr/>";

echo $_SERVER['REMOTE_ADDR'];//Para sacar el Ip de mi cliente
echo "<hr/>";


 ?>