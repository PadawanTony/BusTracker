<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Bus Tracker</title>

	<!-- Bootstrap Core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/stylish-portfolio.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
	      rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--Import Google Maps API-->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
		<li class="sidebar-brand">
			<a href="#top" onclick=$("#menu-close").click();><?= $this->e($title) ?></a>
		</li>
		<li>
			<a href="#top" onclick=$("#menu-close").click();>Home</a>
		</li>
		<li>
			<a href="#about" onclick=$("#menu-close").click();>About</a>
		</li>
		<li>
			<a href="#schedule" onclick=$("#menu-close").click();>Schedule</a>
		</li>
		<li>
			<a href="#showMap" onclick=$("#menu-close").click();>Map</a>
		</li>
		<li>
			<a href="#contact" onclick=$("#menu-close").click();>Contact</a>
		</li>
	</ul>
</nav>


<!-- Header -->
<header id="top" class="header">
	<div class="text-vertical-center">
		<h1><?= $this->e($title) ?></h1>

		<h3><?= $this->e($randomQuote) ?></h3>
		<br>
		<a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
	</div>
</header>


<!-- About -->
<section id="about" class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2> The Shuttle Bus is a service offered to DEREE students </h2>

				<p class="lead"> All students can ride the bus for <b><u>FREE</u></b>. The bus has scheduled routes and
					predetermined stations while it encompasses a large district of transportation. There are routes to
					Glifada, Kiffisia, as well as the Nomismatokopeio Metro station. </p>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>


<!-- schedule -->
<section id="schedule" class="schedule bg-danger">
	<div class="container">

		<h1 class="bg-danger text-center"> Schedule |
			<small>
				<div class="dropdown" id="dropdownMenu1">
					<button class="btn bg-danger dropdown-toggle" type="button"
					        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<i class="fa fa-bus"></i>
						<strong> &nbsp; &nbsp; Select Route </strong>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li class="parentGlifada"><a> Glifada </a></li>
						<li class="parentNom"><a> Nomismatokopeio </a></li>
						<li class="parentKifissia"><a> Kifissia</a></li>
						<li role="separator" class="divider"></li>
					</ul>
				</div>
			</small>
		</h1>

		<div class="childGlifada">
			<table class="table table-striped table-bordered">
				<thead class="">
				<tr>
					<th class="text-center"> Stations</th>
					<th> Time</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><i class="fa fa-home"></i> St. Constantine Central Square, Glyfada (bus terminal)</td>
					<td> 08:10</td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - Oasis HOTEL</td>
					<td> 08:15</td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - SHELL Gas Station / Everest</td>
					<td> 08:20</td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - Poseidonio Music Hall</td>
					<td> 08:22</td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - Hellenikon Old Airport (main entrance)</td>
					<td> 08:25</td>
				</tr>
				<tr>
					<td> Poseidonos Avenue and Alimos Avenue (after the traffic light)</td>
					<td> 08:28</td>
				</tr>
				<tr>
					<td> Poseidonos Avenue and Amfitheas Avenue (Amfitheas Avenue bus stop)</td>
					<td> 08:32</td>
				</tr>
				<tr>
					<td> Amfitheas Avenue - Rema Pikrodafnis</td>
					<td> 08:36</td>
				</tr>
				<tr>
					<td> Amfitheas Avenue - Agia Triada (bus stop)</td>
					<td> 08:40</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Diogenes Palace (Syngrou Avenue bus stop)</td>
					<td> 08:45</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Agios Sostis</td>
					<td> 08:50</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Intercontinental Hotel</td>
					<td> 08:55</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Fix</td>
					<td> 09:00</td>
				</tr>
				<tr>
					<td> Syntagma Square
						​(Metro Station, Amalias Avenue, on the side of the Monument of the Unknown Soldier and the
						Greek Parliament)
					</td>
					<td> 09:05</td>
				</tr>
				<tr>
					<td> Vasilissis Sofias Avenue (Evangelismos Metro station)</td>
					<td> 09:10</td>
				</tr>
				<tr>
					<td> Megaron Mousikis Metro station</td>
					<td> 09:15</td>
				</tr>
				<tr>
					<td> Mavili Square (bus stop)</td>
					<td> 09:20</td>
				</tr>
				<tr>
					<td> Mesogion Avenue - Park School Gendarmerie (bus stop)</td>
					<td> 09:25</td>
				</tr>
				<tr>
					<td> Katechaki Metro station</td>
					<td> 09:30</td>
				</tr>
				<tr>
					<td> Ethniki Amina Metro station</td>
					<td> 09:32</td>
				</tr>
				<tr>
					<td> Nomismatokopeion Metro station</td>
					<td> 09:40</td>
				</tr>
				<tr>
					<td> Aghias Paraskevis Square - Everest</td>
					<td> 09:45</td>
				</tr>
				<tr>
					<td><i class="fa fa-university"></i> DEREE - The American College of Greece</td>
					<td> 09:50</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="childNom">
			<table class="table table-striped table-bordered">
				<thead class="">
				<tr>
					<th class="text-center"> Stations</th>
					<th> Time</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><i class="fa fa-subway"></i> &nbsp; Nomismatokopeio Metro station</td>
					<td> 08:10</td>
				</tr>
				<tr>
					<td><i class="fa fa-university"></i> DEREE - The American College of Greece</td>
					<td> 09:50</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="childKifissia">
			<table class="table table-striped table-bordered">
				<thead class="">
				<tr>
					<th class="text-center"> Stations</th>
					<th> Time</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><i class="fa fa-home"></i> Somewhere in Kifissia</td>
					<td> 08:32</td>
				</tr>
				<tr>
					<td> Amfitheas Avenue - Rema Pikrodafnis</td>
					<td> 08:36</td>
				</tr>
				<tr>
					<td> Amfitheas Avenue - Agia Triada (bus stop)</td>
					<td> 08:40</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Diogenes Palace (Syngrou Avenue bus stop)</td>
					<td> 08:45</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Agios Sostis</td>
					<td> 08:50</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Intercontinental Hotel</td>
					<td> 08:55</td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Fix</td>
					<td> 09:00</td>
				</tr>
				<tr>
					<td> Syntagma Square
						​(Metro Station, Amalias Avenue, on the side of the Monument of the Unknown Soldier and the
						Greek Parliament)
					</td>
					<td> 09:05</td>
				</tr>
				<tr>
					<td> Vasilissis Sofias Avenue (Evangelismos Metro station)</td>
					<td> 09:10</td>
				</tr>
				<tr>
					<td> Megaron Mousikis Metro station</td>
					<td> 09:15</td>
				</tr>
				<tr>
					<td> Mavili Square (bus stop)</td>
					<td> 09:20</td>
				</tr>
				<tr>
					<td> Mesogion Avenue - Park School Gendarmerie (bus stop)</td>
					<td> 09:25</td>
				</tr>
				<tr>
					<td> Katechaki Metro station</td>
					<td> 09:30</td>
				</tr>
				<tr>
					<td> Ethniki Amina Metro station</td>
					<td> 09:32</td>
				</tr>
				<tr>
					<td> Nomismatokopeion Metro station</td>
					<td> 09:40</td>
				</tr>
				<tr>
					<td> Aghias Paraskevis Square - Everest</td>
					<td> 09:45</td>
				</tr>
				<tr>
					<td><i class="fa fa-university"></i> DEREE - The American College of Greece</td>
					<td> 09:50</td>
				</tr>
				</tbody>
			</table>
		</div>

	</div><!-- /.container -->
