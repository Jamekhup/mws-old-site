<?php  
	session_start();
	require_once('db.php');

	if (isset($_GET['enroll_id'])) {
		$enroll_id = mysqli_real_escape_string($dbcon,$_GET['enroll_id']);

		$query = "DELETE FROM enroll WHERE id='$enroll_id'";

		if (mysqli_query($dbcon,$query)) {
			$_SESSION['enroll_delete'] = true;
			header('location:courses-inquiry.php');
		}
	}


	if (isset($_GET['web_id'])) {
		$web_id = mysqli_real_escape_string($dbcon,$_GET['web_id']);

		$query = "DELETE FROM web_inquiry WHERE id='$web_id'";
		if (mysqli_query($dbcon,$query)) {
			$_SESSION['web_delete'] = true;
			header('location:web-inquiry.php');
		}
	}



	if (isset($_GET['seo_id'])) {
		$seo_id = mysqli_real_escape_string($dbcon,$_GET['seo_id']);

		$query = "DELETE FROM seo_inquiry WHERE id='$seo_id'";

		if (mysqli_query($dbcon,$query)) {
			$_SESSION['seo_delete'] = true;
			header('location:seo-inquiry.php');
		}
	}


	if (isset($_GET['myfb_id'])) {
		$fb_id = mysqli_real_escape_string($dbcon,$_GET['myfb_id']);

		$query = "DELETE FROM fb_inquiry WHERE id='$fb_id'";
		if (mysqli_query($dbcon,$query)) {
			$_SESSION['fb_delete'] =true;
			header('location:fb-inquiry.php');
		}
	}


	if (isset($_GET['blog_id'])) {
		$blog_id = mysqli_real_escape_string($dbcon,$_GET['blog_id']);

		$query = "DELETE FROM blog WHERE id='$blog_id'";

		if (mysqli_query($dbcon,$query)) {
			$_SESSION['blog_delete'] = true;
			header('location:post.php');
		}
	}

?>