<?php ob_start(); ?>

<!-- Vue de la page lorsque quelqu'un n'est pas connecté -->
<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>Non connecté</h3>
			<div class="clear"></div>
			Vous n'êtes pas connecté.
			<div class="clear"></div>
		</div>
	</div>		
</div> 
</div>

<?php $contenu = ob_get_clean(); ?>