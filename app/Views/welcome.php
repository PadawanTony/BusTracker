<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->e($title) ?></title>

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
            <a href="#schedule" onclick=$("#menu-close").click();>Map</a>
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

                <p class="lead"> All students can ride the bus for <b><u>FREE</u></b>. The bus has scheduled routes and predetermined stations while it encompasses a large district of transportation. There are routes to Glifada, Kiffisia, as well as the Nomismatokopeio Metro station. </p>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<!-- schedule -->
<section id="schedule" class="schedule">
    <div class="container">

	    <h1 class="bg-info text-center"> Schedule </h1>
	    <table class="table table-striped table-bordered">
		    <thead class="">
		        <tr>
			        <th class="text-center"> Stations </th>
			        <th> Time </th>
		        </tr>
		    </thead>
			<tbody>
				<tr>
					<td> St. Constantine Central Square, Glyfada (bus terminal) </td>
					<td> 08:10 </td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - Oasis HOTEL </td>
					<td> 08:15 </td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - SHELL Gas Station / Everest </td>
					<td> 08:20 </td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - Poseidonio Music Hall </td>
					<td> 08:22 </td>
				</tr>
				<tr>
					<td> Poseidonos Avenue - Hellenikon Old Airport (main entrance) </td>
					<td> 08:25 </td>
				</tr>
				<tr>
					<td> Poseidonos Avenue and Alimos Avenue (after the traffic light) </td>
					<td> 08:28 </td>
				</tr>
				<tr>
					<td> Poseidonos Avenue and Amfitheas Avenue (Amfitheas Avenue bus stop) </td>
					<td> 08:32 </td>
				</tr>
				<tr>
					<td> Amfitheas Avenue - Rema Pikrodafnis </td>
					<td> 08:36 </td>
				</tr>
				<tr>
					<td> Amfitheas Avenue - Agia Triada (bus stop) </td>
					<td> 08:40 </td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Diogenes Palace (Syngrou Avenue bus stop) </td>
					<td> 08:45 </td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Agios Sostis </td>
					<td> 08:50 </td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Intercontinental Hotel </td>
					<td> 08:55 </td>
				</tr>
				<tr>
					<td> Syngrou Avenue - Fix </td>
					<td> 09:00 </td>
				</tr>
				<tr>
					<td> Syntagma Square
						​(Metro Station, Amalias Avenue, on the side of the Monument of the Unknown Soldier and the Greek Parliament) </td>
					<td> 09:05 </td>
				</tr>
				<tr>
					<td> Vasilissis Sofias Avenue (Evangelismos Metro station) </td>
					<td> 09:10 </td>
				</tr>
				<tr>
					<td> Megaron Mousikis Metro station </td>
					<td> 09:15 </td>
				</tr>
				<tr>
					<td> Mavili Square (bus stop) </td>
					<td> 09:20 </td>
				</tr>
				<tr>
					<td> Mesogion Avenue - Park School Gendarmerie (bus stop) </td>
					<td> 09:25 </td>
				</tr>
				<tr>
					<td> Katechaki Metro station </td>
					<td> 09:30 </td>
				</tr>
				<tr>
					<td> Ethniki Amina Metro station </td>
					<td> 09:32 </td>
				</tr>
				<tr>
					<td> Nomismatokopeion Metro station </td>
					<td> 09:40 </td>
				</tr>
				<tr>
					<td> Aghias Paraskevis Square - Everest </td>
					<td> 09:45 </td>
				</tr>
				<tr>
					<td> DEREE - The American College of Greece </td>
					<td> 09:50 </td>
				</tr>
			</tbody>
		</table>

    </div><!-- /.container -->
</section><!-- /.schedule -->


<!-- Call to Action -->
<aside class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>The buttons below are impossible to resist.</h3>
                <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
            </div>
        </div>
    </div>
</aside>

<!-- Map -->
<section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.872655193806!2d23.829772899999988!3d38.00343069999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a199a36941f749%3A0x25c4e883777ce4ab!2sGravias+17%2C+Ag.+Paraskevi+153+42!5e0!3m2!1sen!2sgr!4v1434305333016"></iframe>
    <br/>
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
    </iframe>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong><?= $this->e($title) ?></strong>
                </h4>

                <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; Your Website 2014</p>
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

</body>

</html>
