// JavaScript Document
var isIEBUS = false;
var reqBUS;
function cargarBUSCADOR(url) {
	if(url==''){
		return;
	}
	if (window.XMLHttpRequest) {
			reqBUS = new XMLHttpRequest();
			reqBUS.onreadystatechange = processReqChangeBUS;
			reqBUS.open("GET", url, true);
			reqBUS.send(null);
	} else if (window.ActiveXObject) {
		isIEBUS = true;
		reqBUS = new ActiveXObject("Microsoft.XMLHTTP");
		if (reqBUS) {
			reqBUS.onreadystatechange = processReqChangeBUS;
			reqBUS.open("GET", url, true);
			reqBUS.send();
		}
	}
}

function processReqChangeBUS(){
    var content= document.getElementById("content");
 	if(reqBUS.readyState == 4){
		content.innerHTML = reqBUS.responseText;
		Cufon('#titbuscador', {fontFamily: 'Trade Gothic LT Com'});
		Cufon('.pestanya_busca_on h2');
		Cufon('.pestanya_busca_off h2');
	}
}
function buscadorOLD()
{
  var val = document.getElementById("caja_busqueda");
  var menu = document.getElementById("menu");
  var menu_right = document.getElementById("menu_right");
  var submenu = document.getElementById("submenu");
  
  if (val.value!="" && val.value!="Busca, busca") 
  {
	cargarBUSCADOR('/buscar.php?txt='+val.value);
	menu.innerHTML = "<li><a href='/index.php'>Inicio</a></li><li><a href='/tienda/index.php'>Tienda</a></li><li><a href='/tarifas/index.php'>Tarifas</a></li><li><a href='/internet/index.php'>Internet</a></li><li><a href='/servicios/index.php'>Servicios</a></li><li><a href='/enyoigo/index.php'>Enyoigo</a></li>";
	menu_right.innerHTML = "<li style='word-spacing: -3px'><a title='Recarga' href='/recarga/recarga-web.php'>Recarga</a></li><li style='word-spacing: -3px'><a title='Renuevo' href='/renuevo/index.php'>Renuevo</a></li><li style='word-spacing: -3px'><a title='Mi Yoigo' href='/miyoigo/index.php'>Mi Yoigo</a></li><li style='word-spacing: -3px'><a title='Ayuda al cliente' href='/ayuda-al-cliente/index.php'>Ayuda al cliente</a></li>";
	submenu.innerHTML = "<li class='select'></li>";
	Cufon('#menu li', {hover: true});
	Cufon('#menu a', {hover: true});
	Cufon('#menu_right li', {hover: true});
	Cufon('#menu_right a', {hover: true});
	Cufon.replace('#menu_right');  
  }
}
function buscador()
{
  var val = document.getElementById("caja_busqueda");
  if (val.value!="" && val.value!="Busca, busca") 
  {
	location.href='/buscador.php?buscar='+val.value;
  }
}

function KeyPress_buscar(e)
{
 key=(document.all) ? e.keyCode : e.which;
 if (key == 13){
  buscador();
  return false;
 }
}

