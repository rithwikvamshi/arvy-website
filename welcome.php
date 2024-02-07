
<?php
	include("config.php");
	session_start();
	$sql ="select * from users where userid ='".$_SESSION['userid']."' ";
	$result= $conn->query($sql);
	$roleid='';
	$firstname='';
	$lastname='';
	//getting roleid and user id
	if ($result->num_rows > 0) 
	{
	    while($row = $result->fetch_assoc()) 
	    {
	    	$userid=$row["userid"];
	    	$roleid=$row["roleid"];
	    	$firstname=$row["firstname"];
	    	$lastname=$row["lastname"];
	    	// echo 'userid: '.$userid. '<br>'.'roleid: '.$roleid.' '. $firstname;
	    }
	}

	$_SESSION['firstname']=$firstname;

	$sql2="SELECT orders FROM roles where roleid=$roleid";
	$final=$conn->query($sql2);
	$orders='';
	if($final->num_rows > 0)
	{

	    while($col=$final->fetch_assoc())
	    {
	       $orders=$col["orders"];
	       // echo $orders;1,2,3
	    }
	}

	$strategies_ar=explode(',', $orders);
	
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from pxltheme.com/html/bako/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 10:11:46 GMT -->
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
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" language="javascript">
		window.history.forward();
	</script>

</head>

