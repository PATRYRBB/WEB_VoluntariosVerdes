<?php

session_start();

if($_POST['user'] == 'general'){
	$_SESSION['rol'] = 'general';
}else if($_POST['user'] == 'coordinador'){
	$_SESSION['rol'] = 'coordinador';
}else if($_POST['user'] == 'voluntario'){
	$_SESSION['rol'] = 'voluntario';
}
include 'Header.php';
echo '</br>Contenido WEB</br>Hola '.$_POST['user'].'</br>';
include 'Footer.php';
?>