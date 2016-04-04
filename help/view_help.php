<?php ob_start(); ?>
<?php if(isset($_SESSION['error'])) { ?>
<div class="error"><h3>
	<i class="fa fa-info"></i> 
	<?= $_SESSION['error']; ?>
</h3></div>
<?php } ?>

<div class="content-bottom-right">
	<h3>Aide</h3>
</div>
<div class="section group">
	<div class="wrap">

		<div class="content-bottom-right">
			<div class="product-articles">
				<div class="article">
					<ul>
						<li>
							<p><span><i class="fa fa-book"></i> Votre compte - Vos commandes</span></p>
							<p>Vous pourrez via votre compte commander des articles, vous recevrez ceux-ci à l'adresse indiquée à l'inscription après validation de votre commande.<br/>Si vous avez changé d'adresse, utilisez une nouvelle adresse e-mail ou souhaitez modifier votre mot de passe, vous pouvez mettre à jour ces informations dans la page de Gesion de compte.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="content-bottom-right">
	<h3>Aide</h3>
</div>

<div class="clear"></div>
</div>


<?php $contenu = ob_get_clean(); ?>