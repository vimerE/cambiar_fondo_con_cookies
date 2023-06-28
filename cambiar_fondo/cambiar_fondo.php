<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fondo = $_POST['fondo'];
  switch($fondo){
	  case "fondo1": $fondo = "style='background-color: red;'";
	  break;
	  case "fondo2": $fondo = "style='background-color: green;'";
	  break;
	  case "fondo3": $fondo = "style='background-color: blue;'";
	  break;
  }
  // Establece la cookie con el valor seleccionado
  setcookie('fondo_pantalla', $fondo, time() + (86400 * 30), '/'); // La cookie expirará después de 30 días
  
  header("Location: index.php");
}
?>
