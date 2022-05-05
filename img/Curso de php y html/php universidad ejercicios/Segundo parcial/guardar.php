<?php 
if (isset($_POST['nombre']) && isset($_POST['apellido'])&& isset($_POST['edad']) && isset($_POST['email']) && isset($_POST['contraseña']) && isset($_POST['Direccion']) ){
    echo "<h1>".$_POST['nombre']."<h1>";
    echo '<h1>'.$_POST['apellido'].'<h1>';
    echo '<h1>'.$_POST['edad'].'<h1>';
    echo '<h1>'.$_POST['email'].'<h1>';
    echo '<h1>'.$_POST['Direccion'].'<h1>';
    echo '<h1>'.$_POST['contraseña'].'<h1>';
}



 ?>