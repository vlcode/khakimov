<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rustam Khakimov Design</title>
	<meta name="description" content="Welcome to my portfolio-website" />
		<meta name="keywords" content="design, one page, animations, agency, portfolio, web design" />
		<meta name="author" content="Khakimov Rustam" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Facebook and Twitter integration -->
		<meta property="og:title" content="Rustam Khakimov - Designer, site-portfolio"/>
		<meta property="og:image" content="http://www.khakimov.eu/images/og-img.jpg"/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content="Please feel free to visit my portfolio website"/>
		<meta name="twitter:title" content="Rustam Khakimov - Designer, site-portfolio"/>
		<meta name="twitter:image" content="http://www.khakimov.eu/images/og-img.jpg"/>
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>

	<link rel="icon" type="image/png" href="favicon.png" />
  <link rel="apple-touch-icon" href="apple-touch-favicon.png"/>


	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82710312-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<?php
//Если форма отправлена
if(isset($_POST['submit'])) {
//Проверка Поля ИМЯ
if(trim($_POST['contactname']) == '') {
$hasError = true;
} else {
$name = trim($_POST['contactname']);
}
//Проверка правильности ввода EMAIL
if(trim($_POST['email']) == '')  {
$hasError = true;
} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
$hasError = true;
} else {
$email = trim($_POST['email']);
}
//Проверка наличия ТЕКСТА сообщения
if(trim($_POST['message']) == '') {
$hasError = true;
} else {
if(function_exists('stripslashes')) {
$comments = stripslashes(trim($_POST['message']));
} else {
$comments = trim($_POST['message']);
}
}
//Если ошибок нет, отправить email
if(!isset($hasError)) {
$emailTo = 'rustam@khakimov.eu'; //Сюда введите Ваш email
$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
mail($emailTo, $body, $headers);
$emailSent = true;
}
}
?>

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Rustam Khakimov</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#work" class="smoothScroll">ABOUT</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACTS</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
<!--				<h3>ДИЗАЙНЕР</h3>-->
<!--          Paralax-->
<!--
          <div class="parallax__group">
    <div class="parallax__layer parallax__layer--back">

    </div>
    <div class="parallax__layer parallax__layer--base">

    </div>
  </div>
-->


            <img src="images/logo.png" alt="" class="rklogo wow fadeIn" data-wow-delay="1.8s">
				<h1 class="wow fadeIn" data-wow-delay="2.4s">Pure perfection</h1>
				<hr>
				<a href="index.php" class="smoothScroll btn btn-default wow fadeIn" data-wow-delay="3s">RU</a>
				<a href="index-en.php" class="smoothScroll btn btn-default wow fadeIn" data-wow-delay="3s">EN</a>
			</div>
		</div>
	</div>
</section>

<!-- work section -->
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
<!--					<strong>01</strong>-->
					<h1 class="heading bold">NICE TO MEET YOU</h1>
					<hr>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">

					<img src="images/ava.png" alt="" class="img-responsive" />
			</div>

			<div class="col-lg-8 col-md-8 col-sm-8 wow fadeInUp" data-wow-delay="1s">

					<!-- <h3>ВОТ ТАКОЙ ДИЗАЙН</h3>
					<hr> -->
					<div class="aydentika">
						<p>Identity is known to be my element. I feel free like a bird in the sky when I am practicing it. </p>
						<p> All of its branches are the fields, which allow to prove that design is the force of modern business.</p>
					</div>

			</div>

		</div>
	</div>
</section>



<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
	<a name="top"></a>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
<!--					<strong>04</strong>-->
					<h1 class="heading bold">PORTFOLIO</h1>

					<hr>
				</div>
				<!-- ISO section -->
<!--		Brand Begin		-->
				<div class="portfolio-object block globel-pro" data-toggle="collapse" data-target="#hide-me-1">
				    <img src="images/portfolio/globel-pro/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-1" class="collapse after-logo">

				    <div class="row">
							<div class="col-md-6 col-md-offset-3">
							<p>
								The company executes deliveries of electro technical equipment, components of industrial automatics and industrial computer systems, which are used in various production processes.
							</p>


							</div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/globel-pro/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/globel-pro/pic-2.jpg" alt="" class="img-responsive">
				    </div>



				    </div>
				</div>

<!--		Brand End		-->


				<!--		Brand Begin		-->
				<div class="portfolio-object block vlcode" data-toggle="collapse" data-target="#hide-me-2">
				    <img src="images/portfolio/vlcode/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-2" class="collapse after-logo">

				    <div class="row">

							<div class="col-md-6 col-md-offset-3">
					    <p>
					        This is a personal brand of the web programmer, Vsevolod Lee. Activities of the programmer are creation of adaptive sites, SEO code optimization and maintenance of web projects on all of their steps of development.
					    </p>


					    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/vlcode/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/vlcode/pic-2.jpg" alt="" class="img-responsive">
				    </div>



				    </div>
				</div>

