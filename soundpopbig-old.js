var UniqueID = 314 // Make each link open in a new window 
var newWinOffset = 0 // Position of first pop-up

function PlayerOpenLarge(soundfiledesc,soundfilepath,pageimage) { 
PlayWin = window.open('',UniqueID,'width=675,height=595,top=' + newWinOffset +',left=0,resizable=1,scrollbars=1,titlebar=0,toolbar=0,menubar=0,status=0,directories=0,personalbar=0');
PlayWin.focus(); 

var winContent = "<HTML><HEAD><TITLE>" + 'Play Sound Clip' + "</TITLE></HEAD><BODY onBlur=self.focus() bgcolor='#9999ff'>";

winContent += "<DIV align='center'>";
winContent += "<B style='font-size:18px;font-family:Verdana,sans-serif;line-height:1.5'>" + soundfiledesc + "<p></B>";
winContent += "</DIV>";

winContent += "<DIV align='center'>";
// detect browser for choice of flash or HTML5
if(((navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/Linux/i)))) { 
winContent += "<audio controls='controls'>";
winContent += "<source src='" + soundfilepath + "' type='audio/mpeg' />";
winContent += "</audio>";
} else {
winContent += "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='335' height='65' title='"+ soundfiledesc +"'>"; 
winContent += "<param name='movie' value='Audio/Movie.swf?test=" + soundfilepath + "'>";
winContent += "<param name='quality' value='high'>"; 
winContent += "<param name='wmode' value='transparent'>";
winContent += "<embed src='Audio/Movie.swf?test=" + soundfilepath + "' width='335' height='66' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' wmode='transparent'></embed>";
winContent += "</object>";  
}
winContent += "</DIV>";
winContent += "<br>";
winContent += "<FORM><DIV align='center'><INPUT type='button' value='Close this window' onclick='javascript:window.close();'></DIV></FORM>"; 

winContent += "<DIV align='center'>";
winContent += "<B style='font-size:12px;font-family:Verdana,sans-serif;line-height:1.5'>Haftorah Audio &copy;2009 Rabbi Mark Zimmerman<p>" + pageimage + "</B>";
winContent += "</DIV>";
winContent += "<FORM><DIV align='center'><INPUT type='button' value='Close this window' onclick='javascript:window.close();'></DIV></FORM>"; 

winContent += "</BODY></HTML>"; 

PlayWin.document.write(winContent); 
PlayWin.document.close(); // "Finalizes" new window 
UniqueID = UniqueID + 1 // newWinOffset = newWinOffset + 20 // subsequent pop-ups will be this many pixels lower 
}