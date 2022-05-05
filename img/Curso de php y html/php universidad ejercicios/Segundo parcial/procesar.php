<?php 
$error = 'Faltan_valores';

if (!!empty($_POST['nombre'])  && !empty($_POST['apellido'])  && !empty($_POST['edad'])  &&  !empty($_POST['email']) && !empty($_POST['contraseña'])) {

	$error = 'OK';

	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['contraseña'];

    //validar el campo nombre

    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)){
        $error = '$nombre';
        
    }

    if (!is_string($apellido) || preg_match("/[0-9]/", $apellido)){
         $error = '$apellido';
    }

    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
         $error = '$edad';
    }

    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error = '$email';
    }  
    
     if (empty($password) || strlen($password)<5){
         $error = 'contraseña';
    }   

    var_dump($_POST);
    var_dump($_error);
    die();
    }else{ 
        $error = 'Faltan_valores';

        if ($error != 'ok'); {
            header("Location:validacion2.php?error=$error");
            
        }

 ?>		


<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Validacion de Datos</title>
    </head>
    <body>
        <?php if ($error == 'ok'):?> 
            <h1>DATOS VALIDOS CORRECTAMENTE</h1>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <?php endif;?>

    </body>
    </html> 	