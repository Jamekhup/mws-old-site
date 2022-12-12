<?php  

	require_once('../db.php');

	$name = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['name']));
	$phone = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['phone']));
	$email = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['email']));
	$fb_url = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['fb_url']));
	$fb_packages = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['fb_packages']));
	$fb_sms = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['fb_sms']));

	if ($name == "" || $phone == "" || $email == "" || $fb_url == "" || $fb_packages=="") {
		header('location:../services.php');
	}else{
		$insert = "INSERT INTO fb_inquiry(name,email,phone,fb_url,fb_packages,message) VALUES ('$name','$email','$phone','$fb_url','$fb_packages','$fb_sms')";
		$connect = mysqli_query($dbcon,$insert);

		// send mail


		$to = "info@myanmarwebshare.com";
		$subject = "Facebook Marketing Service enquiry message";

		$message ="
			<html>
				<header>
				</header>
				<body>
					<h4>Someone enquire about Facebook Marketing Service...</h4>
					<br/>
					<h5>From : </h5>
					<p>Name - $name</p>
					<p>Phone - $phone</p>
					<p>Email - $email</p>
					<p>Package - $fb_packages</p>
					<p>Facebook URL - <a href='$fb_url' target='_blank'>Facebook Link</a></p>
					<p>Message - $fb_sms </p>
				<body>
			</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From:'.$email . "\r\n";
		//$headers .= 'Cc: ' . "\r\n";

		mail($to,$subject,$message,$headers);

		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
		  Thanks for your inquiry. We will contact you soon.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>';
	}

?>