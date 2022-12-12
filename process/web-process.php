<?php  

	require_once('../db.php');

	$name = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['name']));
	$email = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['email']));
	$company_name = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['company_name']));
	$web_packages = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['web_packages']));
	$phone = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['phone']));
	$web_sms = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['web_sms']));

	if ($name =="" || $email == "" || $company_name==""||$web_packages==""||$phone=="") {
		header('location:../services.php');
	}else{
		$insert = "INSERT INTO web_inquiry(name,phone,email,package,company_name,message) VALUES ('$name','$phone','$email','$web_packages','$company_name','$web_sms')";
		$connect = mysqli_query($dbcon,$insert);

		// send mail


		$to = "info@myanmarwebshare.com";
		$subject="Website Development Service Enquiry Message";

		$message ="
			<html>
				<header>
				</header>
				<body>
					<h4>Someone enquires about your Web Development Service...</h4>
					<br/>
					<h5>From : </h5>
					<p>Name - $name</p>
					<p>Phone - $phone</p>
					<p>Email - $email</p>
					<p>Company Name - $company_name</p>
					<p>Web Package - $web_packages</p>
					<p>Message - $web_sms </p>
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