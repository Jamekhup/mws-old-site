<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$sms = $_POST['sms'];

	if ($name == "" || $email == "" || $subject == "" || $sms == "") {
		echo "this page doesn't work";
	}else{
		$to = "info@myanmarwebshare.com";

		$message ="
			<html>
				<header>
				</header>
				<body>
					<h4>Hi Jame Khup, You receive this mail from MWS Contact Page</h4>
					<br/>
					<h5>From : </h5>
					<p>Name - $name</p>
					<p>Email - $email</p>
					<p>Subject - $subject</p>
					<p>Message - $sms </p>
				<body>
			</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From:'.$email . "\r\n";
		//$headers .= 'Cc: ' . "\r\n";

		mail($to,$subject,$message,$headers);

		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Thanks for contacting us. We will get back to you soon
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
	}
 ?>