<? require('sas.php'); ?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html><head>

<!-- EDIT THE NEXT THREE LINES -->

<title>Siddur Audio - Purchase CDs</title>
<meta name="Description" content="SiddurAudio.com CD">
<meta name="KeyWords" content="SiddurAudio, Siddur, Audio, CD, order">



<!-- EDIT THE ABOVE THREE LINES -->


<META name="Copyright" content="Copyright 2005 AllWebCo Design http://allwebcodesign.com/">
<META name="revisit-after" content="15 days">
<META name="robots" content="index, follow">
<META name="Robots" content="All">


<link rel="StyleSheet" href="style.css" type="text/css" media="screen">


</head>


<BODY BGCOLOR="#FFFFFF" TEXT="#000000" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" marginheight="0" marginwidth="0">




<!--  Java Script for selecting Paypal shipping follows -->

<script type="text/javascript">
<!--
function Dollar (val) {  // force to valid dollar amount
var str,pos,rnd=0;
  if (val < .995) rnd = 1;  // for old Netscape browsers
  str = escape (val*1.0 + 0.005001 + rnd);  // float, round, escape
  pos = str.indexOf (".");
  if (pos > 0) str = str.substring (rnd, pos + 3);
  return str;
}

function SetShip (obj1) {  // record selected shipping option
var j,obj,pos,tok,val,txt;
var ary = new Array ();
  obj = obj1.shp;          // refer to shipping select
  pos = obj.selectedIndex; // get selection
  if (pos == 0) {          // force a selection
    alert ("Make a shipping selection!");
    return false;
  }
  obj1.handling.value = "0";
  obj1.handling_cart.value = "0";
  obj1.shipping.value = "0";
  obj1.shipping2.value = "0";
  val = obj.options[pos].value;   // selected value
  txt = obj.options[pos].text;    // the text value
  ary = val.split (" ");          // break apart
  for (j=0; j<ary.length; j++) {  // look at all items
// do 3-character tokens...
    if (ary[j].length < 4) continue;
    tok = ary[j].substring (0,3); // first 3 chars
    val = ary[j].substring (3);   // get data
    if (tok == "hn=")             // value for item handling
      obj1.handling.value  = val;
    if (tok == "hc=")             // value for handling cart
      obj1.handling_cart.value  = val;
    if (tok == "s1=")             // value for shipping
      obj1.shipping.value  = val;
    if (tok == "s2=")             // value for shipping2
      obj1.shipping2.value = val;
  }
  obj1.os0.value = txt;           // stuff the text into options field
}
//-->
</script>




<script language="JavaScript" src="header.js"></script>


<TABLE cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
<td background="picts/bar.gif">
<IMG SRC="picts/spacer.gif" HEIGHT="25" WIDTH="10" border="0"><br>
</td></tr></table>



<!-- OUTER TABLE-->
<TABLE cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td ALIGN="CENTER" VALIGN="TOP">



<!-- SPLIT TABLE-->
<TABLE cellpadding="0" cellspacing="0" border="0" width="100%"><tr><td width="30" bgcolor="#279BA6">

<IMG SRC="picts/spacer.gif" HEIGHT="30" WIDTH="30" alt=""><br>


</td><td ALIGN=LEFT VALIGN=TOP WIDTH="200" bgcolor="#F0F0F0" background="picts/background-left.gif">




<!-- This is the FORM to view the cart contents -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_self" id="viewcart" name="viewcart">
<p>
<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="display" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">
</p>
</form>
<!-- End of view cart FORM -->



<center>
<!-- YOU CAN CHANGE THIS PICTURE FOR YOUR OWN ICON-->
&nbsp;&nbsp;&nbsp;&nbsp;<br>
<IMG SRC="siddur1.jpg" HEIGHT="220" WIDTH="150" border="1" alt="Siddur"><br>
</center>

<p>

<!-- THIS CALLS THE FILE WITH THE MENU LINKS IN IT-->

<script language="JavaScript" src="menu.js"></script>


<!-- SIDE INFO TABLE -->

