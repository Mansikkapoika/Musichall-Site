<?php ob_start(); ?>
<?php if(isset($_SESSION['error']))
{ ?>
	<div class="error"><h3>
		<i class="fa fa-info"></i> 
		<?= $_SESSION['error']; ?>
	</h3></div>
	<?php } ?>

	<!-- Vue de la page d'inscription -->
	<div class="wrap">
		<div class="preview-page">
			<div class="contact-form">
				<h3>S'enregistrer</h3>
				<div class="clear"></div>

				<!-- Formulaire d'inscription... -->
				<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/register/formclick.php">
					Nom : 
					<div>
						<input name="usernom" type="text" class="textbox textbox1" placeholder="Nom" required="required">
						<div class="clear"></div>
					</div>
					Prénom :
					<div>
						<input name="userprenom" type="text" class="textbox textbox1" placeholder="Prénom" required="required">
						<div class="clear"></div>
					</div>
					Pseudo :
					<div>
						<input name="username" type="text" class="textbox textbox1" placeholder="Pseudo" required="required">
						<div class="clear"></div>
					</div>
					Email :
					<div>
						<input name="useremail" type="text" class="textbox textbox1" placeholder="Email" required="required">
						<div class="clear"></div>
					</div>
					Mot de passe :
					<div>
						<input name="userpassword" type="password" class="textbox textbox1" placeholder="Mot de passe" required="required">
						<div class="clear"></div>
					</div>
					Confirmer le mot de passe :
					<div>
						<input name="userpassconfirm" type="password" class="textbox textbox1" placeholder="Confirmer mot de passe" required="required">
						<div class="clear"></div>
					</div>
					Newsletter :
					<div>
						<input type="radio" name="newsletter" value="1" required="required"> Oui<br />
						<input type="radio" name="newsletter" value="0" required="required"> Non
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

<?php
$contenu = ob_get_clean(); 
if(isset($_SESSION['error']))
{
	unset($_SESSION['error']);
}
?>