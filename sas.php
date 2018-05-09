<?php

/* Config Section */

$pass		= 'midrash';				// Set the password.
$cookiename	= 'sascookie';				// Optional change: Give the cookie a name. Default is sascookie
$expirytime	= time()+3600;				// Optional change: Set an expiry time for the password (in seconds). Default is 1 hour.
$msg		= 'Password incorrect.';	// Optional change: Error message displayed when password is incorrect. Default is "Password incorrect".

/* End Config */

/* Logout Stuff - Sept 5, 2005 */

if (isset($_REQUEST['logout'])) {
	setcookie($cookiename,'',time() - 3600);							// remove cookie/password
	if (substr($_SERVER['REQUEST_URI'],-12)=='?logout=true') {			// if there is '?logout=true' in the URL
		$url=str_replace('?logout=true','',$_SERVER['REQUEST_URI']);	// remove the string '?logout=true' from the URL
		header('Location: '.$url);										// redirect the browser to original URL
	}
	show_login_page('');
	exit();
}

$logout_button='<form action="'.$_SERVER['REQUEST_URI'].'" method="post"><input type="submit" name="logout" value="Logout" /></form>';
$logout_text='<a href="'.$_SERVER['REQUEST_URI'].'?logout=true">Logout</a>';

/* End Logout Stuff */

/* FUNCTIONS */
$encrypt_pass=md5($pass);	// encrypt password

function setmycookie() {
global $cookiename,$encrypt_pass,$expirytime;
	setcookie($cookiename,$encrypt_pass,$expirytime);
}	

function show_login_page($msg) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Authorization Required</title>
<style type="text/css">
<!--
.error {color:#A80000}
body {font:90% Verdana, Arial, sans-serif;color:#404040}
#wrapper {width:800px;margin:0 auto;border:1px solid #606060}
#main {text-align:center;padding:15px}
#header {font:bold 130% Verdana, Arial, sans-serif;color:#DDDDDD;width:100%;height:5em;text-align:center;background:#A80000;line-height:5em}
#mid {margin:5em 0 5em 0}
#footer {font-size:75%;text-align:center;width:100%}
input {border:1px solid #606060; background: #DDDDDD}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">Authorization Required</div>
<div id="main">
	<div id="mid">
		<p>Please enter your code below to access this page.</p>

			
		<form action="" method="POST">
			Password:&nbsp;<input type="password" name="password" size="20">&nbsp;
			<input type="submit" value="Login">
			<input type="hidden" name="sub" value="sub">
		</form>
		<div class=error><?=$msg?></div>
	</div>
</div>
</div>
<div id="footer">Authentication by <a href="http://www.zann-marketing.com/sas/">Simple Authorization Script</a> Copyright &copy; 2005.</div>
</body>
</html>
<? }

/* END FUNCTIONS */

$errormsg='';
if (substr($_SERVER['REQUEST_URI'],-7)!='sas.php') {// if someone tries to request sas.php
	if (isset($_POST['sub'])) {						// if form has been submitted
		$submitted_pass=md5($_POST['password']);	// encrypt submitted password
		if ($submitted_pass<>$encrypt_pass) {		// if password is incorrect
			$errormsg=$msg;
			show_login_page($errormsg);
			exit();
		} else {									// if password is correct
			setmycookie();
		}
	} else {
		if (isset($_COOKIE[$cookiename])) {			// if cookie isset
			if ($_COOKIE[$cookiename]==$encrypt_pass) {	// if cookie is correct
			   // do nothing
			} else {								// if cookie is incorrect
				show_login_page($errormsg);
				exit();
			}
		} else {									// if cookie is not set
			show_login_page($errormsg);
			exit();
		}
	}
} else {
	echo 'Try requesting demo.php';
}
?>