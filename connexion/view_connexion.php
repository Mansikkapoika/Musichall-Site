<?php ob_start(); ?>

<!-- Vue de la page de connexion -->
<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>Connexion</h3>
			<div class="clear"></div>

			<!-- Formulaire de connexion... -->
			<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/connexion/formclick.php">
				Pseudo :
				<div>
					<input name="username" type="text" class="textbox textbox1" value="Pseudo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pseudo';}" >
				</div>
				<div class="clear"></div>
				Mot de passe :
				<div>
					<input name="userpassword" type="password" class="textbox textbox1" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe';}" >
					<div class="clear"></div>
				</div>
				<input type="submit" value="Submit" class="mybutton">
			</form>

			<div>

				<div class="clear"></div>
			</div>
		</form>
	</div>
</div>		
</div> 
</div>

<?php $contenu = ob_get_clean(); ?>