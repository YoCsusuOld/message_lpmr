			<?php 
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