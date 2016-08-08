<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services Training</title>
<link rel="stylesheet" type="text/css" media="screen" href="../css/portada.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/GDhead.css" />
<script type='text/javascript'  src='../js/jquery.min.js'></script>
<script type='text/javascript'  src='../js/jquery.pack.js'></script>
<script type='text/javascript'  src='../js/content.js'></script>

</head>
<body>
<div id="container" class="recruitment">
    
	<?php $varS=2; $varR=0; $varL=0; $varT=1; ?>
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
        <p>Goldon Doves limited is a training provider for QCF in Health and Social care. We aim to provide high quality QCF's in care to meet
        the needs and requirements.</p>
         <div id="content1">
                <h2>Our mission</h2>
                <p>To provide high quality training qualifications to meet the needs of the today's customers in line with the 
                Awarding Bodies Requirements.
                </p>      
                <h2>Our aim is:</h2>
                  <ul>
                    <li>To support the learners trough flexible course delivery.</li>
                    <li>To promote equal opportunity for all learners/customers.</li>
                    <li>To help develop a more skilled workforce.</li>
                    <li>To regularly review our courses in order to ensure up to date training.</li>
                  </ul>
            </div>
         <div id="content2"> 	    
            <h2>Our commitment</h2>
            <p>As training providers, we are aware of the problems candidates experience in completing their QCF's. In order to help the completion process, we provide experienced and strong internal verifiers to support the assessors who are key in motivating candidates. We are committed to support our candidates throughout their QCF training ensuring their success and enjoyment in achieving their goals.
           </p>
           <h2>QCF in Health and Social care training courses.</h2>
           <p>We offer QCF in health and social care for adults, children and young people.</p>
           <h2>QCF in Health and Social care Levels: 2, 3 and 4</h2>
           <p>If you already work in the care sector, this course lets you back up your work experience with formal learning.
           These qualifications enable you to meet the needs of service users more effectively as well as offering an aid to career progression.</p>
           
           <h2>Who should take the training (QCF)</h2>
           <p>QCF are appropriate for those working in variety of job roles with Health and Social care. Those at level 2 and 3 may be either working directly in care or supervising and managing others. Those at level 4 will hold more senior roles. Those employed in residential, hospital, day care or domiciliary settings quality for this training.</p>
          </div>
         <div id="content3">
           <h2>Details of Programmes</h2>
           <p>The literacy and numeracy test is a tool designed to assess aspects of a  learners reading and writing skills. The questions are based on
           criteria taken from the adult literacy core curriculum and national standard. The questions includes.</p>
           
             <ul>
                <li>Verbal and non verbal reasoning</li>
                <li>Multiple choice questions</li>
                <li>Logical reasoning</li>
                <li>Synonyms and Antonyms.</li>
             </ul>
             <div id="caja_superior">
                        <ul id="boxlevel">
                            <li>level</li><li>2</li><li>3</li><li>4</li><li class="last" >Literacy, numeracy, other vocational course.</li>
                            <li>Fees</li><li>£1,200</li><li>£1,500</li><li>£1,500</li><li class="last">On arrangement</li>
                            <li>Duration of course</li><li>Up to 6 months</li><li>6-10 months</li><li>10-12 months</li><li class="last">On arrangement</li>
                        </ul>
            </div>  
                
           </div>
         <div id="content4">
                <h2>QCF Assessor/Verifier/Professional Profile</h2>
                <p>We have an Assessor, he has National Vocacional Qualification ASET Level 4 Award in Conducting Internal Quality 
                Assurance of the Assessment Process and he is responsible for:</p>
                <h3>1. Observing your candidate undertaking a planned activity.</h3>
                <ul>
                    <li>You will ensure that this is done in an unobtrusive manner and doesn't in anyway interfere with the dignity and/or 
                    privacy of the client.</li>
                    <li>If appropriate the clients permission is sort and/or the presence of the assessor is explained.</li>
                    <li>The class tutor/head of department has received the information required for observation</li>        
                </ul>
                <h3>2. Judging the evidence against the criteria and make an assessment decision</h3>
                <ul>
                    <li>Ensuring that you have the same expectations on each candidate.</li>
                    <li>Assess the candidate at the standard you would expect from a colleague, and keep to that standard.</li>
                </ul>
                <h3>3. Giving feedback to your candidate</h3>
                <ul>
                    <li>Within the allocated timescale</li>
                    <li>At a pre-arranged time</li>
                    <li>Make the feedback session productive - ask why things were done in such a way, ask how it could be improved, 
                    Highlight good practice</li>
                </ul>
                <h3>4. Devising questions written and oral to confirm that the candidate has the knowledge evidence required for the 
                elements of competence</h3>
                <ul>
                    <li>Ensure same questions used for each candidate who uses English as an additional language.</li>
                    <li>Be aware of any candidate who uses English as an additional language.</li>
                    <li>Be aware of any candidate who has any special needs and ensure you are prepared to address these needs.</li>
                </ul>
                <h3>5. Asking questions that relate to the observation, range statement</h3>
            </div>
        </div>
        <div id="caja_right">
        <h1></h1>
    	<ul>
        	<li><a id="click1"  href="javascript:function()" title="Our mission"> Our mission</a></li>
            <li><a id="click2"  href="javascript:function()" title="Our commitment">  Our commitment</a></li>
            <li><a id="click3" href="javascript:function()" title="Details of programems"> Details of programems</a></li>
            <li><a id="click4" href="javascript:function()" title="Assessor"> Assessor/Verifier/Professional Profile</a></li>
            <li><a href="download.php?doc=1">Download Aplication</a></li>
        </ul>
        <!--<p class="base"></p>-->
        <div class="caja_bottom"></div>
     </div>
     
     <hr class="separador_puntos"/>
    </div>
   
</div>
</body>
</html>

