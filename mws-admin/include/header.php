<header class="header">
	<div class="logo-container">
		<a href="#" class="logo">
			<img src="img/logo.png" height="35" alt="Logo" />
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>
	<!-- start: search & user box -->
	<div class="header-right">
		<ul class="notifications">
			<li>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="fa fa-tasks"></i>
					<span class="badge">3</span>
				</a>

				<div class="dropdown-menu notification-menu large">
					<div class="notification-title">
						<span class="pull-right label label-default">3</span>
						Tasks
					</div>

					<div class="content">
						<ul>
							<li>
								<p class="clearfix mb-xs">
									<span class="message pull-left">Generating Sales Report</span>
									<span class="message pull-right text-dark">60%</span>
								</p>
								<div class="progress progress-xs light">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
								</div>
							</li>

							<li>
								<p class="clearfix mb-xs">
									<span class="message pull-left">Importing Contacts</span>
									<span class="message pull-right text-dark">98%</span>
								</p>
								<div class="progress progress-xs light">
									<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
								</div>
							</li>

							<li>
								<p class="clearfix mb-xs">
									<span class="message pull-left">Uploading something big</span>
									<span class="message pull-right text-dark">33%</span>
								</p>
								<div class="progress progress-xs light mb-xs">
									<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
					<i class="fa fa-bell"></i>
					<span class="badge">3</span>
				</a>

				<div class="dropdown-menu notification-menu">
					<div class="notification-title">
						<span class="pull-right label label-default">3</span>
						Notification
					</div>

					<div class="content">
						<ul>
							<li>
								<a href="#" class="clearfix">
									<div class="image">
										<i class="fa fa-thumbs-down bg-danger"></i>
									</div>
									<span class="title">Server is Down!</span>
									<span class="message">Just now</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<div class="image">
										<i class="fa fa-lock bg-warning"></i>
									</div>
									<span class="title">User Locked</span>
									<span class="message">15 minutes ago</span>
								</a>
							</li>
							<li>
								<a href="#" class="clearfix">
									<div class="image">
										<i class="fa fa-signal bg-success"></i>
									</div>
									<span class="title">Connection Restaured</span>
									<span class="message">10/10/2014</span>
								</a>
							</li>
						</ul>

						<hr />

						<div class="text-right">
							<a href="#" class="view-more">View All</a>
						</div>
					</div>
				</div>
			</li>
		</ul>

		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
					<span class="name">Jame Khup</span>
					<span class="role">Admin</span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>
					<li>
						<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>