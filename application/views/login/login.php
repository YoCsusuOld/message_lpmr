<header>
    <div class="row">
      <div class="twelve columns">
        <h2>eMessage L3PMRES</h2>
      </div>
    </div>
  </header>

  <div class="row">
  	<div class="twelve columns">

  		<?=$this->session->flashdata('error')?>
  		
		<ul class="accordion">


            <li <?if (isset($active)) {if ($active=='connexion') {echo'class="active"';}}?>>
              <div class="title">
                <h5>Connexion</h5>
              </div>
              <div class="content">
                <?=form_open('login/connexion')?>
		  			<input type="text" name="login" id="login" value="" placeholder="Identifiant">
					<input type="password" name="pass" id="pass" value="" placeholder="Mot de passe">

					<button class="button twelve" type="submit">Connexion</button>
		  		<?=form_close()?>
            	</div>
            </li>
            
            <li <?if (isset($active)) {if ($active=='oubli_password') {echo'class="active"';}}?>>
              <div class="title">
                <h5>Oubli de votre mot de passe</h5>
              </div>
              <div class="content">
                <?=form_open('login/oubli_pass')?>
		  			<input type="text" name="email" id="email" value="" placeholder="Votre adresse e-mail">
		  			<?=form_error('email')?>
					<button class="button twelve" type="submit">Récupérer mon mot de passe</button>
		  		<?=form_close()?>
              </div>
            </li>



            <li <?if (isset($active)) {if ($active=='inscription') {echo'class="active"';}}?>>
              <div class="title">
                <h5>Inscription</h5>
              </div>
              <div class="content">
                <?=form_open('login/inscription')?>
		  			<input type="text" name="name" id="name" value="" placeholder="Votre nom">
		  			<input type="text" name="mail" id="mail" value="" placeholder="Votre adresse email">
		  			<input type="text" name="login" id="login" value="" placeholder="Votre nom d'utilisateur">
		  			<input type="password" name="pass" id="pass" value="" placeholder="Votre mot de passe">
					<button class="button twelve" type="submit">M'inscrire</button>
		  		<?=form_close()?>
              </div>
            </li>
          </ul>

  	</div>
  </div>

			


