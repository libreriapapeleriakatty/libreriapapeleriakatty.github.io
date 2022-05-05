<?php 
//Realizar un script que imprima por pantalla los cuadrados (que es un número
//multiplicado por sí mismo) de los 40 primeros números naturales (Utilizar bucle while
echo "Numero Multiplicado Por Si Mismo <br>";
echo "<hr/>";
$n1=2;
$c2=1;
$resultado=0  ;
while ($c2<=40) {
	$resultado =$c2 * $c2;
	echo"$n1 x $12 = $resultado <br>";
$c2++;		
}
echo "<hr/>";
//2.- Una farmacia desea un programa para ingresar el valor de compra y calcular lo siguiente:
//si el pago se efectúa al “contado”, calcular un descuento del 5%; pero si el pago es con
//“tarjeta” se incrementa un recargo del 3% al valor de compra. Calcular y visualizar el
//descuento o recargo según sea el caso y el total a pagar de la compra.
echo "Ejercicio recargo y total a pagar<br>";
echo "<hr/>";
$monto_a=10;
$valor_a='tarjeta';
$iva=0;
$descuento=0;
$total_pagar=0;
if ($valor_a=='efectivo') {
    $descuento=$monto_a*0.05;
    $total_pagar=$monto_a-$descuento;
    echo"Su descuento es aproximado al 5%: $descuento</br>";
    echo"Su total a pagar es de: $total_pagar";
} elseif ($valor_a=='tarjeta'and $monto_a>=100){
    $descuento=$monto_a*0.05;
    $total_pagar=$monto_a-$descuento;
    echo"Su descuento es aproximado al 3% es de: $descuento</br>";
    echo"Su total a pagar es de: $total_pagar";
} elseif ($valor_a=='tarjeta'and $monto_a<=99){
    $descuento=$monto_a*0.05;
    $total_pagar=$monto_a+$descuento;
    echo"Su recargo es : $descuento</br>";
    echo"Su total a pagar es de: $total_pagar";
}    
echo "<hr/>";    

//3.- Realizar un script que me permita inicializar 2 números y luego un carácter indicando la
//operación a realizar (+,-,*,/) y reportar el resultado de la operación. (utilizar switch).
$num1= 10;
$num2 = 4;
$caracter = '+';
$resultado = 0;

switch ($caracter) {
    case '+':
        $resultado = $num1 + $num2;
        echo "El resultado de la suma es:$resultado";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "El resultado de la resta es:$resultado ";
        break;
        case '*':
        $resultado = $num1 * $num2;
        echo "El resultado de la multiplicacion es:$resultado ";
        case '/':
        $resultado = $num1 / $num2;
        echo "El resultado de la division es:$resultado ";
        break;

    
    default:
        echo "Esta fuera del rango establecido";
        break;

 echo "<hr/>";
 }
//4 Realizar un script que permita leer 10 números en un proceso repetitivo y muestre la
//suma. (Utilizar bucle for)

echo "Mostrar la suma de dos numeros en proceso repetitivo</br>";
$numero=1;
for ($contador=1;$contador<=10;$contador++) 
{
    $total= $numero + $contador;
 echo $numero. "+" .$contador. "=" .$total."<br>"; 

}
echo "<hr/>";
//ejercicio5
//Diseñe un script que me permita ingresar 3 valores flotantes que estén entre 1 y 10,
//obtenga el promedio correspondiente y determine su equivalencia; aprobado, reprobado y
//suspenso. Puede utilizar cualquier sentencia aprendida.
$notauno = 8.4;
$notados = 8.9;
$notatres = 9.1;
$resultado =($notauno + $notados + $notatres)/3;
echo"Notas del estudiante Orlando Josue zuberbuhler Leon </br>";
echo"El procentaje de su primera nota es: $notauno</br>";
echo"El procentaje de su segunda nota es: $notados</br>";
echo"El procentaje de su tercera nota es: $notatres</br>";
echo"Su promedio es aprobado: $resultado</br>";
echo "<hr/>";
 
?>