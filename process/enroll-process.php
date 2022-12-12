<?php  

	require_once('../db.php');

	$name = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['name']));
	$phone = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['phone']));
	$edu = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['edu']));
	$course = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['courses']));
	$sms = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['sms']));

	if ($name == "" || $phone == "" || $course == "") {
		header('location:../enroll.php');
	}else{

		$insert ="INSERT INTO enroll(name,phone,edu_job,course,sms) VALUES ('$name','$phone','$edu','$course','$sms')";

		$connect = mysqli_query($dbcon,$insert);

		// send mail


		$to = "info@myanmarwebshare.com";
		$subject="Enrollment for Web Development Course";

		$message ="
			<html>
				<header>
				</header>
				<body>
					<h4>Someone has enrolled for your courses...</h4>
					<br/>
					<h5>From : </h5>
					<p>Name - $name</p>
					<p>Phone - $phone</p>
					<p>Career or Education - $edu</p>
					<p>Choosen Course - $course</p>
					<p>Message - $sms </p>
				<body>
			</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From:'.$name . "\r\n";
		//$headers .= 'Cc: ' . "\r\n";

		mail($to,$subject,$message,$headers);

		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   				Thanks for enrolling.We will contact you soon
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
	}
	

?>