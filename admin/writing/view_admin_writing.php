<?php ob_start(); ?>
<div id="newsContainer">

	<div id="titre">
		<center>ADMINISTRATION - GESTION DES PAGES</center>
	</div>
	<div class="seperator"></div>
	<div id="contenu">
		<?php 	if (isset($_SESSION['username'])) {
			if ($access) { ?>

			<INPUT TYPE="BUTTON" VALUE="Retour" onClick="history.back()"><br /><br />
				<center>
					<form method="post" action="<?php getcwd(); ?>/controller/admin/writing/formclick.php">
							Titre<br />
							<div class="seperator"></div><br />
							<input type="text" name="Titre" placeholder="TITRE" style="color: #7e5e5e;"><br /><br />
							Identifiant de lien unique<br /><br />
							<div class="seperator"></div><br />
							<input type="text" name="UniqueID" placeholder="Identifiant unique" style="color: #7e5e5e;"><br /><br />
							Contenu<br /><br />
							<div class="seperator"></div><br />
							<textarea id="Content" name="Content"></textarea>
							<script type="text/javascript">
							CKEDITOR.replace( 'Content' );
						</script><br />
						<input type="submit" value="Envoyer" />
				</form>
			</center>

			<?php } else { echo "Vous n'avez pas la permission d'accéder à cette page."; } 
		} else { echo "Vous <u>n'êtes pas connecté</u> ou/et n'avez pas la permission d'accéder à cette page."; } ?>

	</div>
</div>
<?php $contenu = ob_get_clean(); ?>
