<?php
if(isset($_POST['email'])) {
	
	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "jas@webmuscle.co.uk";
	$email_subject = "Website Enquiry";
	$name = $_POST['name']; // required
	$telephone = $_POST['telephone']; // required
	$email_from = $_POST['email']; // required
	$message = $_POST['message']; // required
	
	
	// validation expected data exists
	if(!isset($_POST['name']) ||
		!isset($_POST['email'])) {
		died('You did not enter the required fields.');		
	}
	
	$error_message = "";
	$email_exp = "/^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/";
  if(!preg_match($email_exp,$email_from)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
	$string_exp = "/^[a-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
  	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
	$email_message = "Form details below.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";


// create email headers
$headers = 'From: '.$email_to."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->

<script language="JavaScript">
window.location = 'contact.php?status=success'
//-->
</script>
<?
}
?>