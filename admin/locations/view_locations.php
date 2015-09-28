<?php ob_start(); ?>

<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>Administration - Gestion des locations</h3>
			<div class="clear"></div>
			<div class="clear"></div>

			<div class="add-cart">								
				<h4><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/admin/locations">Les demandes de location</a></h4>
				<div class="clear"></div>
			</div>
			<div class="clear"></div><hr>
			<div class="clear"></div>
			<div class="add-cart">								
				<h4><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/admin/locations">Les locations en cours</a></h4>
				<div class="clear"></div>
			</div>
		</div>
	</div>		
</div> 
</div>

<?php $contenu = ob_get_clean(); ?>