<?php 
	session_start(); 
	if (empty($_SESSION['mws_admin'])) {
		header('location:index.php');
		exit();
	}
?>
<!DOCTYPE html>
<html class="fixed">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<?php include('include/head.php'); ?>
		<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="css/summernote.css">

	</head>
	<body>
		<section class="body">

			<?php include('include/header.php'); ?>

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<?php include('include/aside.php'); ?>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					</header>


				<div class="row">
					<div class="col-lg-12">
						<section class="panel">
							<header class="panel-heading">
				
								<h2 class="panel-title">Create New Post</h2>
							</header>
							<div class="text-center">
								<?php if (isset($_SESSION['success'])) {
								?>
									<h4 class="text-success">Post Created Success!</h4>
								<?php
								unset($_SESSION['success']);
								} ?>

								<?php if (isset($_SESSION['required'])) {
								?>
									<h4 class="text-danger">All Fields are required!</h4>
								<?php
								unset($_SESSION['required']);
								} ?>

								<?php if (isset($_SESSION['something'])) {
								?>
									<h4 class="text-danger">Something went wrong!</h4>
								<?php
								unset($_SESSION['something']);
								} ?>

								<?php if (isset($_SESSION['failed'])) {
								?>
									<h4 class="text-danger">Post Created Failed!</h4>
								<?php
								unset($_SESSION['failed']);
								} ?>

								<?php if (isset($_SESSION['notimg'])) {
								?>
									<h4 class="text-danger">Inserted Image is not image file!</h4>
								<?php
								unset($_SESSION['notimg']);
								} ?>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="post.php"  class="btn btn-warning">Cancel <i class="fa fa-minus"></i></a>
										</div>
									</div>
								</div>
								<form action="savepost" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" class="form-control" name="title" placeholder="Enter Title">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="slug" placeholder="Enter Slug">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="author" placeholder="Enter Author">
									</div>

									<div class="form-group">
										<input type="file" name="img" class="form-control">
									</div>
									<div class="form-group">
										<textarea name="article" id="summernote" class="form-control"></textarea>
									</div>
									<button class="btn btn-success btn-block btn-sm" type="submit" name="submit">Post</button>
								</form>
							</div>
						</section>
				
					</div>
				</div>
				</section>
			</div>
		</section>


	<?php include('include/footer.php'); ?>
	<script src="js/jquery.autosize.js"></script>
	<script src="js/summernote.js"></script>
	<script>
		$(document).ready(function() {
		  $('#summernote').summernote({
		  	placeholder: 'Article',
	        tabsize: 2,
	        height: 100
		  });

			});
	</script>
		
	</body>
</html>