<?php
include "config.php";

echo "Hola";


	if (($_POST['usuari'] === USER) && (password_verify($_POST['pass'],USER_PASS))||
                ($_POST['usuari'] === USER2) && (password_verify($_POST['pass'],USER_PASS2))){
                session_start();
                $_SESSION['usuario']= $_POST['usuari'];
                header("Location: intranet.php");
             
        }else{	 
		header("Location: error.php");
	}
        
?>