<!--		Brand End		-->

								<!--		Brand Begin		-->
				<div class="portfolio-object block daily-bread" data-toggle="collapse" data-target="#hide-me-3">
				    <img src="images/portfolio/daily-bread/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-3" class="collapse after-logo">

				    <div class="row">

							<div class="col-md-6 col-md-offset-3">
							<p>
								A bakery that produces bread based on world standards. At the moment the bakery supplies Tashkent’s leading restaurants with bakery products.
							</p>


							</div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/daily-bread/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/daily-bread/pic-2.jpg" alt="" class="img-responsive">
				    </div>



				    </div>
				</div>

<!--		Brand End		-->

								<!--		Brand Begin		-->
				<div class="portfolio-object block besco" data-toggle="collapse" data-target="#hide-me-4">
				    <img src="images/portfolio/besco/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-4" class="collapse after-logo">

				    <div class="row">

							<div class="col-md-6 col-md-offset-3">
							<p>
								This is a discount center, which started operating not long ago. Products, which you can find in Besco, are professional kitchen equipment, restaurant crockery and stationery.
							</p>


							</div>

				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/besco/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/besco/pic-2.jpg" alt="" class="img-responsive">
				    </div>


				    </div>
				</div>

<!--		Brand End		-->

								<!--		Brand Begin		-->
				<div class="portfolio-object block by-sipa" data-toggle="collapse" data-target="#hide-me-5">
				    <img src="images/portfolio/by-sipa/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-5" class="collapse after-logo">

				    <div class="row">

							<div class="col-md-6 col-md-offset-3">
					    <p>
					        Personal brand of the modeler Surayo (Sipa) Ilkhamova. The brand creates clothes from various national cloth or national patterns.
					    </p>


					    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/by-sipa/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/by-sipa/pic-2.jpg" alt="" class="img-responsive">
				    </div>



				    </div>
				</div>

<!--		Brand End		-->

            				<!--		Brand Begin		-->
				<div class="portfolio-object block joints" data-toggle="collapse" data-target="#hide-me-6">
				    <img src="images/portfolio/joints/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-6" class="collapse after-logo">

				    <div class="row">

							<div class="col-md-6 col-md-offset-3">
					    <p>
								This is a fashionable dining establishment following the loft style, located in the heart of Tashkent. This café can brag about delicious coffee, chill out atmosphere and an impressive menu card.
					    </p>


					    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/joints/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/joints/pic-2.jpg" alt="" class="img-responsive">
				    </div>



				    </div>
				</div>

<!--		Brand End		-->

            				<!--		Brand Begin		-->
				<div class="portfolio-object block waves" data-toggle="collapse" data-target="#hide-me-7">
				    <img src="images/portfolio/waves/logo.png" alt="" class="portfolio-logo">
				</div>

				<div id="hide-me-7" class="collapse after-logo">

				    <div class="row">

							<div class="col-md-6 col-md-offset-3">
					    <p>
							A cozy Lounge bar in Simferopol on the coast of the Black sea. The diner provides guests with dishes of the Caucasian and European cuisines, a wide variety of cocktails, hookahs and an unforgettable view on the Crimean beach.
					    </p>


					    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/waves/pic-1.jpg" alt="" class="img-responsive">
				    </div>
				    <div class="col-md-6 after-logo-img">
				        <img src="images/portfolio/waves/pic-2.jpg" alt="" class="img-responsive">
				    </div>



				    </div>
				</div>

<!--		Brand End		-->




			</div>
		</div>
	</div>
</div>



<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
<!--					<strong>06</strong>-->
					<h1 class="heading bold">CONTACT ME</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">CONTACT INFORMATION</h2>
				<p>For future mutually beneficial collaboration contact me by any comfortable mean:</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>rustam@khakimov.eu</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-chat medium-icon wow bounceIn" data-wow-delay="0.6s"></i> TELEGRAM</h3>
					<p>@rustam_khakimov</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONE</h3>
					<p>+371 2 810-42-96 (Phone, SMS, WhatsApp)</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<!--  -->
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="wow fadeInUp" data-wow-delay="0.6s" id="contactform">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="contactname" id="contactname">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email" id="email">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message" id="message"></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" class="form-control" value="Send" name="submit">
					</div>
				</form>
				<!--  -->



			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright 2016 | Design: <a href="#work" target="_parent">khakimov.eu</a> | Development: <a href="http://vlco.de" target="_parent">vlco.de</a></p>
				<hr>
				<ul class="social-icon">
					<li><a href="https://www.facebook.com/rustik.kh" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s" target="_blank"></a></li>
					<li><a href="https://www.instagram.com/khak1mov/" class="fa fa-instagram wow fadeIn" data-wow-delay="0.9s" target="_blank"></a></li>
					<li><a href="#" class="fa fa-linkedin wow fadeIn" data-wow-delay="1.5s" target="_blank"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<!--<script src="js/jquery.backstretch.min.js"></script>-->
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
