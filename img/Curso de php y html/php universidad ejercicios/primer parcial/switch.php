
<?php  
$dia=4;
switch ($dia) {
	case 1 :
		echo "Lunes</br>";
		break;
	case 2:
		echo"Martes</br>";
		break;
	case 3:
	    echo"Miercoles</br>";
	    break;
	case 4:
	    echo"Jueves</br>";

	    break;
	case 5:
	    echo"Viernes</br>";

	 break;
	default:
		echo "Es sabado o domingo <br> </br>";
		break;
	
}
echo "<hr/>";
//Ejercicio 7
//Con string

$Mes='Julio';
switch ($Mes) {
	case 'Enero':
	echo 'Mes 1';
	break;

	case 'Febrero':
		echo 'Mes 2';
	break;

	case 'Marzo':
	echo 'Mes 3';
	break;

	case 'Abril':
	echo 'Mes 4';
	break;

    case 'Mayo':
    echo 'Mes 5';
    break;

    case 'Junio':
    echo 'Mes 6';
    break;

    case 'Julio':
    echo 'Mes 7';
    break;

    case 'Agosto':
    echo 'Mes 8';
    break;

    case 'Septiembre':
    echo 'Mes 9';
    break;

    case 'Octubre':
    echo 'Mes 10';
    break;

    case 'Noviembre':
    echo 'Mes 11';

    case 'Diciembre':
    echo "Mes 12";
    break;

	
	default:
		echo "No esta en el rango establecido";
		break;
}
echo "<hr/>";
goto saltar;//Para hacer varias lineas
echo "Instruccion 1 </br>";
echo "Instruccion 2 </br>";
echo "Instruccion 3 </br>";
//Ejercicio 7 Con variables
$Meses=13;
switch ($Meses) {
	case 1:
		echo"Mes de Enero</br>";
		break;
	case 2:
		echo "Mes de Febrero</br>";
		break;
	case 3:
		echo "Mes de Marzo</br>";
	break;
	case 4:
		echo "Mes de Abril</br>";
		break;
    case 5:
		echo "Mes de Mayo</br>";
	break;
	case 6:
		echo "Mes de Junio</br>";
		break;
	case 7:
		echo "Mes de Julio</br>";
		break;
	case 8:
		echo "Mes de Agosto</br> ";
		break;
	case 9:
		echo "Mes de Septiembre</br>";
		break;
	case 10:
		echo "Mes de Octubre</br>";
		break;
	case 11:
		echo "Mes de Noviembre</br>";
		break;
	case 12:
		echo "Mes de Diciemmbre</br>";
		break;	
							
	default:
	    echo"No esta en el rango establecido</br>";
		
		break;
}
saltar:
echo"He saltado varias lineas del programa </br>";
echo "<hr/>";

//Ejercicio 7
//Ejemplo con string
//Ejercicio en clases:
# La asignación familiar por hijo de un trabajador es la siguiente: 
//	Si no tiene hijos no le corresponde asignación familiar
//	Si tiene un hijo le corresponde 100 dólares
//	Si tiene dos hijos le corresponde 200 dólares por sus dos hijos 
//	Y si tiene más de dos hijos le corresponde 300 dólares 
//Ingresar el número de hijos y reportar la asignación familiar del trabajador.
$h1='Hijo 4';
switch ($h1) {
	case 'Hijo 0':
	echo ' Si no Tiene Hijo: no le corresponde asignacion familiar';
	break;

	case 'Hijo 1 ':
		echo 'Si tiene un hijo :le corresponde a $100 dolares';
	break;

	case 'Hijo 2 ':
	echo 'Si tiene dos hijos :Le corresponde a $200 dolares';
	break;

	case 'Hijo 3':
	echo 'Si tiene dos hijos :Le corresponde a $300 dolares';
	break;

	default:
		echo "El trabajador tiene mas de dos hijos </br>";
		echo "le corresponde la asignacion mayor a 300 dolares";
		break;
}
echo "<hr/>";
//Ejercicio en clases:
#con variable
# La asignación familiar por hijo de un trabajador es la siguiente: 
//	Si no tiene hijos no le corresponde asignación familiar
//	Si tiene un hijo le corresponde 100 dólares
//	Si tiene dos hijos le corresponde 200 dólares por sus dos hijos 
//	Y si tiene más de dos hijos le corresponde 300 dólares 
//Ingresar el número de hijos y reportar la asignación familiar del trabajador.
$hijos=5;
switch ($hijos) {
	case 0:
	echo "El trabajador no tiene hijos </br>";
	echo 'No le corresponde a ninguna asignacion';
	break;
	
	case 1:
	echo "El trabajador tine $hijos hijo </br>";
	echo 'le corresponde a la asignacion de $100 dolares';
	break;
	
	case 2:
	echo "El trabajador tiene $hijos hijos </br>";
	echo 'le corresponde a la asignacion de 200 dolares';
	break;
	
	case 3:
	echo "El trabajador tiene $hijos hijos </br>";
	echo 'le corresponde a la asignacion de 300 dolares';
	break;
	
	case 4:
	echo "El trabajador tiene hijos </br>";
	echo 'le corresponde a una asignacion mayor de 300 dolares';
	break;
	
	


	

	default:
		echo "El trabajador tiene mas de dos hijos </br>";
		echo "le corresponde la asignacion mayor a 300 dolares";
		break;
}
echo "<hr/>";

 ?>