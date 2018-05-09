var UniqueID = 314 // Make each link open in a new window 
var newWinOffset = 0 // Position of first pop-up

function PlayerOpen(soundfiledesc,soundfilepath) { 
PlayWin = window.open('',UniqueID,'width=390,height=217,top=' + newWinOffset +',left=0,resizable=1,scrollbars=0,titlebar=0,toolbar=0,menubar=0,status=0,directories=0,personalbar=0');
PlayWin.focus(); 

var winContent = "<HTML><HEAD><TITLE>" + soundfiledesc + "</TITLE></HEAD><BODY onBlur=self.focus() bgcolor='#9999ff'>"; 
winContent += "<DIV align='center'>";
winContent += "<B style='font-size:18px;font-family:Verdana,sans-serif;line-height:1.5'>" + soundfiledesc + "</B>";
winContent += "</DIV>";
winContent += "<br>";
winContent += "<DIV align='center'>";

//Load HTMl 5 Player
    winContent += "<audio controls autoplay>";
    winContent += "<source src='" + soundfilepath + "' type='audio/mpeg'>";
    winContent += "</audio>";
    winContent += "</div>";
    winContent += "<br>";
    winContent += "<br>";
    winContent += "<form><div align='center'><input type='button' value='Close this window' onclick='javascript:window.close();'></div></form>";

winContent += "</BODY></HTML>"; 

PlayWin.document.write(winContent); 
PlayWin.document.close(); // "Finalizes" new window 
UniqueID = UniqueID + 1 // newWinOffset = newWinOffset + 20 // subsequent pop-ups will be this many pixels lower 
} 