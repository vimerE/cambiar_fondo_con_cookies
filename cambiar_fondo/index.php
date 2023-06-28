<?php
  // Comprueba si la cookie existe y utiliza su valor como fondo de pantalla
  if(isset($_COOKIE['fondo_pantalla'])) {
    $fondo = $_COOKIE['fondo_pantalla'];
    $bgColor = $fondo; 
  }else{
	$bgColor = "style='background-color: white;'";
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cambiar fondo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body <?=$bgColor;?>>
    <h1 class="text-center">Cambiar de fondo con cookies</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="POST" action="cambiar_fondo.php">
				  <label for="fondo">Selecciona un fondo de pantalla:</label>
				  <select name="fondo" id="fondo">
					<option value="fondo1">Fondo 1</option>
					<option value="fondo2">Fondo 2</option>
					<option value="fondo3">Fondo 3</option>
				  </select>
				  <input type="submit" value="Cambiar fondo">
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  
</html>