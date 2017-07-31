<?php 
require_once("./phpQuery-onefile.php");
error_reporting(E_ALL);

/*yahoo*/
$HTMLData = file_get_contents('https://fortune.yahoo.co.jp/12astro/scorpio');
$phpQueryObj = phpQuery::newDocumentHTML($HTMLData);
$ranking = $phpQueryObj['#jumpdtl strong'];
$ranking = mb_convert_encoding($ranking, 'UTF-8', 'CP51932');
$table_tag = $phpQueryObj['#jumpdtl img'];

/*i無料占い*/
$HTMLData2 = file_get_contents('http://uranaitv.jp/rank_fortune/scorpio');
$phpQueryObj2 = phpQuery::newDocumentHTML($HTMLData2);
$ranking2 = $phpQueryObj2["meta[property='og:description']"];
$ranking2 = explode("……", pq($ranking2)[0]->attr('content'))[1];
$table_tag2 = $phpQueryObj2['#rankAll span'];


/*i無料占い*/
$HTMLData3 = file_get_contents('https://uranai.nifty.com/f12seiza/sasori/');
$phpQueryObj3 = phpQuery::newDocumentHTML($HTMLData3);
$h2_tag = $phpQueryObj3["h2"];
foreach($h2_tag as $val) {
	if (strpos(pq($val)->text(),'位')) {
		$ranking3 = explode("さそり座 ", pq($val)->text())[1];
	}
}

//echo $ranking3;
$table_tag3 = $phpQueryObj3['#re_main img'];

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cache &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="boxed">

	<!-- Loader -->
	<div class="fh5co-loader"></div>

	<div id="wrap">

	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="container">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
				<div id="fh5co-logo"><a href="index.html"><img src="images/logo.jpg" alt="Free HTML5 Website Template"></a></div>
				<nav id="fh5co-main-nav" role="navigation">
					<ul>
						<li><a href="about.html">About</a></li>
						<li class="has-sub">
							<div class="drop-down-menu">
								<a href="services.html">Services</a>
								<div class="dropdown-menu-wrap">
									<ul>
										<li><a href="#">Web Development</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">Graphic Design</a></li>
										<li><a href="#">Branding</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li class="has-sub">
							<div class="drop-down-menu">
								<a href="#">Sidebars</a>
								<div class="dropdown-menu-wrap">
									<ul>
										<li><a href="right-sidebar.html">Right Sidebar</a></li>
										<li><a href="left-sidebar.html">Left Sidebar</a></li>
										
									</ul>
								</div>
							</div>
						</li>
						<li class="cta"><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- Header -->

		<div class="fh5co-slider">
