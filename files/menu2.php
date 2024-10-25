<!DOCTYPE html>
 <html>
 <head>
 <meta charset='UTF-8'>
 
 <title>menu2.php</title>
 </head>
 <body>
 
     <br/><br/>
        <?php 
	$ruta_archivo = 'baseDatos.txt';
	$archivo = fopen($ruta_archivo, 'r');

	while(!feof($archivo)) {
			echo fgets($archivo). "<br />";
	}

	fclose($archivo);

 ?>
    <br/>
 
 </body>
 </html>