//*******************************
//*Disable Right Click on a browser
//*Made available by  http://www.anandsoft.com
//*Written by Ravi Shankar Bhatia
//*The above information may not be removed  ..For help please email: info@anandsoft.com
//********************************/
PopUpURL    = "The right click options are disabled for this window";

isIE=document.all;
isNN=!document.all&&document.getElementById;
isN4=document.layers;

if (isIE||isNN)
{
 document.oncontextmenu=checkV;
}
else
{
 document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);
 document.onmousedown=checkV;
} 

function checkV(e)
{
	if (isN4)
	 {
	if (e.which==2||e.which==3)
		{
		dPUW=alert(PopUpURL);
		return false;
		}
	}
	else
	{
	dPUW=alert(PopUpURL);
	return false;
	}
}