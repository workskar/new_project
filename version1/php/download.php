<?php
$path_a_tu_doc = "../docs/";

if($_GET['doc']==0){
$id = "GDRecruitmentApplication_Form.doc";
}else{
	$id = "TrainingRegistration_Form.doc";
}
$enlace = $path_a_tu_doc."/".$id;
if (file_exists($enlace))
   { 
	header ("Content-Disposition: attachment; filename=".$id."\n\n");
	header ("Content-Type: application/octet-stream");
	header ("Content-Length: ".filesize($enlace));
	readfile($enlace);
   }else
   {
	  echo "<br>it was impossible to download the file";  
	}
?>