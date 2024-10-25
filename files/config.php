<?php
$clave = password_hash("1234", PASSWORD_DEFAULT);	
define ("USER", "willy");
define ("USER_PASS",$clave);
define ("USER2", "wonka");
define ("USER_PASS2",$clave);

?>