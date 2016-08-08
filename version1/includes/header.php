<?php 
function getHeadcomun($page){
    switch ($page){
        case "contact":
            $cont="select";
            break;
        case "about":
            $ab="select";
            break;
        case "recruitment":
            $re="select";
            break;
        case "help":
            $hel="select";
            break;
        case "training":
            $tr="select";
            break;
        case "law":
            $law="select";
            break;
        default:
            $class="noselect";
    }
    echo '<ul id="menu">
    		<li><a href="../index.php">Home</a></li>
        	<li class="'.$re.'" ><a href="../php/recruitment.php">Services</a></li>
        	<li class="'.$hel.'" ><a href="../php/help.php">Help</a></li>
        	<li class="'.$ab.'" ><a href="../php/aboutus.php">About us</a></li>
        	<li class="'.$cont.'" ><a href="../php/contact.php">Contact Us</a></li>
        </ul>';
}
?>