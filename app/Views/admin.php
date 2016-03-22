<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Panel | BusTracker </title>

	<!-- Bootstrap core CSS -->

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="fonts/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/icheck/flat/green.css" rel="stylesheet">


	<script src="js/jquery.min.js"></script>

	<!--[if lt IE 9]>
	<script src="../assets/js/ie8-responsive-file-warning.js"></script>
	<![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="nav-md">

<div class="container body">


	<div class="main_container">

		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">

				<div class="navbar nav_title" style="border: 0;">
					<a href="" class="site_title"><i class="fa fa-bus"></i> <span>Admin Panel</span></a>
				</div>
				<div class="clearfix"></div>

				<!-- menu prile quick info -->
				<div class="profile">
					<div class="profile_pic">
						<img src="img/dereeOfficialLogo.jpg" alt="DEREE Logo" class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Welcome,</span>
						<h2>Administrator</h2>
					</div>
				</div>
				<!-- /menu prile quick info -->

				<br />

				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

					<div class="menu_section">
						<h3> Manage </h3>
						<hr/>
						<ul class="nav side-menu">
							<li><a><i class="fa fa-road"></i> Routes <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu" style="display: none">
									<li><a href="#">Create Route</a>
									</li>
									<li><a href="#">Delete Route</a>
									</li>
									<li><a href="#">Update Route</a>
									</li>
								</ul>
							</li>
							<li><a><i class="fa fa-map-marker"></i> Bus-Stops <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu" style="display: none">
									<li><a href="#">Create Stop</a></li>
									<li><a href="#">Delete Stop</a></li>
									<li><a href="#">Update Stop</a></li>
								</ul>
							</li>
							<li><a><i class="fa fa-line-chart"></i> Statistics <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu" style="display: none">
									<li><a href="#">General</a>
									</li>
									<li><a href="#">Other</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="menu_section">
						<h3>Need Help?</h3>
						<hr/>
						<ul class="nav side-menu">
							<li><a><i class="fa fa-question-circle"></i> Contact Support <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu" style="display: none">
									<li><a href="#">E-mail</a>
									</li>
									<li><a href="#">Call</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>

				</div>
				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->
				<div class="sidebar-footer hidden-small">
					<a data-toggle="tooltip" data-placement="top" title="Settings">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="FullScreen">
						<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Lock">
						<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Logout">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</a>
				</div>
				<!-- /menu footer buttons -->
			</div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">

			<div class="nav_menu">
				<nav class="" role="navigation">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<!--								<img src="img/dereeLogo.png" alt="Admin Image">-->
								<b>Admin</b>
								<span class="fa fa-chevron-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
								<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</li>
							</ul>
						</li>

<!--Notification Bar-->
<!--
						<li role="presentation" class="dropdown">
							<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-green">6</span>
							</a>
							<ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
								<li>
									<a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
									</a>
								</li>
								<li>
									<a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
									</a>
								</li>
								<li>
									<a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
									</a>
								</li>
								<li>
									<a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
									</a>
								</li>
								<li>
									<div class="text-center">
										<a>
											<strong>See All Alerts</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</li>
							</ul>
						</li>
-->

					</ul>
				</nav>
			</div>

		</div>
		<!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
			<div class="">
				<div class="page-title">
					<div class="title_left">
						<h3>Plain Page</h3>
					</div>

					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel" style="height:600px;">
							<div class="x_title">
								<h2>Plain Page</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a>
											</li>
											<li><a href="#">Settings 2</a>
											</li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- footer content -->
			<footer>
				<div class="copyright-info">
					<p class="pull-right">
						<a href="http://ashoka.students.acg.edu/BusTracker/public/"> Go to Application </a>
					</p>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->

		</div>
		<!-- /page content -->
	</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
	</ul>
	<div class="clearfix"></div>
	<div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="js/bootstrap.min.js"></script>

<!-- bootstrap progress js -->
<script src="js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="js/icheck/icheck.min.js"></script>

<script src="js/custom.js"></script>

<!-- pace -->
<script src="js/pace/pace.min.js"></script>

</body>

</html>
