<?php
session_star();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
	 <meta charset = "utf-8">
	 <title> PSW + Cookie pagina + nombre </title>
	</head>
	<body>
		<form action ="datos.php" method ="post">
		 <fieldset>
		  <label> Nombre </label>
		  <input type="text" name = "Nombre"/></br>
		  <label> Apellido </label>
		  <input type="text" name = "Apellido"/></br>
		  <button type = "submit"> Enviar </button>
		</fieldset>
	      </form>
	</body>
</html>
