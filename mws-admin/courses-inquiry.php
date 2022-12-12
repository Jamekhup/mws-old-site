<?php  

	session_start();

	if (empty($_SESSION['mws_admin'])) {
		header('location:index.php');
		exit();
	}

	require_once('db.php');

	$select = "SELECT * FROM enroll";

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


				<section class="panel">
					<header class="panel-heading">
						<h2 class="panel-title">Course Enrollment List</h2>
						<div class="text-center">
						<?php if (isset($_SESSION['enroll_delete'])) {
						?>
							<h4 class="text-success">Deleted Success!</h4>
						<?php
						unset($_SESSION['enroll_delete']);
						} ?>
					</div>
					</header>
					
					<div class="panel-body">
						<table class="table table-bordered table-striped mb-none" id="datatable-editable">
							<thead>
								<tr>
									<th>Name</th>
									<th>Phone Number</th>
									<th>Course</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($connect->num_rows > 0) {
								?>
								<?php while ($enroll = mysqli_fetch_assoc($connect)) {
								?>
									<tr class="gradeU">
										<td><?php echo $enroll['name']; ?></td>
										<td><?php echo $enroll['phone']; ?></td>
										<td><?php echo $enroll['course']; ?></td>
										<td class="actions">
											<a href="delete.php?enroll_id=<?php echo $enroll['id']; ?>" id="enroll_delete" onclick="enroll_delete()"><i class="fa fa-trash-o text-danger"></i></a>
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
		function enroll_delete(){

			if (confirm("Are your sure to delete this?")) {
				
				document.getElementById('enroll_delete').submit();
				event.preventDefault();
			}else{
				event.preventDefault();
			}
		}
	</script>
	</body>
</html>