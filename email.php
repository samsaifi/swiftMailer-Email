<?php
/*
step 1
include Swift mailer file ; 
 */ 
include("vendor/swiftmailer/swiftmailer/lib/swift_required.php");
/*
step 2
create your user details 
*/

$senderEmail="saddam1234321@gmail.com";
$senderPassword="****Your password****";
$senderName="Saddam huassin";
/*
step 3
set SMTP host  for sending mail
 */
$user = Swift_SmtpTransport::newInstance('smtp.gmail.com','587','tls');
/*
step 4
set your user details 
 */
$user->setUsername($senderEmail);
$user->setPassword($senderPassword);
/*
step 5
create swift  mailer instance with a variable 
*/ 
$mailer = Swift_Mailer::newInstance($user);
/*
step 6
Create a message
*/ 
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array($senderEmail => $senderName))
  ->setTo(array($senderEmail))
  ->setBody('Here is the message itself')
  ;

/*
step 7
Send the message or mail
*/
$result = $mailer->send($message);

/*
step 8
check mail send
*/
if($result){
	echo  "message has been set";
}