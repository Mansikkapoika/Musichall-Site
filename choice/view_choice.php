<?php ob_start(); ?>
<?php if(isset($_SESSION['error']))
{ ?>
	<div class="error"><h3>
		<i class="fa fa-info"></i> 
		<?= $_SESSION['error']; ?>
	</h3></div>
	<?php } ?>

	<div class="content_bottom">
		<div class="wrap">
			<div class="content-bottom-left">
				<!-- Menu side (gauche) -->
				<div class="categories">
					<ul>
						<h3>Toutes les catégories</h3>
						<?php while ($itemCat = $getCat->fetch_array()) { ?>
						<li><a href="?cat=<?php echo $itemCat ['idCategorie']; ?>"><?php echo $itemCat['libelle']; ?></a></li>
						<?php } ?>
						<li><a href="#">Promotions</a></li>
					</ul>
				</div>		
				<div class="buters-guide">
					<h3>Guides d'achats</h3>
					<p><span>Ne vous trompez plus !</span></p>	
					<p>Parcourez la page d'aide pour trouver les réponses à toutes vos questions. </p>
				</div>	
				<div class="add-banner">
					<img src="../content/images/computer.png" alt="" />
					<div class="banner-desc">
						<h4>Aide</h4>
						<a href="#">Cliquez ici</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="add-banner add-banner2">
					<img src="../content/images/computer.png" alt="" />
					<div class="banner-desc">
						<h4>Informations</h4>
						<a href="/2014-musichall/infos">Cliquez ici</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			<!-- Contenu de droite -->
			<?php 
			if ($artiveChoix) { ?>
			<!-- Test des variables GET : Si nous sommes sur une seule action, nous avons seulement cliqué sur une catégorie. Affichage des sous-catégories de celle-ci -->
			<div class="content-bottom-right">
				<!-- Ouverture de l'encadré adapté à la boucle d'affichage des sous-catégories -->
				<h3>Toutes les sous-catégories - <?php echo $getCatSelect['libelle']; ?></h3>
				<div class="section group">
					<!-- Boucle d'affichage des BOX des sous-catégories -->
					<?php while ($itemSousCat = $getSousCat->fetch_array()) { ?>
					<div class="grid_1_of_4 images_1_of_4">
						<h4><a href="?cat=<?php echo $getCatSelect['idCategorie']; ?>&souscat=<?php echo $itemSousCat['idSousCategorie']; ?>"><?php echo $itemSousCat['libelle']; ?></a></h4>
						<a href="?cat=<?php echo $getCatSelect['idCategorie']; ?>&souscat=<?php echo $itemSousCat['idSousCategorie']; ?>"><img src="../content/images/cat_img.jpg" alt="" /></a>
						<div class="price-details">
							<div class="add-cart">								
								<h4><a href="?cat=<?php echo $getCatSelect['idCategorie']; ?>&souscat=<?php echo $itemSousCat['idSousCategorie']; ?>">Voir les produits</a></h4>
							</div>
							<div class="clear"></div>
						</div>					 
					</div>
					<?php } ?>
				</div>
				<!-- Fermeture de l'encadré adapté à la boucle d'affichage des sous-catégories -->
				<div class="product-articles">
					<h3>Toutes les sous-catégories - <?php echo $getCatSelect['libelle']; ?></h3>
					<?php
				}
			else 		// Sinon, si on a une deuxième action (les sous catégories) : Afficher les produits
			{ 
				$getSousCat = $getSousCat->fetch_array(); ?>
				<div class="content-bottom-right">
					<!-- Ouverture de l'encadré adapté à la boucle d'affichage des PRODUITS des sous-catégories -->
					<h3>Tous les produits - <?php echo $getCatSelect['libelle']." :: ".$titreSC['libelle']; ?></h3>
					<div class="section group">
						<!-- Boucle d'affichage des BOX des PRODUITS des sous-catégories -->
						<?php 
						if ($getMaterielSelect->num_rows <= 0) { ?>
						<br />
						<i class="fa fa-info"></i> Il n'y a aucuns produits dans cette catégorie.
						<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
						<?php } while ($itemMateriel = $getMaterielSelect->fetch_array()) { ?>
						<div class="grid_1_of_4 images_1_of_4">
							<h4><a href="../product/?souscat=<?php echo $idSousCat; ?>&mat=<?php echo $itemMateriel['idMateriel']; ?>"><?php echo $itemMateriel['libelle']; ?></a></h4>
							<a href="../product/?souscat=<?php echo $idSousCat; ?>&mat=<?php echo $itemMateriel['idMateriel']; ?>"><img style="width: 100px; height: 100px;" src="../<?= $itemMateriel['cheminImage']; ?>" alt="" /></a>
							<div class="price-details">
								<div class="add-cart">								
									<h4><a href="../product/?souscat=<?php echo $idSousCat; ?>&mat=<?php echo $itemMateriel['idMateriel']; ?>">Voir le produit</a></h4>
								</div>
								<div class="clear"></div>
							</div>					 
						</div>
						<?php } ?>

					</div>
					<!-- Fermeture de l'encadré adapté à la boucle d'affichage des PRODUITS des sous-catégories -->
					<div class="product-articles">
						<h3>Tous les produits - <?php echo $getCatSelect['libelle']." :: ".$titreSC['libelle']; ?></h3>
						<?php } ?>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<?php $contenu = ob_get_clean(); ?>