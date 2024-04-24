<?php
session_start();
include("funciones.php");

usuario_existe();


if(isset($_POST["enviar"])) {

    $usuario = $_POST["user"];
    $contra = $_POST["pwd"];

        if(autenticar($usuario)) {

        if(validar_admin($usuario, $_POST["pwd"])) {
             $_SESSION["usuario"] = $usuario;
             $_SESSION["contra"] = $contra;
            header("Location: admin.php");
            die();
        } else {
            $_SESSION["usuario"] = $usuario;
            $_SESSION["contra"] = $contra;

            header("Location: home.php");
            die();
        }
    } else {
        $error = "Campo vacio";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">

        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">
        <div>
            <?php
                if(isset($error)) {
                    echo $error;
                };
            ?>
        </div>

         <label for="pwd">Contraseña</label>
        <input type="text" name="pwd" id="pwd">

        <input type="submit" value="Enviar" name="enviar">

    </form>

    <div>
        <?php 
        if (isset($prueba)) {
        echo $prueba;
         }
        ?>
    </div>

</body>
</html>