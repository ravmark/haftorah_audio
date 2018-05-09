// Pop-Up Embedder Script by David Battino, www.batmosphere.com
// Version 2006-05-31  
// OK to use if this notice is included
   
function PlayerOpenLarge(filedesc,filepath,pageimage,WindowNumber) 
{

// Get Operating System 
var isWin = navigator.userAgent.toLowerCase().indexOf("windows") != -1
if (isWin) {
    // Use MIME type = "application/x-mplayer2";
	visitorOS="Windows";
} else {
    // Use MIME type = "audio/mpeg"; // or audio/x-wav or audio/x-ms-wma, etc.
	visitorOS="Other";
}

// Get the MIME type of the audio file from its extension (for non-Windows browsers)
var mimeType = "audio/mpeg"; // assume MP3/M3U
var objTypeTag = "application/x-mplayer2"; // The Windows MIME type to load the WMP plug-in in Firefox, etc.

var theExtension = filepath.substr(filepath.lastIndexOf('.')+1, 3); // truncates .aiff to aif
if (theExtension.toLowerCase() == "wav") { mimeType = "audio/x-wav"};
if (theExtension.toLowerCase() == "aif") { mimeType = "audio/x-aiff"}; 
if (theExtension.toLowerCase() == "wma") { mimeType = "audio/x-ms-wma"};
if (theExtension.toLowerCase() == "mid") { mimeType = "audio/mid"};
// Add additional MIME types as desired

if (visitorOS != "Windows") { 
objTypeTag = mimeType; // audio/mpeg, audio/x-wav, audio/x-ms-wma, etc.
};

    PlayerWin = window.open('',WindowNumber,'width=675,height=595,top=0,left=0,screenX=0,screenY=0,resizable=1,scrollbars=1,titlebar=0,toolbar=0,menubar=0,status=0,directories=0');

    PlayerWin.focus();
    PlayerWin.document.write("<html><head><title>" + 'Play Sound Clip' + "</title></head>");
    PlayerWin.document.write("<body onBlur=self.focus() bgcolor='#9999ff'>"); // specify background img if desired
    PlayerWin.document.write("<div align='center'>");
    PlayerWin.document.write("<b style ='font-size:18px;font-family:Verdana,sans-serif;line-height:1.6'>" + filedesc + "</b><br />");
    PlayerWin.document.write("<object width='280' height='69'>");
    PlayerWin.document.write("<param name='src' value='" +  filepath + "'>");
    PlayerWin.document.write("<param name='type' value='" + objTypeTag + "'>");
    PlayerWin.document.write("<param name='autostart' value='1'>");
    PlayerWin.document.write("<param name='showcontrols' value='1'>"); 
    PlayerWin.document.write("<param name='showstatusbar' value='1'>");
    PlayerWin.document.write("<embed src ='" + filepath + "' type='" + objTypeTag + "' autoplay='true' width='280' height='69' controller='1' showstatusbar='1' bgcolor='#9999ff' kioskmode='true'>");
    PlayerWin.document.write("</embed></object></div>");
	PlayerWin.document.write("<form><div align='center'><input type='button' value='Close this window' onclick='javascript:window.close();'></div></form>");
	PlayerWin.document.write("<div align='center'><B style='font-size:12px;font-family:Verdana,sans-serif;line-height:1.5'> Reprinted from <i>Siddur Sim Shalom for Shabbat and Festivals</i>, &copy;1998, The Rabbinical Assembly<br> (Reprinted with kind permission of the Rabbinical Assembly)<p>" + pageimage + "</B></div>");
	PlayerWin.document.write("<p style='font-size:12px;font-family:Lucida,sans-serif;text-align:center'><a href='" + filepath +"'>Download this file</a> <span style='font-size:10px'>(right-click or Control-click)</span></p>");
    PlayerWin.document.write("<form><div align='center'><input type='button' value='Close this window' onclick='javascript:window.close();'></div></form>");
    PlayerWin.document.write("</body></html>");

    PlayerWin.document.close(); // "Finalizes" new window
}