<!-- Start

// NOTE: If you use a ' add a slash before it like this \'

// FLOATING MENU AREA - SEE NOTE BELOW FOR MOVING THE MENU UP ON THE PAGE


if (!document.layers)
document.write('<div id="Floater" style="position:absolute">')
document.write('<layer id="Floater">');


// START THE IMAGE LINKS COPY ANY ONE OF THESE 3 LINES TO ADD A NEW LINK



document.write('<a href="index.html"><img src="picts/float-home.gif" border="0" vspace="1"></a><br>');

document.write('<a href="contact.html"><img src="picts/float-contact.gif" border="0" vspace="1"></a><br>');

document.write('<a href="#top"><img src="picts/float-top.gif" border="0" vspace="1"></a><br>');





document.write('</layer>');





// NOTE: If you add links you will need to alter the "placeY" 250 number below


if (!document.layers)
document.write('</div>')

function FloatMenu()
{
	var Xloc = 0,
	Yloc = 250;
	var ns = (navigator.appName.indexOf("Netscape") != -1);
	function SetMenu(id)
	{
		var GetElements=document.getElementById?document.getElementById(id):document.all?document.all[id]:document.layers[id];
		if(document.layers)GetElements.style=GetElements;
		GetElements.sP=function(x,y){this.style.right=x;this.style.top=y;};
		GetElements.x = Xloc;
		GetElements.y = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		GetElements.y -= Yloc;
		return GetElements;
	}
	window.LoCate_XY=function()
	{
		var pY = ns ? pageYOffset + innerHeight : document.body.scrollTop + document.body.clientHeight;
		ftlObj.y += (pY - Yloc - ftlObj.y)/15;
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("LoCate_XY()", 10);
	}
	ftlObj = SetMenu("Floater");
	LoCate_XY();
}
FloatMenu();


//  End -->