<?php
session_start();

include("funciones.php");

    usuario_no_existe();  // Cuando no haya sesión, me redirige al login

$user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            echo $user;
        ?>
    </div>
</body>
</html>