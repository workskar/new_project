<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Servicest</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/portada.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/GDhead.css" />
<!--script type='text/javascript'  src='../js/jquery.min.js'></script>
<script type='text/javascript'  src='../js/jquery.pack.js'></script>
<script type='text/javascript'  src='../js/content.js'></script-->
</head>
<body>
<div id="container" class="recruitment">
	<?php $varS=2; $varR=1; $varL=0; $varT=0;?>
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
        	      
            <p>Golden Doves Recruitment Services is full service employment agency for healthcare personnel committed to excellence services.
             We are dedicated to providing responsive quality services to all our clients/service users.<br /> 
             we specialize in the domestic, health and social care industry providing staffing to various institutions including but not; limited
             to hospitals, day centres  residential and nursing homes.</p>
             <p>Our experienced healthcare suport staffs are qualified up to and including QCF Level 3 and are experienced in working with
             EMI client groups, learning disabilities, nursing and convalescence in residencial settings.They understand that each environment is unique and clients'/service users' needs will       vary, depending on individual's needs.</p>
             <h2>Our mission</h2>
             <p>To deliver the highest of services , possibly, through commitment to excellence in work and personal ethics and to establish
             our position as a leading domestic, health and social care staff provider.</p>
        </div>
        <div id="content2">
             <h2>Our Commitment</h2>
             <p>To continually meeting our clients'/service users' expectations. And social care industry by consistently meeting our client's 
             expectations and strive to achieve exceptional service delivery.<br />
             To ensure our performance is continually reviewed and improved trough client feedback, surveys and respond to our clients'/service users' needs and recruitments.<br />
             GOLDEN DOVES RECRUITMENT SERVICE has developed an extensive resource data base of qualified and experienced healthcare support staff.
             </p>
             <h2>Training</h2>
             <p>GOLDEN DOVES RECRUITMENT SERVICES is committed to the code of Good Recruitment Practice.<br />
             candidates and applicants are assessed and placed on the basis of qualification, suitability and their capability.<br />
             Mandatory courses and applicants are updated according to the specified health and social care regulation and monitored
             trough our candidate-training database.<br />
             Further trainings and qualifications are encouraged at every level inline with our client's staffing recruitments, with 
             every employee working to an individual personal development plan, which is regularly monitored and assessed through 
             our appraisal program.
             </p>
         </div>
         <div id="content3">
             <h2>Minimum Requirements</h2>
             The minimun documentary evidence required from all staff applicants is:
             <ul>
                <li>A  minimum of 1 year experience in the Healthcare industry</li>
                <li>A currente updated Policie Record Checks - CRB</li>
                <li>Two written professional references</li>
                <li>Evidencce of basic qualifications or experience held</li>
                <li>Valid work Permits</li>
                <li>Proof of addres and ID</li>
             </ul>
         </div>
         <div id="content4">
         	<div id="caja_superior">
                 <h1>Charge Rates</h1>
                 <p>Residential Rates (EMI Residential/Nursing Homes)</p>
                 <ul class="boxrates">
                    <li class="first">Grade of Worker and shift time</li><li>Rate/Hr</li>
                    <li class="first">Care Assistant - Monday to Friday - Day</li><li> £9.40</li>
                    <li class="first">Care Assistant - Monday to Friday - Night</li><li>£9.50</li>
                    <li class="first">Care Assistant - Weekend - day</li><li>£9.50</li>
                    <li class="first">Care Assistant - Bank Holiday</li><li>£18.95</li>
                    <li class="first">Care Assistant - Sleepover Monday to Friday</li><li>£50.00</li>
                    <li class="first">Care Assistant - Sleepover Weekend</li><li>£55.00</li>
                    <li class="first">Care Assistant - Sleepover Bank Holiday</li><li>£89.00</li>
                 </ul>
             </div>
             
             <div id="caja_superior">
                 <p>Support Workers | Rates (Supported living MH & LD)</p>
                 <ul class="boxrates">
                    <li class="first">Grade of Worker and shift time</li><li>Rate/Hr</li>
                    <li class="first">Support worker - Monday to Friday - Day</li><li>£10.75</li>
                    <li class="first">Support worker - Monday to Friday - Night </li><li>£10.95</li>
                    <li class="first">Support worker - Weekend - Day</li><li>£11.96</li>
                    <li class="first">Support worker - Weekend - Night</li><li>£11.98</li>
                    <li class="first">Support worker - Bank Holiday</li><li>£21.95</li>
                    <li class="first">Support worker - Sleepover Monday to Friday</li><li>£44.00</li>
                    <li class="first">Support worker - Sleepover Weekend</li><li>£64.95</li>
                    <li class="first">Support worker - Sleepover Bank Holiday</li><li>£85.00</li>      
                 </ul>
             </div>
             <div id="caja_superior">
                 <p>The rates are inclusive of employee NI and VAT on agent's commission where applicable.</p>
                 <ul>
                    <li>A minimum 4 hours charge will be applied for each booking, which is for duration of less than 4 hours.</li>
                    <li>Hours worked are rounded off to the nearest 15min for our charging purposes.</li>
                    <li>No further charges are added.</li>
                    <li>Day rates apply from 8.00am to 8.00pm.</li>
                    <li>Night rates apply from 8.00pm to 8.00am</li>
                    <li>Weedend night rates apply from Friday 8.00am to Monday 8.00am</li>
                    <li>A canellation fee of 60% of the applicable rate on full booking will be 
                    charged on confirmed bookings cancelled within 24hrs.</li>
                 </ul>
             </div>
             <p>Golden Doves Recruitment Services pay policy is based on the fact that in order to attract 
             and retain a high calibre of experienced care staff, the rate of pay has to be competitive.</p>
             <p>We are, however, flexible in our approach and willing to negotiate with a view to reaching a mutually rewarding agreement.</p>
             <p>Golden Doves Recruitment Services are available on the phone 24/7 to render to our clients a service with a Golden touch.</p>
            
        </div>
        </div>
        <div id="caja_right">
        <h1></h1>
            <ul>
                <li><a id="click1"  href="javascript:function()" title="Recruitment"> Recruitment</a></li>
                <li><a id="click2"  href="javascript:function()" title="commitment">  Our commitment</a></li>
                <li><a id="click3" href="javascript:function()" title="Minimum requirements"> Minimum requirements</a></li>
                <li><a id="click4" href="javascript:function()" title="Charge rates"> Charge rates</a></li>
                <li><a href="download.php?doc=0">Download Aplication</a></li>
            </ul>
     	</div>
    </div>
    
    <hr class="separador_puntos"/>  
    </div>
    
</div>
</body>
</html>