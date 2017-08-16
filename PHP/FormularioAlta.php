<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>
<html>
<head>
<title>Alta nuevo voluntario</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:#30a203;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: #03a240; border-collapse: collapse; border: 2px solid black}
table.inner{border: 0px}
</style>
</head>
 
<body>
<h3>FORMULARIO NUEVO VOLUNTARIO</h3>
<form action="form.php" method="POST">
 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>NOMBRE</td>
<td><input type="text" name="First_Name" maxlength="30"/>
<!-- (max 30 characters a-z and A-Z) -->
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>PRIMER APELLIDO</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
<!-- (max 30 characters a-z and A-Z) -->
</td>
</tr>

<!----- Last Name 2 ---------------------------------------------------------->
<tr>
<td>SEGUNDO APELLIDO</td>
<td><input type="text" name="Last_Name_2" maxlength="30"/>
<!-- (max 30 characters a-z and A-Z) -->
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>FECHA DE NACIMIENTO</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Día:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Mes:</option>
<option value="January">Enero</option>
<option value="February">Febrero</option>
<option value="March">Marzo</option>
<option value="April">Abril</option>
<option value="May">Mayo</option>
<option value="June">Junio</option>
<option value="July">Julio</option>
<option value="August">Agosto</option>
<option value="September">Septiembre</option>
<option value="October">Octubre</option>
<option value="November">Noviembre</option>
<option value="December">Diciembre</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>Número de móvil</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
<!-- (10 digit number) -->
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>SEXO</td>
<td>
Masculino <input type="radio" name="Gender" value="Male" />
Femenino <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>DIRECCIÓN<br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CIUDAD</td>
<td><input type="text" name="City" maxlength="30" />
<!-- (max 30 characters a-z and A-Z) -->
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>CÓDIGO POSTAL</td>
<td><input type="text" name="Pin_Code" maxlength="5" />
<!-- (5 digit number) -->
</td>
</tr>

<!----- Country ---------------------------------------------------------->
<tr>
<td>PAÍS</td>
<td><input type="text" name="Country"  maxlength="20"/></td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<!-- <tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Dancing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby_Cooking" value="Cooking" />
<br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr> -->
 
<!----- Qualification---------------------------------------------------------->
<!-- <tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>3</td>
<td>Graduation</td>
<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>4</td>
<td>Masters</td>
<td><input type="text" name="Masters_Board" maxlength="30" /></td>
<td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
<td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
  -->
<!----- Course ---------------------------------------------------------->
<!-- <tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
BCA
<input type="radio" name="Course_BCA" value="BCA">
B.Com
<input type="radio" name="Course_BCom" value="B.Com">
B.Sc
<input type="radio" name="Course_BSc" value="B.Sc">
B.A
<input type="radio" name="Course_BA" value="B.A">
</td>
</tr> -->
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Enviar">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>