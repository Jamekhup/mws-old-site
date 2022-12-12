<?php  
	session_start();

	if (empty($_SESSION['mws_admin'])) {
		header('location:index');
		exit();
	}

?>
<!DOCTYPE html>
<html class="fixed">
	<head>
		<?php include('include/head.php'); ?>
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="css/morris.css" />
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
						<div class="col-md-6">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Best Seller</h2>
									<p class="panel-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using JSOFT Admin Template.</p>
								</header>
								<div class="panel-body">
									
									<h1>Here come content</h1>
								</div>
							</section>
						</div>
						<div class="col-md-6">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
									<h2 class="panel-title">Server Usage</h2>
									<p class="panel-subtitle">It's easy to create custom graphs on JSOFT Admin Template, there are several graph types that you can use, such as lines, bars, pie charts, etc...</p>
								</header>
								<div class="panel-body">

									<h1>Here come content</h1>

								</div>
							</section>
						</div>
					</div>
					<!-- first row ends here -->

					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-primary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-primary">
												<i class="fa fa-life-ring"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Support Questions</h4>
												<div class="info">
													<strong class="amount">1281</strong>
													<span class="text-primary">(14 unread)</span>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(view all)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-secondary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-secondary">
												<i class="fa fa-usd"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Total Profit</h4>
												<div class="info">
													<strong class="amount">$ 14,890.30</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(withdraw)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-tertiary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-tertiary">
												<i class="fa fa-shopping-cart"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Today's Orders</h4>
												<div class="info">
													<strong class="amount">38</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(statement)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-6">
							<section class="panel panel-featured-left panel-featured-quartenary">
								<div class="panel-body">
									<div class="widget-summary">
										<div class="widget-summary-col widget-summary-col-icon">
											<div class="summary-icon bg-quartenary">
												<i class="fa fa-user"></i>
											</div>
										</div>
										<div class="widget-summary-col">
											<div class="summary">
												<h4 class="title">Today's Visitors</h4>
												<div class="info">
													<strong class="amount">3765</strong>
												</div>
											</div>
											<div class="summary-footer">
												<a class="text-muted text-uppercase">(report)</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end second row here -->
				</section>
			</div>


		</section>



		<!-- Vendor -->
		<?php include('include/footer.php'); ?>
	</body>
</html>