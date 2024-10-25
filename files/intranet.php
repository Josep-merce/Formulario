<?php
session_start();
include "top.php";

if($_SESSION['usuario'] == "willy"){
    $mostrar = $willytexto;
    $menumostrar = "menu.php";
}else{
    $mostrar = $wonkatexto;
    $menumostrar = "menu2.php";
}
?> 

<!DOCTYPE html>

<head>
<html lang="es">
  <meta charset="UTF-8">
    <link rel="stylesheet" href=" ../css/intranet.css">
  <title>Intranet</title>
</head>


<body>
   <table>
	<thead class = "toplogo">
                <tr>
                    <td colspan="2" style="width: 60%"> <h1> <?= "Hola " .$mostrar ?></h1></td>
	        </tr>
	</thead>
	    <tfoot class = "footer">
		<tr>
		    <td colspan="2">Pie de tabla</td>
		</tr>
	    </tfoot>
	    <tbody>
                <tr class="content">
                    <th class="leftcontent"> Ets l'usuari <?= $_SESSION['usuario'] ?> 
                    <a href=" ../index.php"> (Sortir) </a> </th>
                    <td class="maincontent"> <br/><?= include $menumostrar ?><br/>
                    </td>
                </tr>
	    </tbody>
    </table> 
    

</body>
