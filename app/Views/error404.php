<?php
use CodeBurrow\App;
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>404</title>
		<meta name="keywords" content="404" />
		<link href="<?= $this->url('css/style404.css') ?>" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<!--start-wrap--->
		<div class="wrap">
			<!---start-header---->
				<div class="header">
					<div class="logo">
						<h1><a href="#">Ohh</a></h1>
						<a href="<?= $this->url(''); ?>">Go Back To Home</a>

					</div>
				</div>
			<!---End-header---->
			<!--start-content------>
			<div class="content">
				<img src="<?= $this->url('img/error-img.png'); ?>" title="error" />
				<p><span><label>O</label>hh.....</span>You Requested a page that is no longer here.</p>
				<a href="<?= $this->url(''); ?>">Go Back To Home</a>
				<div class="copy-right">
					&copy BusTracker.com
				</div>
   			</div>
			<!--End-Cotent------>
		</div>
		<!--End-wrap--->
	</body>
</html>