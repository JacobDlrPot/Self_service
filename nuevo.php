<?php
//captura valores de POST
$varMatricula = $_POST['VarMatricula'];
$varCarrera = $_POST['VarCarrera'];
$varSemestre = $_POST['VarSemestre'];
$varPassword = $_POST['VarPassword'];

$server = 'localhost' ;
$user = 'root' ;
$pass = '';
$database='mysql';
$link = mysqli_connect($server, $user, $pass, $database);

if(!$link) { header("Location: Login.php"); }

  $database = 'self_service';
mysqli_select_db($link, $database);
$cadaQuery = "INSERT INTO usuarios VALUES('$varMatricula','$varNombre', '$varCarrera', '$varGeneracion', '$varSemestre', '$varUsername', '$varPasswprd', '$varTipo')";
mysqli_query($link, $cadaQuery);
mysqli_close($link);
header("Location: Menu.php");
?>