<TABLE cellpadding="20" cellspacing="0" border="0" BORDERCOLOR="#000000"><tr><td ALIGN="LEFT" VALIGN="TOP">
<span class="sidebartext">

<hr>

<b><font size="+1"> Siddur Audio</font></b><br>

<hr>







</span>

<p>

<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=943177; 
var sc_invisible=1; 
var sc_partition=7; 
var sc_security="8a9bd4c8"; 
</script>

<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><a href="http://www.statcounter.com/" target="_blank"><img  src="http://c8.statcounter.com/counter.php?sc_project=943177&amp;amp;java=0&amp;amp;security=8a9bd4c8&amp;amp;invisible=0" alt="hit tracker" border="0"></a> </noscript>
<!-- End of StatCounter Code -->



<p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>



<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>




	


	

</td></tr></table>
<!-- END SIDE INFO TABLE -->







<!--- THIS FILE TELLS THE PAGEs HOW HIGH TO BE. OPEN THE page_height.js TO CHANGE IT -->


<script language="JavaScript" src="page_height.js"></script>






</td><td ALIGN="CENTER" VALIGN="TOP">





<!-- START MAIN CONTENT TABLE -->
<TABLE cellpadding="0" cellspacing="20" border="0" width="95%"><tr><td ALIGN="LEFT" VALIGN="TOP">



<!-- COPY AND PASTE CODE BELOW TO MAKE A NEW PARAGRAPH -->

<span class="title">

<h3><font size="+1" color="Blue"><u>Purchase Audio CDs</u></font></h3>

</span>

<p>
<b>After receiving many requests to make audio CD's of the Siddur liturgy available (to avoid the cumbersome task of 
downloading each file individually) this site has been updated to handle automated orders via Paypal. 
These CD's are produced in regular "audio CD" format -- not mp3 computer files as on the website. So the discs will be playable in most 
CD players. Click to see <a href="cd-tracks.html"><u>Complete CD Track List</u></a>.
<p>
Please make sure to select the correct shipping option. You must select either 'USA and Canada', or 'International' for 
orders shipped to any other country.</b>
<br>

(<i>Orders will be sent out as quickly as possible, but may take up to 2 weeks.</i>)

<p><b>* Click for information on ordering CD's for <a href="cd-bulk.html"><u>synagogues and schools</u></a>.</b>

<br><br>

<hr align=left width="435" height="3">

<br>


<div align="center">
<font size="+1" color="Red"><b>**Special Pre-Shavuot Discount**</b></font>
<br><font size="-1" color="Red"><b>Available Only until May 23rd!!</b></font> 
</div>


<br><br>

<table bgcolor="cccccc" cellspacing="2" cellpadding="2" border="0">
<tr>
<td>
<span class="subtitle"><img src="redarrow.gif" width="22" height="18" border="0" alt="">
<a href="#1"><font color="Blue"><u>Click down</u></a> to save on the complete</font> 
<a href="#1"><font color="Red"><u>3 Disk Shabbat Set&nbsp;</u></a></font></span><BR>
</td>
</tr>
</table>


<br><br>


<!-- NEWS TABLE 1 -->
<TABLE cellpadding="3" cellspacing="0" border="0" width="100%"><tr><td ALIGN="left" VALIGN="top" class="just">

<span class="subtitle"><font color="Blue"><li>Erev Shabbat Service - Disc #1</font></span><BR>

This disc contains all the tracks for the Friday evening Erev Shabbat Services, as listed on the home page.
<br>

<span class="price"><font color="Blue">Price $11.95</font></span>
<br>

<!-- START PAYPAL ORDERING 1 -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  
onsubmit="this.target='_self';
          return SetShip (this);">

<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="add" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="item_name" value="Erev Shabbat CD - Special Discount" />
<input type="hidden" name="item_number" value="201" />
<input type="hidden" name="amount" value="11.95" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<input type="hidden" name="handling" value="" />
<input type="hidden" name="handling_cart" value="" />
<input type="hidden" name="shipping" value="" />
<input type="hidden" name="shipping2" value="0" />
<input type="hidden" name="on0" value="Shipping" />
<input type="hidden" name="os0" value="" />

