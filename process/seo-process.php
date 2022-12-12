<?php  

	require_once('../db.php');

	$name = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['name']));
	$phone = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['phone']));
	$email = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['email']));
	$web_address = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['web_address']));
	$seo_packages = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['seo_packages']));
	$seo_sms = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['name']));

	if ($name == "" || $phone ==""||$email==""||$web_address==""||$seo_packages=="") {
		header('location:../services.php');
	}else{

		$insert = "INSERT INTO seo_inquiry(name,phone,email,web_address,seo_packages,message) VALUES('$name','$phone','$email','$web_address','$seo_packages','$seo_sms')";
		$connect = mysqli_query($dbcon,$insert);

		// send mail


		$to = "info@myanmarwebshare.com";
		$subject = "SEO service enquiry message";

		$message ="
			<html>
				<header>
				</header>
				<body>
					<h4>Someone enquires about your SEO Service...</h4>
					<br/>
					<h5>From : </h5>
					<p>Name - $name</p>
					<p>Phone - $phone</p>
					<p>Email - $email</p>
					<p>Website Address - <a href='$web_address' target='_blank'>Web URL</a></p>
					<p>SEO Package - $seo_packages</p>
					<p>Message - $seo_sms </p>
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