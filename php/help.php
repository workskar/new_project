<?php
    require_once "../includes/header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Help</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/portada.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/GDhead.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/help.css" />
<script type='text/javascript' src='/js/calendario.js'></script>
<script type='text/javascript'  src='/js/jquery.min.js'></script>
<script type='text/javascript'  src='/js/jquery.pack.js'></script>
<script type='text/javascript'  src='/js/content.js'></script>
</head>
<body>
<div id="container" class="help">
 
<div id="container_logo">
		<a href="/index.php" title="GoldenDoves.com" id="logo_golden"><span class="nada">Golden</span></a>
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
		<?php getHeadcomun("help"); ?>
    	</ul>
	</div>
    <div id="content">
    <div id="contain_body">    	
        <div id="contain_left">
        	<div id="content1">
                <p>The aplication, you can download in here, and to full the aplication, and send by:</p>
                <p><a href="download.php?doc=0">Download aplication recruitment</a></p>
                <p><a href="download.php?doc=1">Download aplication training</a></p>
         
                <ul>
                 <li><a href="mailto:Goldendoves@btconnect.com " title="Goldendoves@btconnect.com ">Goldendoves@btconnect.com </a></li>
                 <li>post office</li>
                 <li>fax: 020 7582 7827</li>
                </ul>
            </div>
        </div>
        <div id="caja_right">
            <h1>Solve your doubts here</h1>
            <ul>
                <li><a id="click1"  href="javascript:function()" title="Recruitment">how to submit your applications</a></li>
                
            </ul>
     	</div>

    </div>
    	
    <hr class="separador_puntos"/>  
    </div>
 

</div>
</body>
</html>

