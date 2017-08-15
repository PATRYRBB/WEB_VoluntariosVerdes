<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Voluntarios Verdes</title>
</head>
<body>
<?php
if($_SESSION != null){
	include 'Menu.php';
?>
</br>
<form method="post" action="Logout.php">
    <button type="submit">Salir</button>
</form>
<?php
}
?>