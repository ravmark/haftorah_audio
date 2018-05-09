<?php
	// VALUES FROM THE FORM
	$name	= $_POST['name'];
	$email	= $_POST['email'];
	$citystate = $_POST['citystate'];	
	$phone     = $_POST['phone'];
	$message	= $_POST['msg'];

	// ERROR & SECURITY CHECKS
	if ( ( !$email ) ||
		 ( strlen($_POST['email']) > 200 ) ||
	     ( !preg_match("#^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$#", $email) )
       ) 
	{ 
		print "Error: Invalid E-Mail Address"; 
		exit; 
	} 
	if ( ( !$name ) ||
		 ( strlen($name) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $name) ) 
	   )
	{ 
		print "Error: Invalid Name"; 
		exit; 
	} 
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error: Found Invalid Header Field"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Error: No Message"; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Error: Invalid E-Mail Address"; 
		exit; 
	} 
	if (FALSE) { 
		print "Error: You cannot send to an email address on the same domain."; 
		exit; 
	} 


	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $name <$email>\n";
	$recipient	= "ravmark@sidduraudio.com";
	$subject	= "Contact From HaftorahAudio.com Website";
	$message = $citystate . "\r\n" . $phone . "\r\n" . wordwrap($message, 1024); 

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $message, $headers);

	// REDIRECT TO THE THANKS PAGE
	header("location: thanks.html");
?>
