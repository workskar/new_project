<?php
    require_once "../includes/header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/portada.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/GDhead.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/contact.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/calender.css" />
<script type='text/javascript' src='/js/calendario.js'></script>
</head>
<body>
<div id="container" class="contact">

<div id="container_logo">
		<a href="../index.php" title="GoldenDoves.com" id="logo_golden"><span class="nada">Golden</span></a>
        <div id="caja_contacto">
        	<div id="content_buscar">
				<input id="caja_busqueda" name="caja_busqueda" onkeypress="return KeyPress_buscar(event)" 
            	type="text" value="Busca, busca" onClick="this.value='';"/>
				<a href="javascript:buscador()" class="boton_buscar" id="boton_buscar" 
            	onClick="weborama_click('1024_Enlaces_Cabecera', 'BotonBuscar_INICIO');return true" title="Buscar">
            	<span class="nada">Buscar</span></a>
			</div>
        	<p><br /><a href="contact.php"  title="contact us">Call us: </a><span class="num_info">020 7582 6006</span></p>
		</div>
	</div>
	<div id="headerGD">
            <?php getHeadcomun("contact"); ?>
	</div>
    <div id="content">
    <div id="contain_body">    	
        <div id="contact_us">
        	<div class="img_cont">
            <img src="../img/conta us1.jpg" title="contact us" />
            </div>
            <div id="calender">
                <script>
                    hoy=new Date();
                    escribirCalendario(hoy);
                </script>
            </div>
     	</div>
        <div id="content_left">
        	<h1>Tell us what  you want, we will hear</h1>
            <p>you can send us an email  <a href="mailto: Goldendoves@btconnect.com" title=" Goldendoves@btconnect.com">Goldendoves@btconnect.com</a></p>
        </div>
        <div id="caja_right">
				<h3>Where we are?</h3>
				<p>Golden Doves Ltd<br>313 Romford Road<br>London E7 9HA</p>
				<p>Tel. 020 7582 6006 </p>
                <p>Fax. 02085224157</p>
                <p>Mobile: 0795 6994 007/ 0785 2490 550</p>
	 </div>   
    </div>
    	
    <hr class="separador_puntos"/>  
    </div>

</div>
</body>
</html>