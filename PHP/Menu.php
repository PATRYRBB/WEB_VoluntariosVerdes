<?php
if($_SESSION['rol'] == 'general'){ //Curro, Alvaro, Patry y Santi
	echo 'Menu:</br>Coordionador(Abrir/Cerrar disponibilidad, Convocatorias finales, Altas/Modificacion/Baja voluntarios, Consultar comunicaciones, Informes)</br>Voluntario(Perfil,Voluntario,Comunicacione,Disponibilidad,Historico,Galeria)</br>Admin(Elegir home:Login/Inscripcion)</br>';
}else if($_SESSION['rol'] == 'coordinador'){ //Coordinadores
	echo 'Menu:</br>Coordionador(Abrir/Cerrar disponibilidad, Consultar comunicaciones, Informes)</br>Voluntario(Perfil,Voluntario,Comunicacione,Disponibilidad,Historico,Galeria)</br>';
}else if($_SESSION['rol'] == 'voluntario'){ //Voluntarios
	echo 'Menu:</br>Perfil</br>Voluntarios</br>Comunicaciones</br>Disponibilidad</br>Historico</br>Galeria</br>';
}
?>