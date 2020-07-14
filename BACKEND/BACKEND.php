<HTML>
<HEAD>
  <TITLE>PROGRAMADORES</TITLE>
</HEAD>
<BODY>
    <H1>PROGRAMADORES</H1>
	<FORM action = "INSERTAR.php" method="GET" >
	  <TABLE>
		 <TR>
		   <TD>NOMBRE COMPLETO:</TR>
		   <TD><INPUT TYPE="text" NAME="nombre" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>CARGO ACTUAL PROGRAMADO:</TR>
		   <TD><INPUT TYPE="text" NAME="cargo" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>CORREO ELECTRONICO:</TR>
		   <TD><INPUT TYPE="email" NAME="correo" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
		 <TR>
		   <TD>WEBSITE DE PORTAFOLIO:</TR>
		   <TD><INPUT TYPE="text" NAME="website" SIZE= "20" MAXLENGTH = "30" required></TR>
		 </TR>
	  </TABLE>
	  <TD><INPUT TYPE="submit" NAME="accion" VALUE = "INSERTAR"></TR>
	</FORM>
	<HR>
	<?php
	   include("CONEXION.php");
	   $link = Conectarse();
	   $result = mysqli_query($link,"select * from programador");
	?>
	   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
	   <TR><TD>&nbsp;<B>NOMBRE COMPLETO</B></TD>
	   <TD>&nbsp;<B>CARGO ACTUAL PROGRAMADOR</B>&nbsp;</TD>
	   <TD>&nbsp;<B>CORREO ELECTRONICO</B></TD>
	   <TD>&nbsp;<B>WEBSITE DE PORTAFOLIO</B>&nbsp;</TD>
	   <TD>&nbsp;<B>ACTUALIZAR</B>&nbsp;</TD>
	   <TD>&nbsp;<B>BORRAR</B>&nbsp;</TD>
	 <HTML>
		<?php
		   while($row = mysqli_fetch_array($result)){
			   printf("<tr>
			   	<td>$row[NOMBRE]</td>
			   	<td>$row[CARGO_PROGRAMADOR]</td>
			   	<td>$row[CORREO_ELECTRONICO]</td>
			   	<td>$row[WEBSITE_PORTAFOLIO]</td>
			   		<td><FORM ACTION = 'ACTUALIZAR.php'>
					<INPUT TYPE='text' NAME='nombre' value='$row[NOMBRE]' style='display:none'>
					<INPUT TYPE='submit' NAME='accion' VALUE = 'actualizar'>
					</FORM></td> 
					<td><FORM ACTION = 'DELETE.php'>
					<INPUT TYPE='text' NAME='nombre' value='$row[NOMBRE]' style='display:none'>
					<INPUT TYPE='submit' NAME='accion' VALUE = 'borrar'>
					</FORM></td></tr>");   
		   }
		   mysqli_free_result($result);
		   mysqli_close($link);
		?>   
	</HTML>
</BODY>
<HTML>