<body style="background-image: url(images/bodyback.png);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

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
		<a href="index.html" class="site-title dot ml-2"><?php echo 'Hi, '.$firstname; ?></a>
	</div>

	<!-- header -->
	<header class="left float-left shadow-dark" id="header">
		<button type="button" class="close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="header-inner d-flex align-items-start flex-column">
			<a href="index.html"><img src="images/logo.png" alt="ARVY logo" /></a>
			<a href="index.html" class="site-title dot mt-3"><?php echo 'Hi, '.$firstname; ?></a>
			<!-- <span class="site-slogan">Web Developer</span> -->
			
			<!-- navigation menu -->
			<nav style="padding-top: 13%;">
				<ul class="vertical-menu scrollspy" style="font-size: large;">
					<li><a href="#home" class="active" style="font-size: large;"><i class="icon-home"></i>Home</a></li>
					<li><a href="#about"><i class="icon-user"></i>About</a></li>
					<!-- <li><a href="#services"><i class="icon-bulb"></i>Services</a></li>
					<li><a href="#resume"><i class="icon-graduation"></i>Resume</a></li> -->
					<li><a href="#Strategies"><i class="icon-grid"></i>Strategies</a></li>
					<!-- <li><a href="#clients"><i class="icon-people"></i>Clients</a></li> -->
					<li><a href="#contact"><i class="icon-phone"></i>Contact</a></li>
				</ul>
			</nav>
			
			<!-- footer -->
			<div class="footer mt-auto">

				<!-- social icons -->
					<a href="login.php" class="btn btn-default btn-lg mr-3" style="margin-left: 22%;"><i class="icon-logout"></i>Logout</a>
					<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li> -->

				<!-- copyright -->
				<!-- <span class="copyright">© 2020 Bako Template</span> -->
			</div>
		</div>
	</header>

	<!-- main content area -->
	<main class="content float-right">

		<!-- section hero -->
		<section class="hero background parallax shadow-dark d-flex align-items-center" id="home" data-image-src="images/hero.jpg">
			<div class="cta mx-auto mt-2">
				<h1 class="mt-0 mb-4" style="font-size: 40px;">We're ARVY Capital<span class="dot"></span></h1>
				<p class="mb-4" style="font-size: 20px;">  “There is no single market secret to discover, no single correct way to trade the markets. Those seeking the one true answer to the markets haven’t even gotten as far as asking the right question, let alone getting the right answer.” - Jack Schwagger</p>
				
				<center><a href="#Strategies" class="btn btn-default btn-lg mr-3"><i class="icon-grid"></i>Strategies</a></center>
			</div>
			<div class="overlay"></div>
		</section>

		<!-- section about -->
		<section id="about" class="shadow-blue white-bg padding">
			<h3 class="section-title">About Us</h3>
			<div class="spacer" data-height="80"></div>

			<div class="row">
				<div class="col-md-3">
					<img src="images/about.png" alt="about" />
				</div>
				<div class="col-md-9">
					<h2 class="mt-4 mt-md-0 mb-4">Hello,</h2>
					<p class="mb-0">I am Bako Doe, web developer from London, United Kingdom. I have rich experience in web site design and building and customization, also I am good at wordpress.</p>
					<div class="row my-4">
						<div class="col-md-6">
							<p class="mb-2">Name: <span class="text-dark">Bako Doe</span></p>
							<p class="mb-0">Birthday: <span class="text-dark">14 August, 1990</span></p>
						</div>
						<div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
							<p class="mb-2">Location: <span class="text-dark">London, UK</span></p>
							<p class="mb-0">Email: <span class="text-dark">hello@bako.com</span></p>
						</div>
					</div>
					<!-- <a href="#" class="btn btn-default mr-3"><i class="icon-cloud-download"></i>Download CV</a> -->
					<a href="#" class="btn btn-alt mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>Hire me</a>
				</div>
			</div>
		</section>


		<!-- section facts -->
		<section id="facts" class="shadow-dark color-white background parallax padding-50" data-image-src="images/background-1.jpg">

			<div class="row relative z-1">
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-like icon-circle"></i>
						<h2 class="count">157</h2>
						<span>Projects completed</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-cup icon-circle"></i>
						<h2 class="count">2765</h2>
						<span>Cup of coffee</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-emotsmile icon-circle"></i>
						<h2 class="count">350</h2>
						<span>Happy customers</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item text-center">
						<i class="icon-trophy icon-circle"></i>
						<h2 class="count">29</h2>
						<span>Awards won</span>
					</div>
				</div>
			</div>
			
			<div class="overlay"></div>

		</section>


		<!-- section works -->
		<section id="Strategies" class="shadow-blue white-bg padding">
			<h3 class="section-title">Strategies</h3>
			<div class="spacer" data-height="50"></div>

			<!-- portfolio filter (desktop) -->
			<ul class="portfolio-filter list-inline">
				<li class="current list-inline-item" data-filter="*">All Strategies</li>
				<li class="list-inline-item" data-filter=".intraday">Intra Day</li>
				<li class="list-inline-item" data-filter=".positional">Positional</li>
				<li class="list-inline-item" data-filter=".swing">Swing</li>
			</ul>

			<!-- portfolio filter (mobile) -->
			<div class="pf-filter-wrapper mb-4">
				<select class="portfolio-filter-mobile">
					<option value="*">All Strategies</option>
					<option value=".intraday">Intra Day</option>
					<option value=".positional">Positonal</option>
					<option value=".swing">Swing</option>
				</select>
			</div>

			<!-- portolio wrapper -->
			<div class="row portfolio-wrapper">

				<?php
				
				$sql="select * from strategies where strategy_id in (".$orders.");";
				$result2=$conn->query($sql);
				$i=-1;
				$strategies_map=array();
				if($result2->num_rows>0)
				{
				    	// $strategies_ar[$index] = (int)$value; 
						// // echo '<br>'.$strategies_ar[$index];
						// $sql3="select * from strategies where strategy_id=$strategies_ar[$index]";

							while($strategyrow = mysqli_fetch_array($result2))
							{
								$strategy_id=$strategyrow['strategy_id'];
								$strategy_name=$strategyrow['strategy_name'];
								$category=$strategyrow['category'];
								$about_short=$strategyrow['about_short'];
								$image=$strategyrow['image'];

								$strategies_map[$strategy_id]=$strategyrow;

								$category='class="col-md-4 col-sm-6 grid-item '.$category.'"';
								$image='src="images/portfolio/'.$image.'"';
								$temp='"work-single.php?strategy_id='.$strategy_id.'"';
								// echo $category;
								
								echo '
								<div '.$category.'>
								<a href='.$temp.'>
									<div class="portfolio-item">
										<div class="details">
											<h4 class="title">'.$strategy_name.'</h4>
											<span class="term">'.$about_short.'</span>
										</div>
										<span class="plus-icon">+</span>
										<div class="thumb">
											<img '.$image.' />
											<div class="mask"></div>
										</div>
									</div>
								</a>
								</div>' ;

								$i++;
							}
					}
					$_SESSION['strategies_map'] = $strategies_map;

				?>
				<!-- portfolio item -->
				<!-- <div class="col-md-4 col-sm-6 grid-item video">
					<a href="work-single.html">
						<div class="portfolio-item">
							<div class="details">
								<h4 class="title">Creative Art</h4>
								<span class="term">Art, Creative</span>
							</div>
							<span class="plus-icon">+</span>
							<div class="thumb">
								<img src="images/portfolio/1.jpg" alt="Portfolio-title" />
								<div class="mask"></div>
							</div>
						</div>
					</a>
				</div>

				-->
				
			</div>
			
		</section>


		<!-- section contact -->
		<section id="contact" class="shadow-dark background-blue color-white" style="padding: 40px; padding-bottom: 0px;">
			<h3 class="section-title">Get in touch</h3>
			<div class="spacer" data-height="30"></div>

			<div class="row">
					<!-- contact info -->
					<div class="contact-info mb-5 col-lg-4" style="margin: 0 0 0 0;">
						<i class="icon-location-pin"></i>
						<div class="details">
							<h5>Location</h5>
							<span>Hyderabad, Telengana</span>
						</div>
					</div>


					<div class="contact-info mb-5 col-lg-4">
						<i class="icon-phone"></i>
						<div class="details">
							<h5>Phone</h5>
							<span>+44 1632 960428</span>
						</div>
					</div>

					<div class="contact-info mb-5 col-lg-4">
						<i class="icon-envelope"></i>
						<div class="details">
							<h5>Email address</h5>
							<span>rithwikvamshirv@gmail.com</span>
						</div>
					</div>
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

</body>

<!-- Mirrored from pxltheme.com/html/bako/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 10:11:46 GMT -->
</html>