Input Qty - 

<input type="text" name="quantity" size="3" value="1" /> &nbsp; 

<select name="shp">
  <option>Select Shipping</option>
  <option value="s1=3.50 s2=0.50">USA & Canada </option>
  <option value="s1=8.95 s2=0.50">International</option>
  
</select>

<br><br>

<input type="image" src="addcart.gif" name="submit" alt="cart add" />
<input type="image" src="viewcart.gif" alt="cart view" 
  onclick="document.forms.viewcart.target = '_self';
           document.forms.viewcart.submit ();
           return false;" />
</p>
</form>


<!-- END PAYPAL ORDERING 1 -->


<BR>

</td><td width="125" VALIGN="top" align="right">

</td></tr></table>
<!-- NEWS TABLE 1 -->



<br>



<!-- NEWS TABLE 2 -->
<TABLE cellpadding="3" cellspacing="0" border="0" width="100%"><tr><td ALIGN="left" VALIGN="top" class="just">

<span class="subtitle"><font color="Blue"><li>Shabbat Morning Service - Disc #2</font></span><BR>

This disk contains the tracks from the Shabbat morning service listed on the home page (except for 
Festival Hallel which is on Disk #3).
<br>

<span class="price"><font color="Blue">Price $11.95</font></span>
<br>



<!-- START PAYPAL ORDERING 2 -->


<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  
onsubmit="this.target='_self';
          return SetShip (this);">

<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="add" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="item_name" value="Shabbat Morning CD - Special Discount" />
<input type="hidden" name="item_number" value="202" />
<input type="hidden" name="amount" value="11.95" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<input type="hidden" name="handling" value="" />
<input type="hidden" name="handling_cart" value="" />
<input type="hidden" name="shipping" value="" />
<input type="hidden" name="shipping2" value="0" />
<input type="hidden" name="on0" value="Shipping" />
<input type="hidden" name="os0" value="" />

Input Qty - 

<input type="text" name="quantity" size="3" value="1" /> &nbsp; 

<select name="shp">
  <option>Select Shipping</option>
  <option value="s1=3.50 s2=0.50">USA & Canada </option>
  <option value="s1=8.95 s2=0.50">International</option>
  
</select>

<br><br>

<input type="image" src="addcart.gif" name="submit" alt="cart add" />
<input type="image" src="viewcart.gif" alt="cart view" 
  onclick="document.forms.viewcart.target = '_self';
           document.forms.viewcart.submit ();
           return false;" />
</p>
</form>


<!-- END PAYPAL ORDERING 2 -->


<BR>


</td><td width="125" VALIGN="top" align="right">

</td></tr></table>
<!-- NEWS TABLE 2 -->


<br>



<!-- NEWS TABLE 3 -->
<TABLE cellpadding="3" cellspacing="0" border="0" width="100%"><tr><td ALIGN="left" VALIGN="top" class="just">

<span class="subtitle"><font color="Blue"><li>Miscellaneous Selections - Disc #3</font></span><BR>

This CD contains most selections listed under the "Miscellaneous" heading on the home page. (Includes
Torah Blessings, Hallel, An'im Z'mirot, Shabbat Home Rituals, Shir Hama'alot, Birkat HaMazon, 
Shabbat Mincha, Havdalah, Weekday Mincha, Ma'ariv, etc.)
<br>

<span class="price"><font color="Blue">Price $11.95</font></span>
<br>

<!-- START PAYPAL ORDERING 3 -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  
onsubmit="this.target='_self';
          return SetShip (this);">

<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="add" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="item_name" value="Siddur Audio Misc. Selections - Disc 3 - Special Discount" />
<input type="hidden" name="item_number" value="203" />
<input type="hidden" name="amount" value="11.95" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<input type="hidden" name="handling" value="" />
<input type="hidden" name="handling_cart" value="" />
<input type="hidden" name="shipping" value="" />
<input type="hidden" name="shipping2" value="0" />
<input type="hidden" name="on0" value="Shipping" />
<input type="hidden" name="os0" value="" />

Input Qty - 

<input type="text" name="quantity" size="3" value="1" /> &nbsp; 

<select name="shp">
  <option>Select Shipping</option>
  <option value="s1=3.50 s2=0.50">USA & Canada </option>
  <option value="s1=8.95 s2=0.50">International</option>
  
</select>

<br><br>

<input type="image" src="addcart.gif" name="submit" alt="cart add" />
<input type="image" src="viewcart.gif" alt="cart view" 
  onclick="document.forms.viewcart.target = '_self';
           document.forms.viewcart.submit ();
           return false;" />
</p>
</form>

<!-- END PAYPAL ORDERING 3 -->


</td><td width="125" VALIGN="top" align="right">
</td></tr></table>

<hr align=left width="435" height="3">
<p>




<a name=1>&nbsp;</a>



<!-- NEWS TABLE 4 -->

<table bgcolor="cccccc" cellspacing="2" cellpadding="2" border="0" width="100%"><tr><td ALIGN="left" VALIGN="top">

<br>
<span class="subtitle"><img src="redarrow.gif" width="22" height="18" border="0" alt=""><font color="blue"> Siddur Audio - </font><font color="Red"><u>Complete Shabbat 3 CD Set</u></font></span><BR>

This contains the full "Shabbat Set" of <b>all 3 discs </b>described above (Shabbat and misc. selections). Includes all the prayers and Shabbat home rituals 
listed on the SiddurAudio.com home page.
<br>

<span class="price"><font color="Blue">Price $32.00</font></span>
<br>

<!-- START PAYPAL ORDERING 4 -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  
onsubmit="this.target='_self';
          return SetShip (this);">

<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="add" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="item_name" value="SiddurAudio.com Complete Shabbat 3 CD Set - Special Discount" />
<input type="hidden" name="item_number" value="230" />
<input type="hidden" name="amount" value="32.00" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<input type="hidden" name="handling" value="" />
<input type="hidden" name="handling_cart" value="" />
<input type="hidden" name="shipping" value="" />
<input type="hidden" name="shipping2" value="0" />
<input type="hidden" name="on0" value="Shipping" />
<input type="hidden" name="os0" value="" />

Input Qty - 

<input type="text" name="quantity" size="3" value="1" /> &nbsp; 

<select name="shp">
  <option>Select Shipping</option>
  <option value="s1=4.00 s2=1.00">USA & Canada </option>
  <option value="s1=9.95 s2=1.50">International</option>
  
</select>

<br><br>

<input type="image" src="addcart.gif" name="submit" alt="cart add" />
<input type="image" src="viewcart.gif" alt="cart view" 
  onclick="document.forms.viewcart.target = '_self';
           document.forms.viewcart.submit ();
           return false;" />
</p>
</form>

</td><td width="125" VALIGN="top" align="right">
</td></tr></table>

<br>

<font color="Red" size="-1" ><b>** Add any CD below to this set for <u>only $10</u> more</font></b>

<br><br>

<!-- END PAYPAL ORDERING 4 -->



<hr align=left width="435" height="3">
<p>

<!-- NEWS TABLE 5 -->

<TABLE cellpadding="3" cellspacing="0" border="0" width="100%"><tr><td ALIGN="left" VALIGN="top">

<span class="subtitle"><font color="Blue"><li>Weekday Minyan CD</font></span><BR>

This disc contains all the tracks from the Weekday Services as listed on SiddurAudio.com. 
Includes Pesikey D'Zimra, Shachrit, Torah Service, Mincha, Ma'ariv and Birkat HaMazon.
<br>

<span class="price"><font color="Blue">Price $11.95</font></span> <font color="Red" size="+0"><b>*</b></font>
<br>

<!-- START PAYPAL ORDERING 5 -->


<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  
onsubmit="this.target='_self';
          return SetShip (this);">

<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="add" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="item_name" value="Weekday Minyan CD - Special Discount" />
<input type="hidden" name="item_number" value="204" />
<input type="hidden" name="amount" value="11.95" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<input type="hidden" name="handling" value="" />
<input type="hidden" name="handling_cart" value="" />
<input type="hidden" name="shipping" value="" />
<input type="hidden" name="shipping2" value="0" />
<input type="hidden" name="on0" value="Shipping" />
<input type="hidden" name="os0" value="" />

Input Qty - 

<input type="text" name="quantity" size="3" value="1" /> &nbsp; 

<select name="shp">
  <option>Select Shipping</option>
  <option value="s1=3.50 s2=0.50">USA & Canada </option>
  <option value="s1=8.95 s2=0.50">International</option>
  
</select>

<br><br>

<input type="image" src="addcart.gif" name="submit" alt="cart add" />
<input type="image" src="viewcart.gif" alt="cart view" 
  onclick="document.forms.viewcart.target = '_self';
           document.forms.viewcart.submit ();
           return false;" />
</p>
</form>

<br>


<!-- Form for Bonus Disk $6.95 Offer -->

<table bgcolor="cccccc" cellspacing="3" cellpadding="3" border="0">
<tr>
<td>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_self">
<input type="hidden" name="add" value="1">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;">
<input type="hidden" name="item_name" value="Weekday Minyan CD - $6.95 Bonus">
<input type="hidden" name="item_number" value="204">
<input type="hidden" name="amount" value="6.95">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-ShopCartBF">
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<font color="Blue" size="-1"><b>** Bonus **</b></font><br>
<font color="Red" size="-1"><b>For <u>only $6.95</u></font>&nbsp;<font color="Blue"> - Add this disk to the Shabbat 3 CD Set&nbsp;</font> </b>
<br>First add the <font color="Red">Shabbat 3 Disk Set</font> to your cart (above), then <br>click on <u>following</u> button to buy this disk 
for just $6.95 more:<br><br>

<input type="image" src="addcart.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<font color="Red" size="+0"><b>* </font><font color="Red">Use <u>THIS BUTTON</u> for $6.95 Bonus CD</b></font>
</form>



</td></tr></table>


<!-- END PAYPAL ORDERING 5 -->


</td><td width="125" VALIGN="top" align="right">
</td></tr></table>

<br>
<hr align=left width="435" height="3">
<p>

<!-- NEWS TABLE 6 -->
<TABLE cellpadding="3" cellspacing="0" border="0" width="100%"><tr><td ALIGN="left" VALIGN="top">

<span class="subtitle"><font color="Blue"><li>Passover Seder Learning CD</font></span><BR>

This disc contains all the tracks from the Passover Seder as listed on SiddurAudio.com 
(in regular audio format - will play in most CD players).
<br>

<span class="price"><font color="Blue">Price $11.95</font></span> <font color="Red" size="+0"><b>*</b></font>
<br>

<!-- START PAYPAL ORDERING 6 -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  
onsubmit="this.target='_self';
          return SetShip (this);">

<input type="hidden" name="cmd" value="_cart" />
<input type="hidden" name="add" value="1" />
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;" />
<input type="hidden" name="item_name" value="Passover Seder CD - Special Discount" />
<input type="hidden" name="item_number" value="205" />
<input type="hidden" name="amount" value="11.95" />
<input type="hidden" name="currency_code" value="USD" />
<input type="hidden" name="lc" value="US" />
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<input type="hidden" name="handling" value="" />
<input type="hidden" name="handling_cart" value="" />
<input type="hidden" name="shipping" value="" />
<input type="hidden" name="shipping2" value="0" />
<input type="hidden" name="on0" value="Shipping" />
<input type="hidden" name="os0" value="" />

Input Qty - 

<input type="text" name="quantity" size="3" value="1" /> &nbsp; 

<select name="shp">
  <option>Select Shipping</option>
  <option value="s1=3.50 s2=0.50">USA & Canada </option>
  <option value="s1=8.95 s2=0.50">International</option>
  
</select>

<br><br>

<input type="image" src="addcart.gif" name="submit" alt="cart add" />
<input type="image" src="viewcart.gif" alt="cart view" 
  onclick="document.forms.viewcart.target = '_self';
           document.forms.viewcart.submit ();
           return false;" />
</p>
</form>

<br>


<!-- Form for Bonus Disk $6.95 Offer -->

<table bgcolor="cccccc" cellspacing="3" cellpadding="3" border="0">
<tr>
<td>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_self">
<input type="hidden" name="add" value="1">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="&#114;&#097;&#118;&#109;&#097;&#114;&#107;&#064;&#122;&#105;&#109;&#109;&#101;&#114;&#109;&#097;&#110;&#046;&#110;&#101;&#116;">
<input type="hidden" name="item_name" value="Passover Seder CD - $6.95 Bonus">
<input type="hidden" name="item_number" value="205">
<input type="hidden" name="amount" value="6.95">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-ShopCartBF">
<input type="hidden" name="shopping_url" value="http://sidduraudio.com/special.php">

<font color="Blue" size="-1"><b>** Bonus **</b></font><br>
<font color="Red" size="-1"><b>For <u>only $6.95</u></font>&nbsp;<font color="Blue"> - Add this disk to the Shabbat 3 CD Set&nbsp;</font> </b>
<br>First add the <font color="Red">Shabbat 3 Disk Set</font> to your cart (above), then <br>click on <u>following</u> button to buy this disk 
for just $6.95 more:<br><br>

<input type="image" src="addcart.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<font color="Red" size="+0"><b>* </font><font color="Red">Use <u>THIS BUTTON</u> for $6.95 Bonus CD</b></font>
</form>



</td></tr></table>


<br>

<hr align=left width="435" height="3">
<p>

<br>

<!-- END PAYPAL ORDERING 6 -->

</td><td width="125" VALIGN="top" align="right">

</td></tr></table>


<!-- COPY AND PASTE CODE ABOVE HERE TO MAKE A NEW PARAGRAPH -->


<br><br>

<a href="contact.html">Contact us for more info ></a> 


<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>	

	


<IMG SRC="picts/spacer.gif" HEIGHT="5" WIDTH="250" alt="insert text"><br>




</td>
<td VALIGN="TOP" align="center" width="130">



<!-- PICTURE 1 -->
<IMG SRC="picts/home-1.jpg" width="125" height="125" class="borders"><br>

<br><br>

<!-- PICTURE 2 -->
<IMG SRC="picts/home-2.jpg" width="125" height="125" class="borders"><br>


<br><br>

<!-- PICTURE 3 -->
<IMG SRC="picts/home-3.jpg" width="125" height="125" class="borders"><br>

<br><br>

</div>


<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>



<p>
	
	
	
	
	<p></p>&nbsp;&nbsp;&nbsp;	

	

</td></tr></table>
<!-- END MAIN CONTENT TABLE -->





</td></tr></table>
<!-- SPLIT TABLE -->




</td></tr></table>
<!-- OUTER TABLE-->






<!-- START THE FOOTER -->


<TABLE cellpadding="0" cellspacing="0" border="0" width="100%">
<tr><td background="picts/bar.gif" colspan="2">
<IMG SRC="picts/spacer.gif" HEIGHT="26" WIDTH="15" alt="insert text"><br>
</td></tr></table>




<!-- COPYRIGHT -->
<TABLE cellpadding="0" cellspacing="0" border="0" width="100%" class="footertext"><tr><td WIDTH="10">
<IMG SRC="picts/spacer.gif" HEIGHT="10" WIDTH="10" border="0"><br>

</td><td ALIGN=LEFT VALIGN=TOP>

<script language="JavaScript" src="copyright.js"></script>


</td><td ALIGN="RIGHT" VALIGN="TOP">


<script language="JavaScript" src="copyright-allwebco.js"></script>

</TD><td WIDTH="10">

<IMG SRC="picts/spacer.gif" HEIGHT="10" WIDTH="10" alt="insert text"><br>

</td></tr></table>
<!-- COPYRIGHT -->


<!-- END THE FOOTER -->

<script language="JavaScript" src="floating_menu.js"></script>

</BODY>
</HTML>