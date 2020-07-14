<HTML>
<HEAD>
  <TITLE>PROGRAMADOR</TITLE>
</HEAD>
<BODY>
    <H1 ALIGN="CENTER">ACTUALIZACION DE DATOS</H1>
	
	<?php
	   include("CONEXION.php");
	   $link = Conectarse();
	   $result = mysqli_query($link,"select * from programador");
	?>
	   <TABLE ALIGN="CENTER" BORDER=1 CELLSPACING=1 CELLPADDING=1>
	   <TR><TD>&nbsp;<B>NOMBRE COMPLETO</B></TD>
	   <TD>&nbsp;<B>CARGO ACTUAL PROGRAMADOR</B>&nbsp;</TD>
	   <TD>&nbsp;<B>CORREO ELECTRONICO</B></TD>
	   <TD>&nbsp;<B>WEBSITE DE PORTAFOLIO</B>&nbsp;</TD>
	   <TD>&nbsp;<B>ACTUALIZAR</B>&nbsp;</TD>
	<?php
	
	   while($row = mysqli_fetch_array($result)){
		printf("
			<FORM ACTION ='UPDATE.php'>
				<tr>
					<td>&nbsp;%s</td> <td><INPUT TYPE='text' NAME='nombre' value='$row[NOMBRE]'></td>
					<td><INPUT TYPE='text' NAME='cargo' value='$row[CARGO_PROGRAMADOR]'></td>
					<td><INPUT TYPE='text' NAME='correo' value='$row[CORREO_ELECTRONICO]'></td>
					<td ALIGN='CENTER'>
						<INPUT TYPE='text' NAME='website' value='$row[WEBSITE_PORTAFOLIO]' style='display:none'>
						<INPUT TYPE='submit' NAME='accion' VALUE = 'ACTUALIZAR'>
					</td>
				</tr>
			</FORM>",$row["NOMBRE"],$row["CARGO_PROGRAMADOR"],$row["CORREO_ELECTRONICO"],$row["WEBSITE_PORTAFOLIO"]);	
	   }
	   mysqli_free_result($result);
	   mysqli_close($link);
	?>   
</BODY>
<HTML>