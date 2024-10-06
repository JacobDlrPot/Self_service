//Borra las cookies y regresa al inicio
<?php
   setcookie("nombreUsuario", "", time() -1000);
   setcookie("tipoUsuario", "", time() -1000);

   //Regresa al menu
   header("Location: Login.php");
?>