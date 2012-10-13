<!DOCTYPE html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Developr</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- For all browsers -->
	<link rel="stylesheet" href="<?php echo css_url('reset');?>">
	<link rel="stylesheet" href="<?php echo css_url('style'); ?>">
	<link rel="stylesheet" href="<?php echo css_url('colors'); ?>">
	<link rel="stylesheet" media="print" href="<?php echo css_url('print'); ?>">
	<!-- For progressively larger displays -->
	<link rel="stylesheet" media="only all and (min-width: 480px)" href="<?php echo css_url('480'); ?>">
	<link rel="stylesheet" media="only all and (min-width: 768px)" href="<?php echo css_url('768'); ?>">
	<link rel="stylesheet" media="only all and (min-width: 992px)" href="<?php echo css_url('992'); ?>">
	<link rel="stylesheet" media="only all and (min-width: 1200px)" href="<?php echo css_url('1200'); ?>">
	<!-- For Retina displays -->
	<link rel="stylesheet" media="only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="<?php echo css_url('2x'); ?>">

	<!-- Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

	<!-- Additional styles -->
	<link rel="stylesheet" href="<?php echo css_url('styles/progress-slider'); ?>">
	<link rel="stylesheet" href="<?php echo css_url('styles/switches'); ?>">
	<link rel="stylesheet" href="<?php echo css_url('styles/files'); ?>">

	<!-- JavaScript at bottom except for Modernizr -->
	<script src="<?php echo js_url('libs/modernizr.custom'); ?>"></script>

	<!-- For Modern Browsers -->
	<link rel="shortcut icon" href="<?php echo js_url('libs/modernizr.custom'); ?>">
	<!-- For everything else -->
	<link rel="shortcut icon" href="<?php echo img_url('favicons/favicon.ico'); ?>">
	<!-- For retina screens -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/favicons/apple-touch-icon-retina.png">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/favicons/apple-touch-icon-ipad.png">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo img_url('splash/iphone.png'); ?>assets/img/favicons/apple-touch-icon.png">

	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="<?php echo img_url('splash/ipad-landscape.png'); ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="<?php echo img_url('splash/ipad-portrait.png'); ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo img_url('splash/iphone.png'); ?>" media="screen and (max-device-width: 320px)">

	<!-- Microsoft clear type rendering -->
	<meta http-equiv="cleartype" content="on">
</head><body class="clearfix with-menu with-shortcuts">

	<!-- Prompt IE 6 users to install Chrome Frame -->
	<!--[if lt IE 7]><p class="message red-gradient simpler">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<!-- Title bar -->
	<header role="banner" id="title-bar">
		<h2>Developr</h2>
	</header>

	<!-- Button to open/hide menu -->
	<a href="#" id="open-menu"><span>Menu</span></a>

	<!-- Button to open/hide shortcuts -->
	<a href="#" id="open-shortcuts"><span class="icon-thumbs"></span></a>

