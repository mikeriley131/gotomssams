<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Ms. Sams...">
		<meta name="author" content="Mike Riley">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<title>Go to Ms. Sams - home</title>
		
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="_assets/css/main.min.css" />

		<script src="_assets/js/main.min.js"></script>

		<!--[if lt IE 9]>
		<script src="http://html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="gridlock home">
			<header>
				<div class="row">
					<div class="logo max-3 desktop-3 tablet-1 mobile-1">
						<a href="/"><img src="_assets/images/go-to-ms-sams-logo.svg" alt="Go To Ms. Sams logo"></a>
					</div>
					<nav class="max-9 desktop-9 tablet-5 mobile-1 mobile-push-1 min-2 min-push-1 nav-collapse">
						<ul>
							<li><a href="">About Ms. Sams</a></li>
							<li><a href="">What We Do</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Contact</a></li>
							<li>
								<ul class="social">
									<li><a class="fb" href="">Facebook</a></li>
									<li><a class="inst" href="">Instagram</a></li>
									<li><a class="li" href="">Linked In</a></li>
									<li><a class="twit" href="">Twitter</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			<section class="hero-image">
				<div class="row">
					<h1>Making meaningful connections with young people.</h1>
				</div>
				<img src="_assets/images/go-to-ms-sams-homepg-feature.jpg" alt="">
			</section>
			<section class="hero-text">
				<div class="row">
					<p>Go to Ms.Sams consults with non-profits, schools and the business community to create structures that promote meaningful and impactful relationships with youth.</p>
				</div>
			</section>
			<section class="what-we-do bordered">
				<div class="row">
					<h2>What we do:</h2>
					<div class="max-4 desktop-4 contained">
						<a href="#"><h3>School Climate &amp; Culture</h3></a>
						<a href="#"><p>Creating a school culture that fosters a positive and productive learning environment.</p></a>
					</div>
					<div class="max-4 desktop-4 contained">
						<a href="#"><h3>Mentoring</h3></a>
						<a href="#"><p>Using best practices in the mentoring field to create and sustain robust and impactful mentoring programs.</p></a>
					</div>
					<div class="max-4 desktop-4 contained">
						<a href="#"><h3>School &amp; Business Partnerships</h3></a>
						<a href="#"><p>Connecting schools and the business community for early career exposure and experiential learning opportunities.</p></a>
					</div>
				</div>
			</section>
			<section class="our-process bordered">
				<div class="row">
					<h2>Our process:</h2>
					<div class="process-number">
						<span id="one">1</span>
						<div class="reveal wow animated fadeInDown one">
							<img src="_assets/images/icon-ear.svg" alt="ear icon">
							<p>Listen &amp; Assess</p>
						</div>
					</div>
					<div class="process-number">
						<span>2</span>
						<div class="reveal wow animated fadeInDown two">
							<img src="_assets/images/icon-design.svg" alt="design icon">
							<p>Design &amp; Develop</p>
						</div>
					</div>
					<div class="process-number">
						<span>3</span>
						<div class="reveal wow animated fadeInDown three">
							<img src="_assets/images/icon-chart.svg" alt="chart icon">
							<p>Evaluate &amp; Implement</p>
						</div>
					</div>
					<div class="process-number">
						<span>4</span>
						<div class="reveal wow animated fadeInDown four">
							<img src="_assets/images/icon-pin-point.svg" alt="pin point icon">
							<p>Reflect &amp; Revisit</p>
						</div>
					</div>
				</div>
			</section>
			<section class="contact">
				<div class="row">
					<h2 class="max-2">Contact:</h2>
					<form action="" class="max-10">
						<ul>
							<li><input type="text" id="name" placeholder="Your Name" required></li>
							<li><input type="email" id="email" placeholder="Your Email" required></li>
							<li class="phone"><input type="tel" id="phone" placeholder="Phone No."></li>
							<li class="city"><input type="text" id="city" placeholder="City" required></li>
							<li><textarea id="message" required>Your Message</textarea></li>
							<li><input type="submit" id="submit" value="Submit"></li>
						</ul>
					</form>
				</div>
			</section>
			<footer>
				<div class="row">
					<p>Making meaningful connections with young people. &nbsp; &copy;<?php echo date('Y') ?> Jamila Sams</p>
				</div>
			</footer>
			<script>
			  var nav = responsiveNav(".nav-collapse");
			</script>
		</div>
	</body>
</html>