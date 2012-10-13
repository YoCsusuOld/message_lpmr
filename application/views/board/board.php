
<body class="clearfix with-menu with-shortcuts">


	<header role="banner" id="title-bar">
		<h2>Developr</h2>
	</header>

	<a href="#" id="open-menu"><span>Menu</span></a>

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

	<ul id="shortcuts" role="complementary" class="children-tooltip tooltip-right">
		<li class="current"><a class="shortcut-messages" title="Messages">Messages</a></li>
	</ul>

	<section id="menu" role="complementary">

		<div id="menu-content">

			<header>
				Administrator
			</header>

			<div id="profile">
				<img src='<?php echo img_url("user.png") ?>'width="64" height="64" alt="User name" class="user-icon">
				Bonjour
				<span class="name">Sullivan <b>RICHARD</b></span>
			</div>

			<ul id="access" class="children-tooltip">
				<li><a href="inbox.html" title="Messages"><span class="icon-inbox"></span><span class="count">20</span></a></li>
				<li><a href="login.html" title="Profile"><span class="icon-user"></span></a></li>
			</ul>
		</div>	

	</section>
	