<!-- 			<div class="container">
				<div class="owl-carousel owl-carousel-main">
				  <div><img src="images/slider_1.jpg" alt="Free HTML5 Website Template"></div>
				  <div><img src="images/slider_2.jpg" alt="Free HTML5 Website Template"></div>
				  <div><img src="images/slider_3.jpg" alt="Free HTML5 Website Template"></div>
				</div>
			</div>
 -->		</div>
		<!-- Slider -->
		
		<div id="fh5co-intro" class="fh5co-section">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-8 col-md-offset-2 text-center ts-intro">
						<h1>蠍座の蠍座のための蠍座占い</h1>
						<p class="fh5co-lead">蠍座の人が今日1日をいい気持ちでスタートできるように作りました。</p>
					</div>
				</div>
				<div class="row row-bottom-padded-sm">
					<div class="col-md-4">
						<a href="https://fortune.yahoo.co.jp/12astro/scorpio" title="">
						<div class="fh5co-service text-center">
							<?php echo "<img src ='".pq($table_tag)[0]->attr('src')."' width='46px;'>"; ?>
							<h3>Yahoo占い<br><?php echo $ranking; ?></h3>
							<?php 
								foreach($table_tag as $val) {
									if (strpos(pq($val)->attr('src'),'yftn_md20_12astro08')=== false) {
										echo "<img src ='".pq($val)->attr('src')."' width='100px'><br>";
										echo "<span>".pq($val)->attr('alt')."</span><br>";
									}
								}
							 ?>
						</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="http://uranaitv.jp/rank_fortune/scorpio" title="">
						<div class="fh5co-service text-center">
							<?php echo "<img src ='http://uranaitv.jp/wp/images/conste/c_8.png' width='46px;'>"; ?>
							<h3>i無料占い<br><?php echo $ranking2; ?></h3>
							<p>
							<?php 
								foreach($table_tag2 as $val) {
										echo pq($val);
										echo "<br>";
								}
							 ?></p>
						</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="https://uranai.nifty.com/f12seiza/sasori/" title="">
						<div class="fh5co-service text-center">
							<?php echo "<img src ='https://uranai.nifty.com/images/bt_sasori.gif' width='46px;'>"; ?>
							<h3>占い@nifty<br><?php echo $ranking3; ?></h3>
							<p>
							<?php 
								foreach($table_tag3 as $val) {
									if (preg_match('/mony|job|love/',pq($val)->attr('src'))) {
										echo "<img src ='https://uranai.nifty.com".pq($val)->attr('src')."'>";
										echo '<br>';
									}
								}
							 ?></p>
						</div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="http://eonet.jp/fortune/constellation/result.php?conste=scorpio" title="">
						<div class="fh5co-service text-center">
							<?php echo "<img src ='http://eonet.jp/fortune/images/parts/img_main8.png' width='46px;'>"; ?>
							<h3>i無料占い<br><?php echo $ranking3; ?></h3>
							<p>
							<?php 
								foreach($table_tag3 as $val) {
									if (preg_match('/mony|job|love/',pq($val)->attr('src'))) {
										echo "<img src ='https://uranai.nifty.com".pq($val)->attr('src')."'>";
										echo '<br>';
									}
								}
							 ?></p>
						</div>
						</a>
					</div>
				</div>
				<div class="row row-bottom-padded-sm">
					<div class="col-md-6">
						<p><img src="images/slider_1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive img-bordered"></p>
					</div>
					<div class="col-md-6 padded-top">
						<h3>Creative Title Here</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum fuga rerum doloremque dolore, molestias eligendi. Nulla aliquam aut doloribus tenetur repellendus omnis dicta, unde magni.</p>
						<ul class="ul_style_1">
							<li>Lorem ipsum dolor sit amet</li>
							<li>Consectetur adipisicing elit</li>
							<li>Recusandae laboriosam eligendi maiores</li>
							<li>Sapiente repudiandae perspiciatis</li>
						</ul>
					</div>
				</div>

				<div class="row row-bottom-padded-sm">
					<div class="col-md-4">
						<div class="fh5co-service text-center">
							<img src="images/slider_1.jpg" class="img-responsive img-bordered" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>Graphic Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ullam unde, totam harum laboriosam dolores.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-service text-center">
							<img src="images/slider_2.jpg" class="img-responsive img-bordered" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>Web Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ullam unde, totam harum laboriosam dolores.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-service text-center">
							<img src="images/slider_3.jpg" class="img-responsive img-bordered" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
							<h3>Web Development</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ullam unde, totam harum laboriosam dolores.</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-bottom-padded-sm">
					<div class="col-md-4 col-sm-12">
						<div class="fh5co-footer-widget">
							<h3>About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum fuga rerum doloremque dolore, molestias eligendi. Nulla aliquam aut doloribus tenetur repellendus omnis dicta, unde magni.</p>
						</div>
					</div>
					<div class="col-md-3 col-md-push-1 col-sm-12 col-sm-push-0">
						<div class="fh5co-footer-widget">
							<h3>Quick Links</h3>
							<ul class="fh5co-footer-link">
								<li><a href="#">Home</a></li>
								<li><a href="#">Free HTML5 Template</a></li>
								<li><a href="#">jQuery &amp; CSS3</a></li>
								<li><a href="#">Built with Sass</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-md-push-2 col-sm-12 col-sm-push-0">
						
						<div class="fh5co-footer-widget">
							<h3>Follow us</h3>
							<ul class="fh5co-social">
								<li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
								<li class="linkedin"><a href="#"><i class="icon-linkedin"></i></a></li>
								<li class="message"><a href="#"><i class="icon-mail"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="fh5co-copyright">
							<p class="pull-left">&copy; 2016 Free Template. All Rights Reserved. </p>
							<p class="pull-right">Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-chevron-down"></i></a>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

