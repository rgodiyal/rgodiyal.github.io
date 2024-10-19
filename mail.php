<?php
// JSON Data
$json_data = [
	'status' => 0,
	'msg'	 => ''
];

// access
$secretKey = '6Lea3MgUAAAAAFhr5ODFEOsQxElZO6WUAhYDlTV4';
$captcha = $_POST['g-recaptcha-response'];

if(!$captcha){
	$json_data['status'] = 2;
	$json_data['msg'] 	 = 'Something went wrong.';
	echo json_encode($json_data);
	exit;
}

# FIX: Replace this email with recipient email
$to = "rgodiyal482@gmail.com";

# Sender Data
$subject = "Someone contact on rahulgodiyal.com";
$name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
	$json_data['status'] = 2;
	$json_data['msg'] 	 = 'Please complete the form and try again.';
	echo json_encode($json_data);
	exit;
}

$ip = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response, true);

if(intval($responseKeys["success"]) !== 1) {
	$json_data['status'] = 2;
	$json_data['msg'] 	 = 'Please check the captcha form.';
	echo json_encode($json_data);
	exit;
} else {
	$html = '
		<html>
		<head>
		<title>Contact Details</title>
		</head>
		<body>
		<h2>Contact Details</h2>
		<div class="container" style="color:black;">
			<div class="form-group">
					<label class="col-sm-4">Name</label>
					<label class="col-sm-8">:'.$name.'</label>
				</div>
				<div class="form-group">
					<label class="col-sm-4">Email</label>
					<label class="col-sm-8">:'.$email.'</label>
				</div>
				<div class="form-group">
					<label class="col-sm-4">Message</label>
					<label class="col-sm-8">:'.$message.'</label>
				</div>
			
		</div>
		</body>
		</html>
	';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <info@rahulgodiyal.com>' . "\r\n";
	
	if(mail($to,$subject,$html,$headers)) {
		$json_data['status'] = 1;
		$json_data['msg'] 	 = 'Message sent successfully.';
		echo json_encode($json_data);
		exit;
	} else {
		$json_data['status'] = 0;
		$json_data['msg'] 	 = 'Message not sent. Please try again.';
		echo json_encode($json_data);
		exit;
	}
}
?>
