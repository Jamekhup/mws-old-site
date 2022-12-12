<?php  

	session_start();

	if (empty($_SESSION['mws_admin'])) {
		header('location:index.php');
		exit();
	}

	require_once('db.php');

	$select = "SELECT * FROM blog";

	$connect = mysqli_query($dbcon,$select);

?>

<!DOCTYPE html>
<html class="fixed">
	<head>
		<?php include('include/head.php'); ?>
		<link rel="stylesheet" href="css/select2.css" />
		<link rel="stylesheet" href="css/datatables.css" />
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

					<div class="text-center">
						<?php if (isset($_SESSION['blog_delete'])) {
						?>
							<h4 class="text-success">Delete Success!</h4>
						<?php
						unset($_SESSION['blog_delete']);
					
						} ?>
					</div>


				<section class="panel">
					<header class="panel-heading">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<a href="#" class="fa fa-times"></a>
						</div>
				
						<h2 class="panel-title">All Posts</h2>
					</header>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-md">
									<a href="create-post.php"  class="btn btn-primary">Create New Post <i class="fa fa-plus"></i></a>
								</div>
							</div>
						</div>
						<table class="table table-bordered table-striped mb-none" id="datatable-editable">
							<thead>
								<tr>
									<th>Title</th>
									<th>Author</th>
									<th>Created On</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($connect->num_rows > 0) {
								?>
								<?php while ($blog = mysqli_fetch_assoc($connect)) {
								?>
									<tr class="gradeU">
										<td><?php echo $blog['title']; ?></td>
										<td><?php echo $blog['author']; ?></td>
										<td><?php 
											$date=$blog['created_at']; 
											$getdate = date('d-m-Y',strtotime($date));
											echo $getdate;

										?></td>
										<td class="actions">
											<a id="blog_delete" onclick="blog_delete()" href="delete.php?blog_id=<?php echo $blog['id']; ?>"><i class="fa fa-trash-o text-danger"></i></a>
										</td>
									</tr>
								<?php
								} ?>	
								<?php
									} 
								?>
							</tbody>
						</table>
					</div>
				</section>
				</section>
			</div>
		</section>


	<?php include('include/footer.php'); ?>
	<!-- Vendor -->
	<script src="js/select2.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/datatables.js"></script>
	<script src="js/examples.datatables.editable.js"></script>
		
	<script>
		function blog_delete(){
			if (confirm('Are you sure to delete this?')) {
				document.getElementById('blog_delete').submit();
				event.preventDefault();
			}else{
				event.preventDefault();
			}
		}

	</script>
	</body>
</html>