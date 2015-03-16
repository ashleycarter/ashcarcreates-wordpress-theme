<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Page Needs
		================================================== -->
	<meta charset="utf-8">
	<title>
		<?php 
			wp_title( '-', true, 'right' );
			//bloginfo( 'name' );
		 ?>
	</title>

	<meta name="description" content="Ashley Carter Creates is the online portoflio of Ashley Carter, a freelance graphic and web designer based in Jacksonville, NC and Washington, DC, specializing in logo design, branding and identiy, print design, and website design.">
	<meta name="author" content="Ashley Carter">

	<!-- Mobile Specific Metas
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fonts
		================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="http://ashleycartercreates.com/images/favicon.ico">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Scripts
	================================================== -->
	<?php wp_enqueue_script("jquery"); ?>

	<!-- Wordpress Include
	================================================== -->
	<?php wp_head(); ?>

	<!-- Google Analytics
	================================================== -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47174501-1', 'ashleycartercreates.com');
	  ga('send', 'pageview');
	</script>
	</head>

<body>
<!-- Primary Page Layout
	================================================== -->
<header>
	<div class="box">
	</div>

	<div class="sixteen columns">
		<div>
		<a href="/">
			<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png">
		</a>
		<!--<h2 style="margin-bottom: 0;">Ashley Carter <span style="font-weight:normal;">Creates</span></h2>
		<h6 style="text-align:center;">Branding&nbsp;&nbsp;|&nbsp;&nbsp;Print Design&nbsp;&nbsp;|&nbsp;&nbsp;Front-End Web Development</h6>-->
		</div>
	</div>

	<h1>Ashley Carter Creates</h1>

	<div class="full-width">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
	</div>
</header>

	