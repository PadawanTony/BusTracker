<?php
/**
 * Created by PhpStorm.
 * User: Antony
 * Date: 3/23/2016
 * Time: 18:48
 */
use CodeBurrow\App;
?>
<div class="col-md-3 left_col">
	<div class="left_col scroll-view">

		<div class="navbar nav_title" style="border: 0;">
			<a href="" class="site_title"><i class="fa fa-bus"></i> <span>Admin Panel</span></a>
		</div>
		<div class="clearfix"></div>

		<!-- menu prile quick info -->
		<div class="profile">
			<div class="profile_pic">
				<img src="<?= $this->url('img/dereeOfficialLogo.jpg'); ?>" alt="DEREE Logo" class="img-circle profile_img">
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
							<li><a href="<?= $this->url('admin/routes/create') ?>">Create Route</a>
							</li>
							<li><a href="<?= $this->url('admin/routes/delete') ?>">Delete Route</a>
							</li>
							<li><a href="<?= $this->url('admin/routes/edit') ?>">Edit Route</a>
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

