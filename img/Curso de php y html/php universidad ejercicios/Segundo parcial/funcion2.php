<?php 
//Miercoles 23 de febrero del 2022
//Calcular la funcion de dos numeros con diferentes operaciones.
function calculadora($numero1,$numero2){//Parametros.
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$mult=$numero1*$numero2;
$div=$numero1/$numero2;

echo "suma:$suma <br/>";
echo "resta:$resta <br/>";
echo "multiplicacion:$mult <br/>";
echo "division:$div <br/>";
echo "<hr>";

}	
calculadora(20,10);
//calculadora(50,40);
//calculadora(30,10);
//calculadora(20,20);
//Ejercicio 2
//Funciones con retorno suma de dos numeros 
function suma($n1,$n2){
    return $n1+$n2;
}    
echo suma (6,8);
echo "<hr>";
//Ejercicio 3 
//funcion operaciones retorna varios valores. 
function operaciones($o1,$o2,$operaciones){
    if ($operaciones=="suma") {
        return $o1+$o2;
    }
    if ($operaciones== "resta") {
        return $o1-$o2;

    }
    if ($operaciones== "multi") {
        return $o1*$o2;

    }
    if ($operaciones== "divi") {
        return $o1/$o2;

    }
}    
echo operaciones (10,2,"suma");
echo "</br>"; 
echo operaciones (20,2,"resta") ;
echo "</br>"; 
echo operaciones (10,2,"multi");
echo "</br>"; 
echo operaciones (20,2,"divi") ;
echo "<hr/>";
//Ejercicio 4

//valores string 
// utilizamos funciones dentro de otras funciones.
function nombre ($nombre){
    $texto="el nombre es:$nombre";
    return$texto;

} 
function apellido ($apellido){
    $texto="el apellido es: $apellido";
    return $texto;

}   
function devuelvanombre($nombre,$apellido){
    $texto= nombre($nombre)
        ."<br/>".
        apellido($apellido);
    return $texto;
}
echo devuelvanombre("Josue","zuberbuhler");
echo "<hr/>";


 ?>

 