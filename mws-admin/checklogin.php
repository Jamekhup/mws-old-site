<?php  
	session_start();
	require_once('db.php');

	$something = mysqli_real_escape_string($dbcon,$_POST['admin_first']);
	$pwd = mysqli_real_escape_string($dbcon,$_POST['admin_second']);

    if ($something == "" || $pwd == "") {

		$_SESSION['loginErr'] = true;
		header('location:index');

	}else{
		$psw = md5($pwd);
		
		$query = "SELECT * FROM admin WHERE admin_first='$something' AND password='$psw'";
		$connect = mysqli_query($dbcon,$query);
		if ($connect->num_rows>0) {
			$mws = mysqli_fetch_assoc($connect);
			$_SESSION['mws_admin'] = $mws['id'];
			header('location:dashboard');
		
		}else{
			$_SESSION['loginErr'] = true;
			header('location:index');
		}
	}

?>