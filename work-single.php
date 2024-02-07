<?php 
    include("config.php");
	session_start(); 
	$user_id=$_SESSION['userid'];
	$firstname=$_SESSION['firstname'];
	$strategy_id=$_GET['strategy_id'];
	$strategies_map=$_SESSION['strategies_map'];
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from pxltheme.com/html/bako/work-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 10:11:46 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>ARVY - Capital</title>
	<meta name="description" content="Bako - Personal Portfolio & Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simplebar.html" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body style="background-image: url(images/bodyback.png);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;" onload="startTime()">

<!-- preloader -->
<div id="preloader">
	<div class="outer">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<!-- mobile header -->
	<div class="mobile-header py-2 px-3 mt-4">
		<button class="menu-icon mr-2">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- <a href="index.html" class="logo"><img src="images/logo.png" alt="Bako Doe" /></a> -->
		<a href="index.html" class="site-title dot ml-2"><?php echo $firstname; ?></a>
	</div>

	<!-- header -->
	<header class="left float-left shadow-dark" id="header">
		<button type="button" class="close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="header-inner d-flex align-items-start flex-column">
			<a href="index.html"><img src="images/logo.png" alt="ARVY logo" /></a>
			<a href="index.html" class="site-title dot mt-3">Hi, <?php echo $firstname; ?></a>
			<!-- <span class="site-slogan">Web Developer</span> -->
			
			<!-- navigation menu -->
			<nav style="padding-top: 13%;">
				<ul class="vertical-menu scrollspy" style="font-size: large;">
					<li><a href="#overview"  class="active"><i class="icon-book-open"></i>Overview</a></li>
					<li><a href="#checklist"><i class="icon-list"></i>Checklist</a></li>
					<li><a href="#calculator"><i class="icon-calculator"></i>Calculator</a></li>
					<li><a href="welcome.php"><i class="icon-arrow-left"></i>Back</a></li>
				</ul>
			</nav>
			
			<!-- footer -->
			<div class="footer mt-auto">
				<!-- <a href="#" class="btn btn-default btn-lg mr-3" style="margin: 0 0 20px 21%;"><i class="icon-home"></i>Home</a> -->
					<a href="login.php" class="btn btn-default btn-lg mr-3" style="margin-left: 20%;"><i class="icon-logout"></i>Logout</a>
					<div id="time" style="padding:20px 0 0 28%; font-size: 25px; font-weight: 200;"></div>

			</div>
		</div>
	</header>

    <!-- main content area -->
	<main class="content float-right">

        <!-- single portfolio -->
		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="overview">
            <h2 class="archive-header"><?php echo $strategies_map[$strategy_id]['strategy_name']; ?></h2>
			
			<?php
				$image='"images/portfolio/'.$strategies_map[$strategy_id]['image'].'"';
				echo
				'<img src='."$image".' alt="image">';
			?>
            
            <div class="portfolio-content mt-5">
                <h3>Overview</h3>
                <p><?php echo $strategies_map[$strategy_id]['about_long']; ?></p>
            </div>
		</section>
		
		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="checklist">
            <div class="portfolio-content">
				<h3 style="margin-top: 0;">Checklist</h3>
				<center>
					<select class="dropdown">
						<option>Everything</option>
						<option>Creative</option>
						<option>Video</option>
						<option>Design</option>
					</select>

					<select class="dropdown">
						<option>Everything</option>
						<option>Creative</option>
						<option>Video</option>
						<option>Design</option>
					</select>

					<select class="dropdown">
						<option>Everything</option>
						<option>Creative</option>
						<option>Video</option>
						<option>Design</option>
					</select>
					<a href="#" class="btn btn-alt" style="padding: 9px 15px 9px 15px; margin: 0px 0px 1px 10px; font-size: 13px;"><i class="icon-chart"></i>TRADE</a>
				</center>
				<center>
					<div class="trede-check" style="margin-top:20px">
						.....
					</div>
				</center>
            </div>
		</section>
		
		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="calculator">
            <div class="portfolio-content">
                <h3 style="margin-top: 0;">Calculator</h3>
            </div>
		</section>

		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="calculator">
            <div class="portfolio-content">
                <h3 style="margin-top: 0;">Calculator</h3>
            </div>
		</section>
		
	</main>

</div>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/infinite-scroll.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/validator.js"></script>
<script src="js/custom.js"></script>

<script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('time').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
</script>

</body>

<!-- Mirrored from pxltheme.com/html/bako/work-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 10:11:47 GMT -->
</html>