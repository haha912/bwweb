<?php
require_once "recaptcha/autoload.php";
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

$Recipient = '952881396@qq.com'; // <-- Set your email here

// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "your_site_key";
$secret = "your_secret_key";

// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "en";

// Was there a reCAPTCHA response?
if (isset($_POST['g-recaptcha-response'])) {
	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
}

if($Recipient && $resp->isSuccess()) {

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
