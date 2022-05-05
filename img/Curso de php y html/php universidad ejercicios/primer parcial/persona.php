<?php 
//Ejercicios por while

$numero=2;
echo "Los numeros pares del 2 al 100:</br>";
while ($numero<=100) {
	echo "$numero";
	if ($numero!=100) {
	echo",";
	}
	$numero+=2;

}
echo "<hr/>";

//ejercicio do while
$edad=18;
$contador=1;
do {
	if ($contador==1 and $edad>=18) {
		echo "La persona tiene acceso:  ir a jugar con sus amigos $contador </br>";
	}elseif ($contador==2 and $edad>=18) {
		echo "La persona tiene acceso:  ir a centro comerciales $contador</br>";
	}elseif ($contador==3 and $edad>=18) {
		echo "La persona tiene acceso:  ir a salir con los amigos $contador </br>";
	}elseif ($contador==4 and $edad>=18) {
		echo "La persona tiene acceso:  ir a ir a fiestas $contador</br>";
	}elseif ($contador==5 and $edad>=18) {
		echo "La persona tiene acceso:  ir a tener trabajo $contador </br>";
	}elseif ($contador==6 and $edad>=18) {
		echo "La persona tiene acceso:  ir a comprar ropa $contador </br>";
	}elseif ($contador==7 and $edad>=18) {
		echo "La persona tiene acceso:  ir a sacarze matricula para conducir $contador </br>";
	}elseif ($contador==8 and $edad>=18) {
		echo "La persona tiene acceso:  ir a conducir $contador </br>";
	}elseif ($contador==9 and $edad>=18) {
		echo "La persona tiene acceso: ir a tener credito </br>";						
			
		}	

	$contador++;
} while ($edad>=18 && $contador <=10);


echo "<br/>";
//Ejercicio do while

$numero2=0;
do {
	echo "$numero2,";//Lo que voy a imprimir
	$numero2+=2;

} while ($numero2<=50);
echo "<hr/>";
//Ejemplo 7 //Valor factorial
$numero=5;
$factorial=1;
while ($numero>1) {
$factorial=$factorial*$numero;
$numero= $numero - 1;
}
echo' El factorial de '. $numero .' es: '. $factorial;

echo "<hr/>";
$i=1;
while ($i<=10) {
	echo"El valor es $i <br></br>";
$i++;		
}
echo "<hr/>";


 ?>