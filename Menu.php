<?php
	if (!isset($_COOKIE['nombreUsuario'])) {
		header("Location: Login.php");
	}

  $nombreUsuario = $_COOKIE['nombreUsuario'];
  $tipoUsuario = $_COOKIE['tipoUsuario'];
  $colorEstilo = '#000000';

  if ($tipoUsuario == '0')
    $colorEstilo = '#dc3545'; // Admin - Rojo
  else if  ($tipoUsuario == '1')
    $colorEstilo = '#28a745'; // Alum - Verde
  else
    $colorEstilo = '#007bff'; // Prof - Azul
?>
<html>
  <head>
  </head>
  <body>
    <h2 style="background-color: <?php echo $colorEstilo; ?>; color: white; font-weight: bold;">Acceso al sistema</h2>
    <ul style="list-style-type:square">
      <li><a href="Usuarios.php">Usuarios</a></li>
      <li>Ayuda
        <ul style="list-style-type:circle">
          <li>FAQ's</li>
          <li>Contacto</li>
        </ul>
      </li>
      <li><a href="action_salir.php">Salir</a></li>
    </ul>
  </body>
</html>