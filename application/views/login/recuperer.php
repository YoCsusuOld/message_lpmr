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
  		
        <?=form_open('login/modif_passwrd')?>
			<input type="password" name="login" id="login" value="" placeholder="Nouveau mot de passe">
			<input type="password" name="pass" id="pass" value="" placeholder="Confirmation mot de passe">

			<button class="button twelve" type="submit">Connexion</button>
  		<?=form_close()?>

  	</div>
  </div>

			