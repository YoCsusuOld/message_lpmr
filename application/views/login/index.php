<!DOCTYPE html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie linen"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie linen" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie linen" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9 linen" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!--><html class="no-js linen" lang="fr"><!--<![endif]-->

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
	<link rel="stylesheet" href="<?php echo css_url('style');?>">
	<link rel="stylesheet" href="<?php echo css_url('colors');?>">
	<link rel="stylesheet" media="print" href="<?php echo css_url('print');?>">
	<!-- For progressively larger displays -->
	<link rel="stylesheet" media="only all and (min-width: 480px)" href="<?php echo css_url('480');?>">
	<link rel="stylesheet" media="only all and (min-width: 768px)" href="<?php echo css_url('768');?>">
	<link rel="stylesheet" media="only all and (min-width: 992px)" href="<?php echo css_url('992');?>">
	<link rel="stylesheet" media="only all and (min-width: 1200px)" href="<?php echo css_url('1200');?>">
	<!-- For Retina displays -->
	<link rel="stylesheet" media="only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="<?php echo css_url('2x');?>">

	<!-- Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	
	<!-- Additional styles -->
	<link rel="stylesheet" href="<?php echo css_url('styles/form');?>">
	<link rel="stylesheet" href="<?php echo css_url('styles/progress-slider');?>">
	<link rel="stylesheet" href="<?php echo css_url('styles/switches');?>">
	<link rel="stylesheet" href="<?php echo css_url('styles/files');?>">

	<!-- Login pages styles -->
	<link rel="stylesheet" media="screen" href="<?php echo css_url('login');?>">

	<!-- JavaScript at bottom except for Modernizr -->
	<script src="<?php echo js_url('libs/modernizr.custom'); ?>"></script>

	<!-- For Modern Browsers -->
	<link rel="shortcut icon" href="<?php echo img_url('favicons/favicon.png'); ?>">
	<!-- For everything else -->
	<link rel="shortcut icon" href="<?php echo img_url('favicons/favicon.ico'); ?>">
	<!-- For retina screens -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo img_url('favicons/apple-touch-icon-retina.png'); ?>">
	<!-- For iPad 1-->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo img_url('favicons/apple-touch-icon-ipad.png'); ?>">
	<!-- For iPhone 3G, iPod Touch and Android -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo img_url('favicons//apple-touch-icon.png'); ?>">

	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="<?php echo img_url('splash/ipad-landscape.png'); ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="<?php echo img_url('splash/ipad-portrait.png'); ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo img_url('splash/iphone.png'); ?>" media="screen and (max-device-width: 320px)">

	<!-- Microsoft clear type rendering -->
	<meta http-equiv="cleartype" content="on">

	<!-- IE9 Pinned Sites: http://msdn.microsoft.com/en-us/library/gg131029.aspx -->
	<meta name="application-name" content="Developr Admin Skin">
	<meta name="msapplication-tooltip" content="Cross-platform admin template.">
	<meta name="msapplication-starturl" content="http://www.display-inline.fr/demo/developr">
	<!-- These custom tasks are examples, you need to edit them to show actual pages -->
	<meta name="msapplication-task" content="name=Agenda;action-uri=http://www.display-inline.fr/demo/developr/agenda.html;icon-uri=http://www.display-inline.fr/demo/developr/img/favicons/favicon.ico">
	<meta name="msapplication-task" content="name=My profile;action-uri=http://www.display-inline.fr/demo/developr/profile.html;icon-uri=http://www.display-inline.fr/demo/developr/img/favicons/favicon.ico">

</head>

<body>

	<div id="container">
		<hgroup id="login-title" class="large-margin-bottom">
	<h1 class="login-title-image">Suivis des messages</h1>
	<h5>&copy; L3pmres</h5>
</hgroup>

