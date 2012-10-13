<body>

	<div id="container">
		<hgroup id="login-title" class="large-margin-bottom">
	<h1 class="login-title-image">Suivis des messages</h1>
	<h5>&copy; L3pmres</h5>
</hgroup>

<?=$this->session->flashdata('error')?>
<div id="form-wrapper">

	<div id="form-block" class="scratch-metal">
		<div id="form-viewport">

			<?=form_open('login/oubli_pass', 'id="form-password" class="input-wrapper orange-gradient glossy" title="Mot de passe oublié?"')?>

				<p class="message">
					Si vous avez perdu votre mot de passe, communiquez nous votre adresse e-mail et un nouveau mot de passe vous sera envoyé:
					<span class="block-arrow"><span></span></span>
				</p>

				<ul class="inputs black-input large">
					<li><span class="icon-mail mid-margin-right"></span><input type="email" name="mail" id="mail" value="" class="input-unstyled" placeholder="Votre e-mail" autocomplete="off"></li>
				</ul>

			<button type="submit" class="button glossy full-width" id="send-password">Envoyer nouveau mot de passe</button>

			<?=form_close()?>

			<div id="form-switch">
				<span class="button-group">
					<?=anchor('login', 'Connexion', 'class="button anthracite-gradient blue-active "');?>
					<?=anchor('login/oubli_password', 'Mot de passe perdu ?', 'class="button anthracite-gradient orange-active active"');?>
					<?=anchor('login/inscription', 'Inscription', 'class="button anthracite-gradient green-active "');?>
				</span>
			</div>


		</div>
	</div>
</div>

	</div>