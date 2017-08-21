<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<html>
<head>
<title>Alta nuevo voluntario</title>
<style type="text/css">

.no-spin::-webkit-inner-spin-button, .no-spin::-webkit-outer-spin-button
	{
	-webkit-appearance: none !important;
	margin: 0 !important;
	-moz-appearance: textfield !important;
}
textarea {
    resize: none;
}

h3 {
	font-family: Calibri;
	font-size: 22pt;
	font-style: normal;
	font-weight: bold;
	color: #30a203;
	text-align: center;
	text-decoration: underline
}

table {
	font-family: Calibri;
	color: white;
	font-size: 11pt;
	font-style: normal;
	background-color: #03a240;
	border-collapse: collapse;
	border: 3px solid black
}

table.inner {
	border: 0px
}

</style>
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$.datepicker.regional['es'] = {
		closeText : 'Cerrar',
		prevText : '< Ant',
		nextText: 'Sig >',
		currentText : 'Hoy',
		monthNames : [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
				'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre',
				'Diciembre' ],
		monthNamesShort : [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
				'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre',
				'Noviembre', 'Diciembre' ],
		dayNames : [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves',
				'Viernes', 'Sábado' ],
		dayNamesShort : [ 'Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb' ],
		dayNamesMin : [ 'Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá' ],
		weekHeader : 'Sm',
		dateFormat : 'dd/mm/yy',
		firstDay : 1,
		isRTL : false,
		showMonthAfterYear : false,
		changeMonth : true,
		changeYear : true,
		maxDate : "-18Y",
		yearRange : '-100:-18',
		yearSuffix : ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']);

	$(function() {
		$("#datepicker").datepicker();
	});
</script>
</head>

<body>
	<h3>FORMULARIO NUEVO VOLUNTARIO</h3>
	<form action="BBDD_AddNewUser.php" method="POST">

		<table align="center" cellpadding="12">

			<!----- First Name ---------------------------------------------------------->
			<tr>
				<td>NOMBRE</td>
				<td><input type="text" name="First_Name" maxlength="20" />
				</td>
			</tr>

			<!----- Last Name ---------------------------------------------------------->
			<tr>
				<td>APELLIDOS</td>
				<td><input type="text" name="Last_Name" maxlength="50" />
				</td>
			</tr>

			<!----- Date Of Birth -------------------------------------------------------->
			<tr>
				<td>FECHA DE NACIMIENTO</td>
				<td><input type="text" id="datepicker" name="Date_Of_Birth" maxlength="10" ></td>
			</tr>
			
			<!----- DNI ---------------------------------------------------------->
			<tr>
				<td>DNI</td>
				<td><input type="text" name="DNI" maxlength="9" />
				</td>
			</tr>

			<!----- Age ---------------------------------------------------------->
			<tr>
				<td>Edad</td>
				<td><input type="number" name="Age" maxlength="3" /></td>
			</tr>

			<!----- Height ---------------------------------------------------------->
			<tr>
				<td>Altura</td>
				<td><input type="number" name="Height" step="0.1" maxlength="4" /></td>
			</tr>

			<!----- Weight ---------------------------------------------------------->
			<tr>
				<td>PESO</td>
				<td><input type="number" name="Weight" step="0.1" maxlength="5" /></td>
			</tr>

			<!----- Address ---------------------------------------------------------->
			<tr>
				<td>DIRECCIÓN<br /> <br /> <br /></td>
				<td><textarea name="Address" rows="4" cols="22" maxlength="100"></textarea></td>
			</tr>

			<!----- Postal Code ---------------------------------------------------------->
			<tr>
				<td>CÓDIGO POSTAL</td>
				<td><input type="number" name="Postal_Code" maxlength="5" />
				</td>
			</tr>

			<!----- Town ---------------------------------------------------------->
			<tr>
				<td>POBLACIÓN</td>
				<td><input type="text" name="Town" maxlength="50" />
				</td>
			</tr>

			<!----- City ---------------------------------------------------------->
			<tr>
				<td>PROVINCIA</td>
				<td><input type="text" name="City" maxlength="50" /></td>
			</tr>

			<!----- Phone ---------------------------------------------------------->
			<tr>
				<td>TELÉFONO</td>
				<td>
					<input type="number" name="Phone" maxlength="9" class="no-spin" />
				</td>
			</tr>

			<!----- Email Id ---------------------------------------------------------->
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="Email_Id" maxlength="100" /></td>
			</tr>

			<!----- Carnet ---------------------------------------------------------->
			<tr>
				<td>CARNET DE CONDUCIR</td>
				<td>
					<input type="checkbox" name="Carnet[]" id="AM" value="AM"> AM <br>
					<input type="checkbox" name="Carnet[]" id="A1" value="A1"> A1 <br>
					<input type="checkbox" name="Carnet[]" id="A2" value="A2"> A2 <br>
					<input type="checkbox" name="Carnet[]" id="A" value="A"> A <br>
					<input type="checkbox" name="Carnet[]" id="B" value="B"> B <br>
					<input type="checkbox" name="Carnet[]" id="B+E" value="B+E"> B+E <br>
					<input type="checkbox" name="Carnet[]" id="C1" value="C1"> C1 <br>
					<input type="checkbox" name="Carnet[]" id="C1+E" value="C1+E"> C1+E <br>
					<input type="checkbox" name="Carnet[]" id="C" value="C"> C <br>
					<input type="checkbox" name="Carnet[]" id="C+E" value="C+E"> C+E <br>
					<input type="checkbox" name="Carnet[]" id="D1" value="D1"> D1 <br>
					<input type="checkbox" name="Carnet[]" id="D1+E" value="D1+E"> D1+E <br>
					<input type="checkbox" name="Carnet[]" id="D" value="D"> D <br>
					<input type="checkbox" name="Carnet[]" id="D+E" value="D+E"> D+E <br>					
				</td>
			</tr>

			<!----- Personal Car ----------------------------------------------------------->
			<tr>
				<td>VEHÍCULO PROPIO</td>
				<td>
					<input type="radio" name="Car[]" value="1" /> Sí
					<input type="radio" name="Car[]" value="0" /> No
				</td>
			</tr>
			
			<!----- Language Level ---------------------------------------------------------->
			<tr>
				<td>NIVEL DE IDIOMA</td>
				<td><textarea name="Language" rows="4" cols="22" maxlength="100"></textarea></td>
			</tr>
			
			<!----- Studies ---------------------------------------------------------->
			<tr>
				<td>ESTUDIOS</td>
				<td><textarea name="Studies" rows="4" cols="22" maxlength="100"></textarea></td>
			</tr>
			
			<!----- Work ---------------------------------------------------------->
			<tr>
				<td>PROFESIÓN</td>
				<td><input type="text" name="Work" maxlength="100" /></td>
			</tr>
			
			<!----- IT Level ----------------------------------------------------------->
			<tr>
				<td>NIVEL DE INFORMÁTICA</td>
				<td>
					<input type="radio" name="IT[]" value="Bajo" /> Bajo
					<input type="radio" name="IT[]" value="Medio" /> Medio
					<input type="radio" name="IT[]" value="Alto" /> Alto
				</td>
			</tr>
			
			<!----- Comment ---------------------------------------------------------->
			<tr>
				<td>COMENTARIO</td>
				<td><textarea name="Comment" rows="5" cols="22" maxlength="1000"></textarea></td>
			</tr>
			
			<!----- Season Ticket ----------------------------------------------------------->
			<tr>
				<td>ABONADO AL REAL BETIS</td>
				<td>
					<input type="radio" name="Ticket[]" value="1" /> Sí
					<input type="radio" name="Ticket[]" value="0" /> No
				</td>
			</tr>
			
			<!----- Availability ---------------------------------------------------------->
			<tr>
				<td>DISPONIBILIDAD SEMANAL</td>
				<td><textarea name="Availability" rows="4" cols="22" maxlength="100"></textarea></td>
			</tr>
			
			<!----- Sweatshirt Size ----------------------------------------------------------->
			<tr>
				<td>TALLA DE SUDADERA</td>
				<td>
					<input type="radio" name="Sweatshirt[]" value="S" /> S
					<input type="radio" name="Sweatshirt[]" value="M" /> M
					<input type="radio" name="Sweatshirt[]" value="L" /> L
					<input type="radio" name="Sweatshirt[]" value="XL" /> XL
					<input type="radio" name="Sweatshirt[]" value="XXL" /> XXL
				</td>
			</tr>

			<!----- Pants Size ----------------------------------------------------------->
			<tr>
				<td>TALLA DE PANTALÓN</td>
				<td>
					<input type="radio" name="Pants[]" value="S" /> S
					<input type="radio" name="Pants[]" value="M" /> M
					<input type="radio" name="Pants[]" value="L" /> L
					<input type="radio" name="Pants[]" value="XL" /> XL
					<input type="radio" name="Pants[]" value="XXL" /> XXL
				</td>
			</tr>

			<!----- Submit and Reset ------------------------------------------------->
			<tr>
				<td colspan="2" align="center"><input type="submit"
					value="Enviar"></td>
			</tr>
		</table>

	</form>

</body>
</html>