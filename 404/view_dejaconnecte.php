<?php ob_start(); ?>

<!-- Vue de la page lorsque quelqu'un est déjà connecté -->
<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>Déjà connecté</h3>
			<div class="clear"></div>
			Vous êtes déjà connecté.
			<div class="clear"></div>
		</div>
	</div>		
</div> 
</div>

<?php $contenu = ob_get_clean(); ?>