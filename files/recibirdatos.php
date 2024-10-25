<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Obtener los valores del formulario
	$alumne 	= $_POST['alumne'] ?? '';
	$nota		= $_POST['nota'] ?? '';
	

	// Validar si se enviaron los valores
	if (!empty($alumne) && !empty($nota)) {
		// Ruta y nombre del archivo
		$ruta_archivo = "baseDatos.txt";

		// Verificar si el archivo existe
		$archivo_existe = file_exists($ruta_archivo);

		// Obtener el número de registros actuales o inicializar en 0 si el archivo no existe
		$num_registros = 0;
		if ($archivo_existe) {
			$lineas = file($ruta_archivo, FILE_SKIP_EMPTY_LINES);
			foreach ($lineas as $linea) {
				if (preg_match('/^\d+\./', $linea)) {
					$num_registros++;
				}
			}
		}

		// Incrementar el número de registros para el nuevo registro
		$num_registros++;

		// Abrir el archivo en modo de escritura
		$file = fopen($ruta_archivo, "a");
		if ($file) {
			// Escribir la cabecera si el archivo no existe
			if (!$archivo_existe) {
				fwrite($file, "Id \tNombre Alumne \t\tNota Alumne" . PHP_EOL);
				fwrite($file, "=================================" . PHP_EOL);
			}

			// Escribir el nuevo registro en el archivo con el formato requerido
			fwrite($file, "$num_registros.\t$alumne\t\t\t$nota" . PHP_EOL);
			fwrite($file, " -----------------------------------" . PHP_EOL);

			// Cerrar el archivo
			fclose($file);

			// Redirigir a una página específica
			header('Location: intranet.php');
			exit();
		} else {
			echo "Error al abrir el archivo.";
		}
	} else {
            
		echo "Por favor, completa todos los campos del formulario";
                
                
	}
} else {
	echo "Acceso inválido.";
}