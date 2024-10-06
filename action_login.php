<?php
  // Capturar valores de POST
  $nombreUsuario = $_POST['varUser'];
  $valorContrasenia = $_POST['varPass'];
  
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $database = 'mysql';
  $link = mysqli_connect($server, $user, $pass, $database);

  if(!$link) { header("Location: Login.php"); }

  $database = 'self_service';
  $band = false;
  mysqli_select_db($link, $database);
  $cadQuery = "SELECT * FROM usuarios WHERE Usuario = '$nombreUsuario' AND Contrasena = '$valorContrasenia'";
  $query = mysqli_query($link, $cadQuery);
  for ($c = 0; $c < mysqli_num_rows($query); $c++) {
    $f = mysqli_fetch_array($query);

    $nombreUsuario = $f[1];
    $tipoUsuario = $f[7];
    $band = true;
  }
  mysqli_close($link);

  if ($band) {
    // Crear las cookies
    setcookie("nombreUsuario", $nombreUsuario);
    setcookie("tipoUsuario", $tipoUsuario);
    
    // Enviar al menu
    header("Location: Menu.php");
  }
  else { header("Location: Login.php"); }
?>