<section role="main" id="main">

		<noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>

		<hgroup id="main-title" class="thin">
			<h1>Messages</h1>
		</hgroup>

		<div class="with-padding">

			<div class="content-panel margin-bottom enabled-panels">

				<div class="panel-navigation silver-gradient">

					<div class="panel-control">
						<a href="#" class="button icon-undo">Rafraîchir</a>
					</div>

					<div class="panel-load-target scrollable custom-scroll" style="height: 490px; position: relative; ">

						<div class="navigable">
							<ul class="unstyled-list open-on-panel-content">
								<li class="big-menu grey-gradient with-right-arrow">
									<span><span class="list-count">2</span>Non lus</span>
									<ul class="message-menu">
										<li>
											<?php if ($results != null) : foreach ($results as $r): 
											$id = $r->id ?>
											<span class="message-status">
												<a href="#" class="unstarred" title="Not starred">Not starred</a>
											</span>
											<span class="message-info">
												<span class="blue"><?php echo date('d/a/Y H:i',strtotime($r->date)); ?></span>
											</span>
											<a href="" title="Read message">
												<strong class="blue"><?php echo $r->contact; ?></strong><br>
												Message subject
											</a>
											<?php ; ?> 
											<?php endforeach; ?>
											<?php endif; ?>
										</li>	
									</ul>
								</li>
							</ul>
						</div>
					<div class="custom-vscrollbar" style="display: none; opacity: 0; "></div></div>
				</div>

				<div class="panel-content linen">

					<div class="panel-control align-right">
						<span class="progress thin" style="width: 40px">
							<span class="progress-bar orange-gradient" style="width: 65%"></span>
						</span>
						Used: 65%
						<a href="#" class="button icon-star margin-left">New message</a>
					</div>

					<div class="back"><span class="back-arrow"></span>Back</div><div class="panel-load-target scrollable with-padding custom-scroll" style="height: 450px; position: relative; ">
						
						<h2 class="thin mid-margin-bottom">Message subject</h2>
						<h4 class="no-margin-top">De : <?php echo $r->contact; ?></h4>
						<h4 class="no-margin-top">De : <?php echo $r->id; ?></h4>

						<div class="large-box-shadow white-gradient with-border">

							<div class="button-height with-mid-padding silver-gradient no-margin-top">
								<span class="button-group children-tooltip">
									<a href="#" class="button blue-gradient icon-reply" title="Reply to this message">Traiter</a>
								</span>
								<span class="button-group children-tooltip">
									<a href="#" class="button" title="Move to trash"><span class="icon-trash"></span></a>
								</span>
							</div>

							<div class="with-padding">
								<p><?php echo $r->message; ?></p>


								<div class="left-border grey">
									<p>Email : <?php echo $r->email; ?></p>
									<p>Télphone N° : <?php echo $r->telephone; ?></p>
								</div>
							</div>

						</div>

					<div class="custom-vscrollbar" style="display: block; top: 6px; left: 1124px; height: 478px; width: 8px; opacity: 0.18203046404868373; "><div style="top: 0px; height: 374px; "></div></div></div>

				</div>

			</div>

			<p class="wrapped left-icon icon-info-round">This is only a front-end style, the demo content is static. All AJAX features are functional, but you need to connect them to your own server mail management script</p>
			
				

		</div>

	</section>

	<!-- Side tabs shortcuts -->
	<ul id="shortcuts" role="complementary" class="children-tooltip tooltip-right">
		<li class="current"><a class="shortcut-messages" title="Messages">Messages</a></li>
	</ul>

	<!-- Sidebar/drop-down menu -->
	<section id="menu" role="complementary">

		<!-- This wrapper is used by several responsive layouts -->
		<div id="menu-content">

			<header>
				Administrator
			</header>

			<div id="profile">
				<img src='<?php echo img_url("user.png") ?>'width="64" height="64" alt="User name" class="user-icon">
				Bonjour
				<span class="name">Sullivan <b>RICHARD</b></span>
			</div>

			<!-- By default, this section is made for 4 icons, see the doc to learn how to change this, in "basic markup explained" -->
			<ul id="access" class="children-tooltip">
				<li><a href="inbox.html" title="Messages"><span class="icon-inbox"></span><span class="count">20</span></a></li>
				<li><a href="login.html" title="Profile"><span class="icon-user"></span></a></li>
			</ul>
		</div>		
		<!-- End content wrapper -->

		<!-- This is optional -->
		<footer id="menu-footer">
			<p class="button-height">
				<input type="checkbox" name="auto-refresh" id="auto-refresh" checked="checked" class="switch float-right">
				<label for="auto-refresh">Auto-refresh</label>
			</p>
		</footer>

	</section>
	<!-- End sidebar/drop-down menu -->


	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Scripts -->
	<script src="<?php echo js_url('libs/jquery-1.7.2.min'); ?>"></script>
	<script src="<?php echo js_url('setup'); ?>"></script>

	<!-- Template functions -->
	<script src="<?php echo js_url('developr.input'); ?>"></script>
	<script src="<?php echo js_url('developr.navigable'); ?>"></script>
	<script src="<?php echo js_url('developr.notify'); ?>"></script>
	<script src="<?php echo js_url('developr.scroll'); ?>"></script>
	<script src="<?php echo js_url('developr.progress-slider'); ?>"></script>
	<script src="<?php echo js_url('developr.tooltip'); ?>"></script>
	<script src="<?php echo js_url('developr.content-panel'); ?>"></script>

	<script>

		// Call template init (optional, but faster if called manually)
		$.template.init();

		// Gallery size slider
		$('#gallery-slider').slider({
			min: 6,
			value: 13,
			max: 32,
			onChange: function(value)
			{
				$('#demo-gallery').css('font-size', value+'px');
			}
		});

	</script>
	

</body>
</html>