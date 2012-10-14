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
			<input type="password" name="password1" id="password1" value="" placeholder="Nouveau mot de passe">
			<input type="password" name="password2" id="password2" value="" placeholder="Confirmation mot de passe">
      <input type="hidden" name="token" value="<?=$this->uri->segment(3)?>">

			<button class="button twelve" type="submit">Changer mon mot de passe</button>
  		<?=form_close()?>

  	</div>
  </div>

			