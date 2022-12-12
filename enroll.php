<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php 
		$title = "web development & computer courses,enroll now";
		$description = "";
		include('pages/header.php'); 
	?>
	<title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
	<link rel="stylesheet" href="https://www.myanmarwebshare.com/css/enroll.css">
	<script src="https://www.myanmarwebshare.com/js/enroll-process.js"></script>
	
	<script src="https://www.google.com/recaptcha/api.js?render=6LfsisUUAAAAAEQDP4pMXjNJUeq-grIO0YwrT9XP"></script>
   
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark sticky-top">
	    <?php include('pages/nav.php'); ?>
	</nav>
	<!-- end navbar -->
	<div class="contact-bg">
		<img src="img/enroll.png" alt="Enroll Page Background Image">
		<div class="contact-p">
			<h5 class="animated bounceInLeft delay-2s contact-me">Enroll Now!</h5>
		</div>

	</div>

	<div class="container enroll">
		<div class="col-md-8 offset-md-2">
			<h1 class="text-center">အောက်ပါ Form များကို ဖြည့်ပြီး သင်တန်းစာရင်းသွင်းလိုက်ပါ</h1>
			<form id="enroll">
				<div id="enroll-success" class="text-center"></div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name" autocomplete="off">
					<div class="error" id="nameErr"></div>
				</div>
				<div class="form-group">
					<input type="text" id="phone" autocomplete="off" placeholder="example - 09250011112" class="form-control">
					<input type="hidden" id="token">
			      	<div class="error" id="phoneErr"></div>
					
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="edu" name="edu" placeholder="Your Education or Career Status (optional)">
				</div>
				<div class="form-group">
					<select name="courses" id="courses" class="form-control">
						<option value="">--Select Course--</option>
						<option value="front-end">Web Design Course</option>
						<option value="back-end">Web Development Course</option>
						<option value="laravel">Laravel Framework Course</option>
						<option value="wordpress">Wordpress CMS Course</option>
						<option value="computer">Basic Computer Course</option>
						<option value="photoshop">Photoshop Design Course</option>
					</select>
					<div class="error" id="coursesErr"></div>
				</div>
				<div class="form-group">
					<textarea name="sms" id="sms" class="form-control" cols="30" rows="10" placeholder="Other Message (optional)"></textarea>
				</div>
				<button class="btn btn-success" type="submit">Enroll Now</button>
			</form>
			<br/>
			
		</div>
	</div>




	<!-- start footer -->
	<br/>
	<br/>
	<?php include('pages/footer.php'); ?>
	
	 <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfsisUUAAAAAEQDP4pMXjNJUeq-grIO0YwrT9XP', {action: 'homepage'}).then(function(token) {
           document.getElementById('token').innerHTML = token;
        });
    });
    </script>
</body>
</html>