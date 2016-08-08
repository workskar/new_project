/*!
 * jQuery JavaScript Library v1.3
 * http://jquery.com/
 *
 * Copyright (c) 2009 John Resig
 * Dual licensed under the MIT and GPL licenses.
 * http://docs.jquery.com/License
 *
 * Date: 2009-01-13 12:50:31 -0500 (Tue, 13 Jan 2009)
 * Revision: 6104
 */
jQuery(function($) {
var timer;
function button1_click(event)
{
$(".slide").css("visibility","hidden");
$("#image1").css("visibility","visible");
$("#image1").css("opacity","0");
$("#image1").animate({"opacity":1},300, "linear", null);
$("ul.buttons li").removeClass("active");
$("#image1").animate({"opacity":1},300, "linear", null);
$("#button1").addClass("active");
clearTimeout(timer);
timer = setTimeout(eval("button2_click"),"3000");
$("#image1").animate({"opacity":1},300, "linear", null);
}

function button2_click(event)
{
$(".slide").css("visibility","hidden");
$("#image2").css("visibility","visible");
$("#image2").css("opacity","0");
$("#image2").animate({"opacity":1},300, "linear", null);
$("ul.buttons li").removeClass("active");
$("#image2").animate({"opacity":1},300, "linear", null);
$("#button2").addClass("active");
clearTimeout(timer);
timer = setTimeout(eval("button3_click"),"3000");
$("#image2").animate({"opacity":1},300, "linear", null);
}

function button3_click(event)
{
$(".slide").css("visibility","hidden");
$("#image3").css("visibility","visible");
$("#image3").css("opacity","0");
$("#image3").animate({"opacity":1},300, "linear", null);
$("ul.buttons li").removeClass("active");
$("#image3").animate({"opacity":1},300, "linear", null);
$("#button3").addClass("active");
clearTimeout(timer);
timer = setTimeout(eval("button1_click"),"3000");
$("#image3").animate({"opacity":1},300, "linear", null);
}

function OnLoad(event)
{
clearTimeout(timer);
timer = setTimeout(eval("button2_click"),"3000");
}

$('#button1').bind('click', button1_click);

$('#button2').bind('click', button2_click);

$('#button3').bind('click', button3_click);

OnLoad();

});