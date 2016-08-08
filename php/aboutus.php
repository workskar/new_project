<?php
    require_once "../includes/header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/portada.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/GDhead.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/aboutus.css" />
<script type='text/javascript'  src='js/jquery.pack.js'></script>
<script type='text/javascript' src='/js/calendario.js'></script>
<script>
var fotos=0;
var fotoslogos=0;
function verfoto(val)
{
 var img = document.getElementById("gallery");
 var tot = document.getElementById("totfotos");
 if (val=='+')
 {
  fotos=fotos+1;
  if (fotos>tot.value) fotos=1;
  var imgx = document.getElementById("foto_"+fotos);
  img.innerHTML=imgx.innerHTML;
 }
 else
 {
  fotos=fotos-1;
  if (fotos<=0) fotos=tot.value;
  var imgx = document.getElementById("foto_"+fotos);
  img.innerHTML=imgx.innerHTML;
 }
}

</script>

</head>
<body>
<div id="container" class="aboutus">
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
		<?php getHeadcomun("about"); ?>
    	</ul>
	</div>
    <div id="content">
    <div id="contain_body">    	
        <div id="contain_left">
        	<h1>Organizational structure</h1>
            <p>Golden Doves Recruitment has staff complement of 5 including two managers. They come from a wide range of varied backgrounds 
            and bring to their work practice varying levels of skills and abilities.</p>
            <p>The company operates flexible pattern with 1 member of staff being on 'on-call' duty. Staff will work no more 
            than 37 hours per week.</p>
            <div id="like_this">
				<div class="left">
					<h2>Employment Law Practice</h2>
					<p>To make the process of legal services simplier.</p>
                    <p>to increase the level of responsibility of employers and educational institutions for the 
                    foreign nationals they are sponsoring</p>
				</div>
				<div class="right">
					<h2>Training</h2>
					<p>we provide experienced and strong internal verifiers to support the
                     assessors who are key in motivating candidates. We are committed to support
                      our candidates throughout their QCF training ensuring their success and
                      enjoyment in achieving their goals. </p>
				</div>
			</div>
            <div id="like_this">
				<div class="left">
					<h2>Recruitment</h2>
					<p>We are dedicated to providing responsive quality service to all our
                    clients. We specialize in the domestic, health and social care industry
                     providing staffing to various service users' including but not; limited to
                     hospitals, day centres residential and nursing homes.</p>
				</div>
			</div>
        </div>
        <div id="caja_right">
			<h1>Look!</h1>
			<p>Here you can  see service's photos of the Golden Doves.</p>
			<div id="gallery">
			</div>
			<div style='display:none' id='foto_1'><img src='../img/healthcare1.jpg' title=''><p><strong>Training</strong></p></div>
			<div style='display:none' id='foto_2'><img src='../img/recruitment3.jpg' title='people'><p>Recruitment</p></div>
			<input type=hidden id=totfotos value=18>
			<script>verfoto('+');</script>
			<a class="anterior" href="javascript:verfoto('-');" title="Anterior">Previous</a>
			<a class="siguiente" href="javascript:verfoto('+');" title="Siguiente">Next</a>
		</div>

    </div>
    	
    <hr class="separador_puntos"/>  
    </div>
  

</div>
</body>
</html>
