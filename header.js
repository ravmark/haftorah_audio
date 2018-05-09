<!-- Begin

// NOTE: If you use a ' add a slash before it like this \'


var flashcolor		= "000000"		// FLASH BACKGROUND COLOR
var color		= "000000"		// HEADER BACKGROUND COLOR
var flashheight		= "75"			// HEIGHT OF THE FLASH (IN PIXELS)
var flashwidth		= "750"			// WIDTH OF THE FLASH (IN PIXELS)



// COPYRIGHT 2005 © Allwebco Design Corporation
// Unauthorized use or sale of this script is strictly prohibited by law

// YOU DO NOT NEED TO EDIT BELOW THIS LINE

// START FLASH HEADER

document.write('<TABLE cellpadding="0" cellspacing="0" border="0" width="100%" BGCOLOR="#'+color+'"><tr><td ALIGN="LEFT">');
document.write('<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="'+flashwidth+'" HEIGHT="'+flashheight+'" id="logo" ALIGN="">');
document.write('<PARAM NAME=movie VALUE="logo.swf">');
document.write('<PARAM NAME=quality VALUE=high> <PARAM NAME=bgcolor VALUE=#'+flashcolor+'>');
document.write('<EMBED src="logo.swf" quality=high bgcolor=#'+flashcolor+'  WIDTH="'+flashwidth+'" HEIGHT="'+flashheight+'" NAME="logo" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">');
document.write('</EMBED>');
document.write('</OBJECT><br>');
document.write('</td></tr></table>');




//  End -->

// START DATE SCRIPT

var showd	= "yes"  	// SHOW THE DATE
var dateLR	= "right"  	// DATE LEFT OR RIGHT
var dateX	= "30"  	// DATE X LOCATION
var dateY	= "50"  	// DATE Y LOCATION
   if (showd == "yes") {
document.write('<div id="date-location" style="'+dateLR+': '+dateX+'px; POSITION: absolute; TOP: '+dateY+'px">');
var d=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
document.write("<span class=\"date-font\"><nobr>" + weekday[d.getDay()] + " ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getDate() + ". ")
document.write(d.getFullYear())
document.write("</nobr><br></span>")
document.write('</div>');
}

