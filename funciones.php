<?php
include("usuarios.php");

function autenticar($email) {
    if (! $email > 0) {
        return false;
    } else {
        return true;
    };
};

function validar_admin ($email, $contra) {
        if ($email == "ROOT" && $contra == "1234") {
            return true;
        }
            else {
                return false;
            };
        

};

function usuario_no_existe() {
        if(! isset($_SESSION["usuario"])) {
            header("Location: prueba.php");
        }
}

function usuario_existe() {
      if(isset($_SESSION["usuario"])) {

            if (validar_admin($_SESSION["usuario"], $_SESSION["contra"])) {
                header("Location: admin.php");
                die();
            } else {
                 header("Location: home.php");
                die();
            }   
        }
}


?>