<?php include 'Database.php'; ?>

<?php

// create a variable
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Date_Of_Birth=$_POST['Date_Of_Birth'];
$DNI=$_POST['DNI'];
$Age=$_POST['Age'];
$Height=$_POST['Height'];
$Weight=$_POST['Weight'];
$Address=$_POST['Address'];
$Postal_Code=$_POST['Postal_Code'];
$Town=$_POST['Town'];
$City=$_POST['City'];
$Phone=$_POST['Phone'];
$Email_Id=$_POST['Email_Id'];
$CarnetArray=$_POST['Carnet'];
$Car=$_POST['Car'];
$Language=$_POST['Language'];
$Studies=$_POST['Studies'];
$Work=$_POST['Work'];
$ITArray=$_POST['IT'];
$Comment=$_POST['Comment'];
$Ticket=$_POST['Ticket'];
$Availability=$_POST['Availability'];
$Sweatshirt=$_POST['Sweatshirt'];
$Pants=$_POST['Pants'];

$Temporada="2014/2015";

$Carnet = implode(",", $CarnetArray);
$IT = implode(",", $ITArray);

//Execute the query


mysqli_query($connect,"INSERT INTO inscripciones (DNI, FK_TEMPORADA, NOMBRE, APELLIDOS, FECH_NAC, EDAD, 
													ALTURA, PESO, DIRECCION, CP, POBLACION, PROVINCIA, 
													TELEFONO, MOVIL, EMAIL, CARNET_CONDUCIR, VEHICULO_PROPIO, 
													IDIOMAS_NIVEL, ESTUDIOS, PROFESIÓN, NIVEL_INFORMATICA, 
													COMENTARIO, ABONADO_BETIS, DISPONIBILIDAD, TALLA_SUDADERA, 
													TALLA_PANTALON)
		        VALUES ('$DNI','$Temporada','$First_Name','$Last_Name','$Date_Of_Birth','$Age','$Height','$Weight',
						'$Address','$Postal_Code','$Town','$City','$Phone','$Phone','$Email_Id','$Carnet','$Car',
						'$Language','$Studies','$Work','$IT','$Comment','$Ticket','$Availability','$Sweatshirt'
						,'$Pants')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Voluntario Añadido</p>";
	echo "<a href="+Login.php+">LOGIN!</a>";
} else {
	echo "Voluntario no añadido<br />";
	echo mysqli_error ($connect);
}
?>