<div id="form-wrapper">

	<div id="form-block" class="scratch-metal">
		<div id="form-viewport">

			<form method="post" action="" id="form-login" class="input-wrapper blue-gradient glossy" title="Connexion">
				<ul class="inputs black-input large">
					<!-- The autocomplete="off" attributes is the only way to prevent webkit browsers from filling the inputs with yellow -->
					<li><span class="icon-user mid-margin-right"></span><input type="text" name="login" id="login" value="" class="input-unstyled" placeholder="Identifiant" autocomplete="off"></li>
					<li><span class="icon-lock mid-margin-right"></span><input type="password" name="pass" id="pass" value="" class="input-unstyled" placeholder="Mot de passe" autocomplete="off"></li>
				</ul>

				<p class="button-height">
					<button type="submit" class="button glossy float-right" id="login">Connexion</button>
					<input type="checkbox" name="remind" id="remind" value="1" checked="checked" class="switch tiny mid-margin-right with-tooltip" title="Enable auto-login">
					<label for="remind">Se souvenir de moi</label>
				</p>
			</form>

			<form method="post" action="" id="form-password" class="input-wrapper orange-gradient glossy" title="Mot de passe oublié?">

				<p class="message">
					Si vous avez perdu votre mot de passe, communiquez nous votre adresse e-mail et un nouveau mot de passe vous sera envoyé:
					<span class="block-arrow"><span></span></span>
				</p>

				<ul class="inputs black-input large">
					<li><span class="icon-mail mid-margin-right"></span><input type="email" name="mail" id="mail" value="" class="input-unstyled" placeholder="Votre e-mail" autocomplete="off"></li>
				</ul>

			<button type="submit" class="button glossy full-width" id="send-password">Envoyer nouveau mot de passe</button>

			</form>
			

			<?php 
			if (isset($success)): 
 			redirect('http://google.com', 'refresh');
			endif;

			$attributes = array('id' => 'form-register','class' => 'input-wrapper green-gradient glossy',  'title' => 'Inscription'); 
			echo form_open('login/signup', $attributes);
			?>		
				
				<p class="message">
					Nouvel utilisateur ? Yeh! Laissez nous en savoir un peu plus sur vous avant de commencer:
					<span class="block-arrow"><span></span></span>
				</p>

				<ul class="inputs black-input large">
					<li><span class="icon-card mid-margin-right"></span><input type="text" value="TOURNIER" name="name" id="name-register" value="" class="input-unstyled" placeholder="Votre nom" autocomplete="off"></li>
					<li><span class="icon-mail mid-margin-right"></span><input type="email" value="anthony.tournier25@gmail.com" name="mail" id="mail-register" value="" class="input-unstyled" placeholder="Votre e-mail" autocomplete="off"></li>
				</ul>
				<ul class="inputs black-input large">
					<li><span class="icon-user mid-margin-right"></span><input type="text" value="syn" name="login" id="login-register" value="" class="input-unstyled" placeholder="Votre identifiants" autocomplete="off"></li>
					<li><span class="icon-lock mid-margin-right"></span><input type="password" value="syn" name="pass" id="pass-register" value="" class="input-unstyled" placeholder="Votre mot de passe" autocomplete="off"></li>
				</ul>

				<button type="submit" class="button glossy full-width" id="send-register">S'inscrire</button>

			<?php echo form_close(); ?>
			
		</div>
	</div>
