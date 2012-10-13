<body>

	<div id="container">
		<hgroup id="login-title" class="large-margin-bottom">
	<h1 class="login-title-image">Suivis des messages</h1>
	<h5>&copy; L3pmres</h5>
</hgroup>

<div id="form-wrapper">

	<div id="form-block" class="scratch-metal">
		<div id="form-viewport">
			<?=$this->session->flashdata('error')?>
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

			<div id="form-switch">
				<span class="button-group">
					<?=anchor('login', 'Connexion', 'class="button anthracite-gradient blue-active active"');?>
					<?=anchor('login/oubli_password', 'Mot de passe perdu ?', 'class="button anthracite-gradient orange-active "');?>
					<?=anchor('login/inscription', 'Inscription', 'class="button anthracite-gradient green-active "');?>
				</span>
			</div>

			
		</div>
	</div>
</div>

	</div>

