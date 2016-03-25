<?php
use HubIT\App;
?>

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

	<link href="<?php echo App::url('css/bootstrap.min.css'); ?>" rel="stylesheet">

	<link href="<?php echo App::url('fonts/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo App::url('css/animate.min.css'); ?>" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="<?php echo App::url('css/custom.css'); ?>" rel="stylesheet">
	<link href="<?php echo App::url('css/icheck/flat/green.css'); ?>" rel="stylesheet">


	<script src="<?php echo App::url('js/jquery.min.js'); ?>"></script>

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

		<!--sidebar-->
		<?=$this->insert('partials/admin_sidebar')?>
		<!--/sidebar-->

		<!-- top navigation -->
		<?=$this->insert('partials/admin_topNav')?>
		<!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
			<?=$this->section('content')?>

			<?=$this->insert('partials/admin_footer')?>
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

<script src="<?php echo App::url('js/bootstrap.min.js'); ?>"></script>

<!-- bootstrap progress js -->
<script src="<?php echo App::url('js/progressbar/bootstrap-progressbar.min.js'); ?>"></script>
<script src="<?php echo App::url('js/nicescroll/jquery.nicescroll.min.js'); ?>"></script>
<!-- icheck -->
<script src="<?php echo App::url('js/icheck/icheck.min.js'); ?>"></script>

<script src="<?php echo App::url('js/custom.js'); ?>"></script>

<!-- pace -->
<script src="<?php echo App::url('js/pace/pace.min.js'); ?>"></script>

</body>

</html>