</div>

	</div>

	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Scripts -->
	<script src="<?php echo js_url('libs/jquery-1.7.2.min'); ?>"></script>
	<script src="<?php echo js_url('setup'); ?>"></script>

	<!-- Template functions -->
	<script src="<?php echo js_url('developr.input'); ?>"></script>
	<script src="<?php echo js_url('developr.message'); ?>"></script>
	<script src="<?php echo js_url('developr.notify'); ?>"></script>
	<script src="<?php echo js_url('developr.tooltip'); ?>"></script>

	

	

	<script>

		/*
		 * How do I hook my login script to these?
		 * --------------------------------------
		 *
		 * These scripts are meant to be non-obtrusive: if the user has disabled javascript or if an error occurs, the forms
		 * works fine without ajax.
		 *
		 * The only part you need to edit are the scripts between the EDIT THIS SECTION tags, which do inputs validation and
		 * send data to server. For instance, you may keep the validation and add an AJAX call to the server with the user
		 * input, then redirect to the dashboard or display an error depending on server return.
		 *
		 * Or if you don't trust AJAX calls, just remove the event.preventDefault() part and let the form be submitted.
		 */

		$(document).ready(function()
		{
			/*
			 * JS login effect
			 * This script will enable effects for the login page
			 */
				// Elements
			var doc = $('html').addClass('js-login'),
				container = $('#container'),
				formWrapper = $('#form-wrapper'),
				formBlock = $('#form-block'),
				formViewport = $('#form-viewport'),
				forms = formViewport.children('form'),

				// Doors
				topDoor = $('<div id="top-door" class="form-door"><div></div></div>').appendTo(formViewport),
				botDoor = $('<div id="bot-door" class="form-door"><div></div></div>').appendTo(formViewport),
				doors = topDoor.add(botDoor),

				// Switch
				formSwitch = $('<div id="form-switch"><span class="button-group"></span></div>').appendTo(formBlock).children(),

				// Current form
				hash = (document.location.hash.length > 1) ? document.location.hash.substring(1) : false,

				// If layout is centered
				centered,

				// Store current form
				currentForm,

				// Animation interval
				animInt,

				// Work vars
				maxHeight = false,
				blocHeight;

			/******* EDIT THIS SECTION *******/

			/*
			 * Login
			 * These functions will handle the login process through AJAX
			 */
			$('#form-login').submit(function(event)
			{
				// Values
				var login = $.trim($('#login').val()),
					pass = $.trim($('#pass').val());

				// Check inputs
				if (login.length === 0)
				{
					// Display message
					displayError('Merci d\'écrire votre identifiant !');
					return false;
				}
				else if (pass.length === 0)
				{
					// Remove empty login message if displayed
					formWrapper.clearMessages('Merci d\'écrire votre identifiant !');

					// Display message
					displayError('Merci d\'écrire votre mot de passe');
					return false;
				}
				else
				{
					// Remove previous messages
					formWrapper.clearMessages();

					// Show progress
					displayLoading('Connexion en cours...');

					// Stop normal behavior
					event.preventDefault();

					/*
					 * This is where you may do your AJAX call, for instance:
					 * $.ajax(url, {
					 * 		data: {
					 * 			login:	login,
					 * 			pass:	pass
					 * 		},
					 * 		success: function(data)
					 * 		{
					 * 			if (data.logged)
					 * 			{
					 * 				document.location.href = 'index.html';
					 * 			}
					 * 			else
					 * 			{
					 * 				formWrapper.clearMessages();
					 * 				displayError('Invalid user/password, please try again');
					 * 			}
					 * 		},
					 * 		error: function()
					 * 		{
					 * 			formWrapper.clearMessages();
					 * 			displayError('Error while contacting server, please try again');
					 * 		}
					 * });
					 */

					// Simulate server-side check
					setTimeout(function() {
						document.location.href = './'
					}, 2000);
				}
			});

			/*
			 * Password recovery
			 */
			$('#form-password').submit(function(event)
			{
				// Values
				var mail = $.trim($('#mail').val());

				// Check inputs
				if (mail.length === 0)
				{
					// Display message
					displayError('Merci d\'écrire votre e-mail');
					return false;
				}
				else if (!/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(mail))
				{
					// Remove empty email message if displayed
					formWrapper.clearMessages('Merci d\'écrire votre e-mail');

					// Display message
					displayError('Email non valide');
					return false;
				}
				else
				{
					// Remove previous messages
					formWrapper.clearMessages();

					// Show progress
					displayLoading('Envoie en cours...');

					// Stop normal behavior
					event.preventDefault();

					/*
					 * This is where you may do your AJAX call
					 */

					// Simulate server-side check
					setTimeout(function() {
						document.location.href = './'
					}, 2000);
				}
			});

			/*
			 * Register
			 */
			$('#form-register').submit(function(event)
			{
				// Values
				var name = $.trim($('#name-register').val()),
					mail = $.trim($('#mail-register').val()),
					login = $.trim($('#login-register').val()),
					pass = $.trim($('#pass-register').val());

				// Remove previous messages
				formWrapper.clearMessages();

				// Check inputs
				if (name.length === 0)
				{
					// Display message
					displayError('Merci d\'écrire votre nom');
					return false;
				}
				else if (mail.length === 0)
				{
					// Display message
					displayError('Merci d\'écrire votre e-mail');
					return false;
				}
				else if (!/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(mail))
				{
					// Display message
					displayError('Email non valide');
					return false;
				}
				else if (login.length === 0)
				{
					// Display message
					displayError('Merci d\'écrire votre identifiant');
					return false;
				}
				else if (pass.length === 0)
				{
					// Display message
					displayError('Merci d\'écrire votre mot de passe');
					return false;
				}
				else
				{
					// Show progress
					displayLoading('Inscription...');

					// Stop normal behavior
					//event.preventDefault();

					/*
					 * This is where you may do your AJAX call
					 */

					// Simulate server-side check
					setTimeout(function() {
					document.location.href = './'
					}, 2000);
				}
			});


			/******* END OF EDIT SECTION *******/

			/*
			 * Animated login
			 */

			// Prepare forms
			forms.each(function(i)
			{
				var form = $(this),
					height = form.outerHeight(),
					active = (hash === false && i === 0) || (hash === this.id),
					color = this.className.match(/[a-z]+-gradient/) ? ' '+(/([a-z]+)-gradient/.exec(this.className)[1])+'-active' : '';

				// Store size
				form.data('height', height);

				// Min-height for mobile layout
				if (maxHeight === false || height > maxHeight)
				{
					maxHeight = height;
				}

				// Button in the switch
				form.data('button', $('<a href="#'+this.id+'" id="'+this.id+'" class="button anthracite-gradient'+color+(active ? ' active' : '')+'">'+this.title+'</a>')
									.appendTo(formSwitch)
									.data('form', form));

				// If active
				if (active)
				{
					// Store
					currentForm = form;

					// Height of viewport
					formViewport.height(height);
				}
				else
				{
					// Hide for now
					form.hide();
				}
			});

			// Main bloc height (without form height)
			blocHeight = formBlock.height()-currentForm.data('height');

			// Handle resizing (mostly for debugging)
			function handleLoginResize()
			{
				// Detect mode
				centered = (container.css('position') === 'absolute');

				// Set min-height for mobile layout
				if (!centered)
				{
					formWrapper.css('min-height', (blocHeight+maxHeight+20)+'px');
					container.css('margin-top', '');
				}
				else
				{
					formWrapper.css('min-height', '');
					if (parseInt(container.css('margin-top'), 10) === 0)
					{
						centerForm(currentForm, false);
					}
				}
			};

			// Register and first call
			$(window).bind('normalized-resize', handleLoginResize);
			handleLoginResize();

			// Switch behavior
			formSwitch.on('click', 'a', function(event)
			{
				var link = $(this),
					form = link.data('form'),
					previousForm = currentForm;

				event.preventDefault();
				if (link.hasClass('active'))
				{
					return;
				}

				// Refresh forms sizes
				forms.each(function(i)
				{
					var form = $(this),
						hidden = form.is(':hidden'),
						height = form.show().outerHeight();

					// Store size
					form.data('height', height);

					// If not active
					if (hidden)
					{
						// Hide for now
						form.hide();
					}
				});

				// Clear messages
				formWrapper.clearMessages();

				// If an animation is already running
				if (animInt)
				{
					clearTimeout(animInt);
				}
				formViewport.stop(true);

				// Update active button
				currentForm.data('button').removeClass('active');
				link.addClass('active');

				// Set as current
				currentForm = form;

				// if CSS transitions are available
				if (doc.hasClass('csstransitions'))
				{
					// Close doors - step 1
					doors.removeClass('door-closed').addClass('door-down');
					animInt = setTimeout(function()
					{
						// Close doors, step 2
						doors.addClass('door-closed');
						animInt = setTimeout(function()
						{
							// Hide previous form
							previousForm.hide();

							// Show target form
							form.show();

							// Center layout
							centerForm(form, true);

							// Height of viewport
							formViewport.animate({
								height: form.data('height')+'px'
							}, function()
							{
								// Open doors, step 1
								doors.removeClass('door-closed');
								animInt = setTimeout(function()
								{
									// Open doors - step 2
									doors.removeClass('door-down');
								}, 300);
							});
						}, 300);
					}, 300);
				}
				else
				{
					// Close doors
					topDoor.animate({ top: '0%' }, 300);
					botDoor.animate({ top: '50%' }, 300, function()
					{
						// Hide previous form
						previousForm.hide();

						// Show target form
						form.show();

						// Center layout
						centerForm(form, true);

						// Height of viewport
						formViewport.animate({
							height: form.data('height')+'px'
						}, {

							/* IE7 is a bit buggy, we must force redraw */
							step: function(now, fx)
							{
								topDoor.hide().show();
								botDoor.hide().show();
								formSwitch.hide().show();
							},

							complete: function()
							{
								// Open doors
								topDoor.animate({ top: '-50%' }, 300);
								botDoor.animate({ top: '105%' }, 300);
								formSwitch.hide().show();
							}
						});
					});
				}
			});

			// Initial vertical adjust
			centerForm(currentForm, false);

			/*
			 * Center function
			 * @param jQuery form the form element whose height will be used
			 * @param boolean animate whether or not to animate the position change
			 * @param string|element|array any jQuery selector, DOM element or set of DOM elements which should be ignored
			 * @return void
			 */
			function centerForm(form, animate, ignore)
			{
				// If layout is centered
				if (centered)
				{
					var siblings = formWrapper.siblings().not('.closing'),
						finalSize = blocHeight+form.data('height');

					// Ignored elements
					if (ignore)
					{
						siblings = siblings.not(ignore);
					}

					// Get other elements height
					siblings.each(function(i)
					{
						finalSize += $(this).outerHeight(true);
					});

					// Setup
					container[animate ? 'animate' : 'css']({ marginTop: -Math.round(finalSize/2)+'px' });
				}
			};

			/**
			 * Function to display error messages
			 * @param string message the error to display
			 */
			function displayError(message)
			{
				// Show message
				var message = formWrapper.message(message, {
					append: false,
					arrow: 'bottom',
					classes: ['red-gradient'],
					animate: false					// We'll do animation later, we need to know the message height first
				});

				// Vertical centering (where we need the message height)
				centerForm(currentForm, true, 'fast');

				// Watch for closing and show with effect
				message.bind('endfade', function(event)
				{
					// This will be called once the message has faded away and is removed
					centerForm(currentForm, true, message.get(0));

				}).hide().slideDown('fast');
			};

			/**
			 * Function to display loading messages
			 * @param string message the message to display
			 */
			function displayLoading(message)
			{
				// Show message
				var message = formWrapper.message('<strong>'+message+'</strong>', {
					append: false,
					arrow: 'bottom',
					classes: ['blue-gradient', 'align-center'],
					stripes: true,
					darkStripes: false,
					closable: false,
					animate: false					// We'll do animation later, we need to know the message height first
				});

				// Vertical centering (where we need the message height)
				centerForm(currentForm, true, 'fast');

				// Watch for closing and show with effect
				message.bind('endfade', function(event)
				{
					// This will be called once the message has faded away and is removed
					centerForm(currentForm, true, message.get(0));

				}).hide().slideDown('fast');
			};

			function displayValid(message)
			{
				// Show message
				var message = formWrapper.message('<strong>'+message+'</strong>', {
					append: false,
					arrow: 'bottom',
					classes: ['green-gradient', 'align-center'],
					animate: false					// We'll do animation later, we need to know the message height first
				});

				// Vertical centering (where we need the message height)
				centerForm(currentForm, true, 'fast');

				// Watch for closing and show with effect
				message.bind('endfade', function(event)
				{
					// This will be called once the message has faded away and is removed
					centerForm(currentForm, true, message.get(0));

				}).hide().slideDown('fast');
			};
		});

		

	</script>	

	<?php
	if (isset($show_register)) {
		 if ($show_register) {
			echo "
			<script>
			$(document).ready(function(){
				$('a#form-register').trigger('click');
				formWrapper.clearMessages();
				displayError('Compte déjà existant');
			});
			</script>
			";
		}
	}
	 ?>
</body>
</html>
