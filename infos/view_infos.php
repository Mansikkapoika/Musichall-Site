<?php ob_start(); ?>
<?php if(isset($_SESSION['error'])) { ?>
<div class="error"><h3>
	<i class="fa fa-info"></i> 
	<?= $_SESSION['error']; ?>
</h3></div>
<?php } ?>

<div class="content-bottom-right">
	<h3>Informations</h3>
</div>
<div class="section group">
	<div class="wrap">

		<div class="content-bottom-right">
			<div class="product-articles">
				<div class="article">
					<ul>
						<li>
							<p><span><i class="fa fa-shopping-cart"></i> Le magasin</span></p>
							<p>Le magasin Musichall est situé à LAVAL dans le département de la Mayenne (53). Son effectif est de 3 personnes. Ses clients sont principalement des amateurs, des professionnels ou des associations de musique. Music Hall est un multi-spécialiste musical, avec des instruments répartis en pôles dédiés à chaque famille instrumentale. Pour guitaristes, claviéristes ou percussionnistes, Music Hall vend toute sorte de matériel, également dans la sonorisation et l’éclairage.</p>
						</li>
						<li>
							<p><span><i class="fa fa-cart-arrow-down"></i> Les ventes</span></p>
							<p>Si vous recherchez un article en particulier, vous trouverez les catégories et sous-catégories des produits que vous recherchez dans les différents menus proposés en haut et à gauche de la page d'accueil. Tous les articles correspondants s'afficheront dans les résultats. Pour obtenir de meilleurs résultats, vous pouvez affiner votre recherche en choisissant dans les menus de derniers produits ou produits similaires.<br/>Vous pouvez ajouter des articles au panier sans connexions préalables mais un compte est requis pour commander.</p>
						</li>
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
	<h3>Informations</h3>
</div>

<div class="clear"></div>
</div>


<?php $contenu = ob_get_clean(); ?>