</section><!-- /.schedule -->


<!-- Call to Action -->
<aside id="showMap" class="call-to-action bg-primary">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 text-center">
				<h3>Select Route to View in Map: &nbsp;
					<small>
						<div class="dropdown" id="dropdownForMap">
							<button class="btn bg-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="fa fa-map-marker"></i>
								<strong id="dropdownForMap_Title"> &nbsp; &nbsp; Select Route </strong>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
								<li><a><button type="submit" class="MapRoutes" value="Glifada">Glifada</button></a></li>
								<li><a><button type="submit" class="MapRoutes" value="Kifisia">Kifisia</button></a></li>
								<li><a><button type="submit" class="MapRoutes" value="Nom">Nomismatokopeio</button></a></li>

							</ul>
						</div>
					</small>
				</h3>
			</div>
		</div>


	</div>
</aside>


<!-- Map -->
<div id="googleMap"></div>
<!--</section>-->


<!-- Footer -->
<footer id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h3><strong><?= $this->e($title) ?></strong>
				</h3>
				<hr class="small">

				<table id="contactTable">
					<tr>
						<td><i class="fa fa-thumb-tack fa-fw"></i></td>
						<td> Gravias 6, Athina 153 42</td>
					</tr>
					<tr>
						<td><i class="fa fa-phone fa-fw"></i></td>
						<td> 210 600-9800</td>
					</tr>
					<tr>
						<td><i class="fa fa-envelope-o fa-fw"></i></td>
						<td><a href="mailto:name@example.com">name@example.com</a></td>
					</tr>
				</table>

				<br>
				<ul class="list-inline">
					<li>
						<a href="http://www.acg.edu/"><img src="img/dereeLogo.png" alt="Deree_Logo"></a>
					</li>
					<li>
						<a href="http://www.acg.edu/"><img src="img/dereeOfficialLogo.jpg" alt="Deree_Official_Logo"
						                                   style="width: 55px;"></a>
					</li>
					<li>
						<a href="http://www.pierce.gr/"><img src="img/pierceLogo.JPG" alt="Pierce_Logo"
						                                     style="width: 55px; height: 45px;"></a>
					</li>
				</ul>
				<hr class="small">
				<p class="text-muted">Copyright &copy; BusTracker.com 2016 </p>
			</div>
		</div>
	</div>
