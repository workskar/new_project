<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services Lowyer</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/portada.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/GDhead.css" />
<script type='text/javascript'  src='../js/jquery.min.js'></script>
<script type='text/javascript'  src='../js/jquery.pack.js'></script>
<script type='text/javascript'  src='../js/content.js'></script>
</head>
<body>
<div id="container" class="recruitment"> 
	<?php $varS=2; $varR=0; $varL=1; $varT=0; ?>
	<?php
    require_once "../includes/header.php";
	?>
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
				<p><br /><a href="../php/contact.php"  title="contact us">Call us: </a><span class="num_info">020 7582 6006</span></p>
			</div>
	</div>
	<div id="headerGD">
		<?php getHeadcomun("recruitment");?>
		<div id="navegacion_secundaria">
			<ul id="submenu">
				<li class="<?php if($varR==1){echo "select";} ?>"><a href="recruitment.php" title="recruitment">Recruitment</a></li>
				<li class="<?php if($varT==1){echo "select";} ?>"><a href="training.php" title="training">Training</a></li>
				<li class="<?php if($varL==1){ echo "select";} ?>"><a href="lowyer.php" title="lower">Employment Law</a></li>
				
			</ul>
		</div>
	</div>
	
    <div id="content">
    <div id="contain_body"> 
    	<div id="contain_left">     
        <div id="content1">
            <h2>Golden Doves</h2>
            <p>We are professional lawyers and employment advisers, ready to assist you on Employment
            Matters/Law, Probate Matters, Business & other Support services.
            </p>
            <h2>Legal Services Offered</h2>
            <p>The services to be provided by the firm incluides:</p>
            <ul type='a'>
                <li>Employment</li>
		<li>In the health and social care, add recruitment agency on domestic cleaners, chefs in care homes and other places, kitchen assitants in care homes, hospitals and other places.</li>
		<li>In care training, add training in health and safety, moving and handling, food hygiene etc.</li>
                <li>Solicitors'/Barristers' outdoor clerking services- Qualified professional outdoor clerks agency.</li>
            </ul>
            <p>The Director and Adviser in the company are experienced and had worked in other companies/firms with clientele. Most of their respective employment clients have shown interests to remain with them in this company.</p>
        </div>
        <div id="content2">   
        </div>
        </div>
        <div id="caja_right">
        <h1></h1>
    	<ul>
        	<li><a id="click1"  href="javascript:function()" title="Legal Advice & Services to be Provided"> Legal Advice & Services to be 
            Provided</a></li>
            
        </ul>
        <!--<p class="base"></p>-->
        <div class="caja_bottom"></div>
     </div>
    </div>
    
    <hr class="separador_puntos"/>  
    </div>
   
</div>
</body>
</html>
