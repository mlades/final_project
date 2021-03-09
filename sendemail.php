<?php

// Define some constants
define( "RECIPIENT_NAME", "S4D" );
define( "RECIPIENT_EMAIL", "contact@takt.org.mk" );


// Read the form values
$success = false;
$userName = isset( $_POST['firstname'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['firstname'] ) : "";
$userLastname = isset( $_POST['lastname'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['lastname'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$senderPhone = isset( $_POST['phone'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $userName && $userLastname && $senderEmail && $senderPhone && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $userName . " " . $userLastname;
  $msgBody = ' Email: '. $senderEmail . "\r\n". 'Phone: '. $senderPhone . "\r\n". 'Message: ' . $message . '';
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: contact.html?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: contact.html?message=Failed');	
}

?>