</footer>


<!-- jQuery -->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
	// Closes the sidebar menu
	$("#menu-close").click(function (e) {
		e.preventDefault();
		$("#sidebar-wrapper").toggleClass("active");
	});
	// Opens the sidebar menu
	$("#menu-toggle").click(function (e) {
		e.preventDefault();
		$("#sidebar-wrapper").toggleClass("active");
	});
	// Scrolls to the selected menu item on the page
	$(function () {
		$('a[href*=#]:not([href=#])').click(function () {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
</script>

<!-- My JavaScript -->
<script> //Show-Hide Routes
	$(".childGlifada").hide();
	$(".childNom").show();
	$(".childKifissia").hide();

	$(".parentGlifada").click(function () {
//		$(".ddd").children().slideToggle(700);
		$(".childGlifada").show(700);
		$(".childNom").hide(700);
		$(".childKifissia").hide(700);
	});

	$(".parentNom").click(function () {
		$(".childGlifada").hide(700);
		$(".childNom").show(700);
		$(".childKifissia").hide(700);
	});

	$(".parentKifissia").click(function () {
		$(".childGlifada").hide(700);
		$(".childNom").hide(700);
		$(".childKifissia").show(700);
	});
</script>

<script>
//		var mapContainer = document.getElementById("googleMap");
//		function getLocation() {
//			if (navigator.geolocation) {
//	//			navigator.geolocation.getCurrentPosition(showMap);  //Get position once
//				navigator.geolocation.watchPosition(showMap);  //Get position continuously
//
//			} else {
//				mapContainer.innerHTML = "Geolocation is not supported by this browser.";
//			}
//		}
//
//	/*
//	 This function returns the position
//	 function showPosition(position) {
//	 mapContainer.innerHTML = "Latitude: " + position.coords.latitude +
//	 "<br>Longitude: " + position.coords.longitude;
//	 }
//	 */
//
//		function showMap(position) {
//			console.log(position);
//			var myLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
//			var mapOptions = {
//				center: myLatLng,
//				zoom:16,
//				scrollwheel: false,
//				navigationControl: true,
//				mapTypeControl: true,
//				scaleControl: true,
//				draggable: false,
//				mapTypeId:google.maps.MapTypeId.ROADMAP
//			};
//			map = new google.maps.Map(mapContainer, mapOptions);
//
//			function setMarker() {
//				marker = new google.maps.Marker({
//					position: myLatLng,
//					map: map,
//					title: 'You are here!',
//					icon: 'img/home-icon.png'
//				});
//			}
//
//			setMarker();
//		}
//
//		google.maps.event.addDomListener(window, 'load', getLocation());



	$(document).ready(function(){
			var request = $.ajax({
				url: "<?= $this->e($coordinatesUrl) ?>",
				type: "POST",
				data: {location: 'Glifada'}
			});
			request.done(function (results) {
				var mapContainer = document.getElementById("googleMap");
				var coordinates = JSON.parse(results).data;

//				/** Debugging **/
//				console.log(coordinates);
//				console.log(coordinates.ID);
//				console.log(coordinates.lat);

				var myLatLong = new google.maps.LatLng(coordinates.lat, coordinates.lng);
				var mapOptions = {
					center: myLatLong,
					zoom:16,
					scrollwheel: false,
					navigationControl: true,
					mapTypeControl: true,
					scaleControl: true,
					draggable: false,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(mapContainer, mapOptions);

				function setMarker() {
					marker = new google.maps.Marker({
						position: myLatLong,
						map: map,
						title: 'To Glifada',
						icon: 'img/busIcon3.png'
					});
				}
				setMarker();

			});
		});


	$('.MapRoutes').click(function(){
		var clickBtnValue = $(this).val();
		var clickBtnTitle = $(this).html();

		var request = $.ajax({
			url: "<?= $this->e($coordinatesUrl) ?>",
			type: "POST",
			data: {location: clickBtnValue}
		});
		request.done(function (results) {
			var mapContainer = document.getElementById("googleMap");
			var coordinates = JSON.parse(results).data;

//			/** Debugging **/
//			console.log(coordinates);
//			console.log(coordinates.ID);
//			console.log(coordinates.lat);

			var lat = coordinates.lat;
			var lng = coordinates.lng;
			var myLatLong = new google.maps.LatLng(lat, lng);

			var mapOptions = {
				center: myLatLong,
				zoom:16,
				scrollwheel: false,
				navigationControl: true,
				mapTypeControl: true,
				scaleControl: true,
				draggable: false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(mapContainer, mapOptions);

			function setMarker() {
				marker = new google.maps.Marker({
					position: myLatLong,
					map: map,
					title: clickBtnTitle,
					icon: 'img/busIcon3.png'
				});
			}

			$("#dropdownForMap_Title").html(clickBtnTitle);
			setMarker();
		});
	});
</script>

</body>

</html>