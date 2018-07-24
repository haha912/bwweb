<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$Recipient = '952881396@qq.com'; // <-- Set your email here

if($Recipient) {

	$Name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$Email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$Subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	$Message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	if (isset($_POST['category'])) {
		$Category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
	} else {
		$Category = "";
	}

	$Email_body = "";
	if (isset($_POST['category'])) {
		$Email_body .= "From: " . $Name . "\n" .
									"Email: " . $Email . "\n" .
									"Subject: " . $Subject . "\n" .
									"Message: " . $Message . "\n" .
									"Category: " . $Category . "\n";
	} else {
		$Email_body .= "From: " . $Name . "\n" .
									"Email: " . $Email . "\n" .
									"Subject: " . $Subject . "\n" .
									"Message: " . $Message . "\n";
	}

	$Email_headers = "";
	$Email_headers .= 'From: ' . $Name . ' <' . $Email . '>' . "\r\n".
					  "Reply-To: " .  $Email . "\r\n";

	$sent = mail($Recipient, $Subject, $Email_body, $Email_headers);

	if ($sent){
		$emailResult = array ('sent'=>'yes');
	} else{
		$emailResult = array ('sent'=>'no');
	}

	echo json_encode($emailResult);

} else {

	$emailResult = array ('sent'=>'no');
	echo json_encode($emailResult);

}
?>
