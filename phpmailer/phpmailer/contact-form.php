<?php
if(isset($_POST['submit']))
{
	$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Comments:	'.$_POST['comments'].'
';

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';

//Load dependencies from composer
//If this causes an error, run 'composer install'
require 'phpmailer/vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailerOAuth;
	$mail -> CharSet = "UTF-8";
//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 4;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;// Connection with the SMTP does require authorization

//Set AuthType
$mail->AuthType = 'XOAUTH2';
$mail->Encoding = '8bit';

//User Email to use for SMTP authentication - user who gave consent to our app
$mail->oauthUserEmail = "panduka29@gmail.com";

//Obtained From Google Developer Console
$mail->oauthClientId = "763711806159-cifmfnpp4jq86ggk3k76vis1ifqobhd7.apps.googleusercontent.com";

//Obtained From Google Developer Console
$mail->oauthClientSecret = "6Vsr8Qkb-LrkCtECUE1iqgNz";

//Obtained By running get_oauth_token.php after setting up APP in Google Developer Console.
//Set Redirect URI in Developer Console as [https/http]://<yourdomain>/<folder>/get_oauth_token.php
// eg: http://localhost/phpmail/get_oauth_token.php
$mail->oauthRefreshToken = "1/L0FFf8vZnlMbns6lpLsDM-ZXDeSuFikAuMvwA0r_ylQ";

//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as
//$mail->setFrom('from@example.com', 'First Last');
	// Compose
	$mail->setFrom($_POST['emailid'], $_POST['fullname']);
	$mail->addReplyTo($_POST['emailid'], $_POST['fullname']);
	$mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)
	$mail->msgHTML($message);
//Set who the message is to be sent to
$mail->addAddress('panduka29@gmail.com', 'panduka');

//Set the subject line
//$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->addAttachment('images/phpmailer_mini.png');//Attach an image file


//send the message, check for errors
	   $result = $mail->send();		// Send!
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';
if (!$mail->send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Message sent!";
}










//    // Send To
//    $mail->AddAddress("panduka29@gmail.com", "panduka"); // Where to send it - Recipient


//	if(!$mail->Send()) {
//		echo "Mailer Error: " . $mail->ErrorInfo;
//	} else {
//		echo "Message has been sent";
//	}
	unset($mail);
}
?>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
					
		<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  <input type="text" name="fullname" placeholder="Full Name" />
					  <br />
					  <input type="text" name="subject" placeholder="Subject" />
					  <br />
					  <input type="text" name="phone" placeholder="Phone" />
					  <br />
					  <input type="text" name="emailid" placeholder="Email" />
					  <br />
					  <textarea rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
					  <br />
					  <input type="submit" name="submit" value="Send" />
					</fieldset>
			</form>
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>
					
</body>
</html>