// Creacion de una libreria para generar calendarios
// mediante JavaScript
// Autores: Juan Antonio Jimenez
// Fecha: 2001 12 11


// Inicialización de Variables	
	Ancho = 140;						//ancho de la tabla

	Fondo 			= "#FFCC99";		//color de la celda
	FondoFestivo 	= "#FEBF7D";		//color de la celda en día festivo
	FondoTitulo 	= "#003366";		//color de fondo para el título
	FondoDiasSemana = "#DB9000";		//color de fondo para los días de la semana
	
	colorLinea 		= "#FFFFFF";		//color de la linea entre las celdas
	
	cp = 1;								// cellpadding
	cs = 1;								// cellspacing

	Meses = new Array;
		Meses[0]  = "January";
		Meses[1]  = "February";
		Meses[2]  = "March";
		Meses[3]  = "April";
		Meses[4]  = "May";
		Meses[5]  = "June";
		Meses[6]  = "July";
		Meses[7]  = "August";
		Meses[8]  = "September";
		Meses[9]  = "October";
		Meses[10] = "November";
		Meses[11] = "December";
	
	DiasSemana = new Array ("M","T","W","TH","F","S","S");
	DiasMes = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
	

function escribirCalendario(fecha){
	
	dia = fecha.getDate();
	diaSemana = fecha.getDay();
	mes = fecha.getMonth();
	anno = fecha.getYear();
	
	if (anno%4 == 0) {
		DiasMes[1] = 29
		//Si es bisiesto Febrero tiene 29 dias
	}
	
	stTexto = "";
	stTexto += "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n";
	stTexto += "<tr>\n";
	stTexto += "	<td bgcolor=\"" + colorLinea + "\">\n";
	stTexto += "		<table cellpadding=\"" + cp +"\" cellspacing=\"" + cs + "\" border=\"0\" width=\"" + Ancho + "\">\n";
	stTexto += "		<tr>\n";
	stTexto += "			<td colspan=\"7\" bgcolor=\"" + FondoTitulo + "\" class=\"titulo\" align=\"center\"><b>&nbsp;" + Meses[mes].toUpperCase() + "&nbsp;</b></td>\n";
	stTexto += "		</tr>\n";
	stTexto += "		<tr>\n";
	document.write(stTexto);
	for(i=0;i<7;i++){
		document.write ("<td bgcolor=\"" + FondoDiasSemana + "\" class=\"txt\" align=\"center\"><b>&nbsp;" + DiasSemana[i] + "&nbsp;</b></td>");
	}
			
	
	stTexto  = "";			
	stTexto += "		</tr>\n";
	document.write(stTexto);
	
	aux = (dia - diaSemana + 1)%7	
	//aux es el primer lunes del calendario
	
	if (aux > 1) {
		aux = aux - 7;				
		//aux es la primera casilla del calendario. 
		//Suele tener valor negativo
	}

	nS = Math.ceil((DiasMes[mes] - aux + 1)/7);
	//numero de semanas que va a ocupar ese mes
	
	// construye el calendario
	//   el 1er for genera las filas (semanas)
	//   y el 2o for escribe cada día de la semana para esa semana
	for (var numSemana = 0; numSemana < nS; numSemana++){
		document.write("<tr>");
		for (i=0; i<7 ; i++){

			if (i > 4) {
				// es fin de semana
				fondo = FondoFestivo;
				clase = "txtFestivo";
			} else {
				// es dia laborable
				fondo = Fondo;
				clase = "txt";
			}

			iAux = aux + i + numSemana*7;
			if (iAux < 1){
				// escribimos celdas vacias porque el dia 1 aun no ha llegado
				document.write("<td align=\"center\" bgcolor=\"" + fondo +"\" class=\"" + clase +"\">&nbsp;</td>");
			}else if (iAux < DiasMes[mes] + 1 ){
				// ponemos el dia en negrita si coincide con la fecha que le hemos pasado a la funcion
				if (iAux == dia){
					document.write("<td align=\"center\" bgcolor=\"" + fondo +"\" class=\"" + clase +"\"><b>" + iAux + "</b></td>");				
				}else{
					document.write("<td align=\"center\" bgcolor=\"" + fondo +"\" class=\"" + clase +"\">" + iAux + "</td>");
				}
			}else{
				// terminamos de rellenar la tabla con celdas vacias
				document.write("<td align=\"center\" bgcolor=\"" + fondo +"\" class=\"" + clase +"\">&nbsp;</td>");
			}
		}
		
		document.write("</tr>");
	}
	
	stTexto  = "";			
	stTexto += "		</tr>\n";
	stTexto += "		</table>\n";
	stTexto += "	</td>\n";
	stTexto += "</tr>\n";
	stTexto += "</table>\n";
	document.write(stTexto);
}