<?php ob_start(); ?>

<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>S'enregistrer</h3>
			<div class="clear"></div>

			<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/register/formclick.php">
				Nom :
				<div>
					<input name="usernom" type="text" class="textbox textbox1" value="Nom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom';}" >
					<div class="clear"></div>
				</div>
				Prénom :
				<div>
					<input name="userprenom" type="text" class="textbox textbox1" value="Prénom" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Prénom';}" >
					<div class="clear"></div>
				</div>
				Pseudo :
				<div>
					<input name="username" type="text" class="textbox textbox1" value="Pseudo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pseudo';}" >
					<div class="clear"></div>
				</div>
				Email :
				<div>
					<input name="useremail" type="text" class="textbox textbox1" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<div class="clear"></div>
				</div>
				Mot de passe :
				<div>
					<input name="userpassword" type="password" class="textbox textbox1" value="Mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mot de passe';}" >
					<div class="clear"></div>
				</div>
				Confirmer le mot de passe :
				<div>
					<input name="userpassconfirm" type="password" class="textbox textbox1" value="Confirmer mot de passe" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirmer mot de passe';}" >
					<div class="clear"></div>
				</div>
				Newsletter :
				<div>
					<input type="radio" name="newsletter" value="1"> Oui<br />
					<input type="radio" name="newsletter" value="0"> Non
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