<?php ob_start(); ?>
<?php if(isset($_SESSION['error']))
{ ?>
	<div class="error"><h3>
		<i class="fa fa-info"></i> 
		<?= $_SESSION['error']; ?>
	</h3></div>
	<?php } ?>

	<div class="content_top">
		<div class="wrap">
			<h3>Derniers produits</h3>
		</div>
		<div class="line"></div>
		<div class="wrap">
			<div class="ocarousel_slider">  
				<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
					<div class="ocarousel_window">
						<?php while ($item = $lastProd->fetch_array()) { ?>
						<a href="product/?souscat=<?= $item['idSousCategorie']; ?>&mat=<?php echo $item['idMateriel']; ?>" title="img1"> <img style="width: 100px; height: 100px;" src="<?= $item['cheminImage']; ?>" alt="" /><p><?= trunque($item['libelle'], 20); ?></p></a>
						<?php } ?>
					</div>
					<span>
						<a href="#" data-ocarousel-link="left" style="float: left;" class="prev"> </a>
						<a href="#" data-ocarousel-link="right" style="float: right;" class="next"> </a>
					</span>
				</div>
			</div>  
		</div>    		
	</div>
	<div class="content_bottom">
		<div class="wrap">
			<div class="content-bottom-left">
				<!-- Menu side (gauche) -->
				<div class="categories">
					<ul>
						<h3>Toutes les catégories</h3>
						<?php while ($item = $getCat->fetch_array()) { ?>
						<li><a href="choice/?cat=<?php echo $item ['idCategorie']; ?>"><?php echo $item['libelle']; ?></a></li>
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
					<img src="content/images/computer.png" alt="" />
					<div class="banner-desc">
						<h4>Aide</h4>
						<a href="/2014-musichall/help">Cliquez ici</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="add-banner add-banner2">
					<img src="content/images/computer.png" alt="" />
					<div class="banner-desc">
						<h4>Informations</h4>
						<a href="/2014-musichall/infos">Cliquez ici</a>
					</div>
					<div class="clear"></div>
				</div> 
			</div>

			<!-- Contenu de droite -->
			<div class="content-bottom-right">
				<h3>Toutes les catégories</h3>
				<!-- Boucle (à coder) des BOX de produits de TOUTES catégories (au random par ex...) -->
				<div class="section group">
					<?php while ($item = $randomProd->fetch_array()) { ?>
					<div class="grid_1_of_4 images_1_of_4">
						<h4><a href="product/?souscat=<?= $item['idSousCategorie']; ?>&mat=<?php echo $item['idMateriel']; ?>"><?= trunque($item['libelle'], 20); ?></a></h4>
						<a href="product/?souscat=<?= $item['idSousCategorie']; ?>&mat=<?php echo $item['idMateriel']; ?>"><img src="<?= $item['cheminImage']; ?>" alt="" /></a>
						<div class="price-details">
							<div class="price-number">
								<p><span class="rupees"><?= $item['prixAchHT']; ?>€</span></p>
							</div>
							<div class="add-cart">								
								<h4><a href="product/?souscat=<?= $item['idSousCategorie']; ?>&mat=<?php echo $item['idMateriel']; ?>">Plus d'infos</a></h4>
							</div>
							<div class="clear"></div>
						</div>					 
					</div>
					<?php } ?>
				</div>
				<!-- Partie d'articles divers (remplissages) -->
				<div class="product-articles">
					<h3>Toutes les catégories</h3>
					<ul>
						<li>
							<div class="article">
								<p><span>Aenean vitae massa dolor</span></p>
								<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
								<p><a href="#">+ Lire la suite</a></p>
							</div>
						</li>
						<li>
							<div class="article">
								<p><span>Phasellus sollicitudin consectetur</span></p>
								<p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
								<p><a href="#">+ Lire la suite</a></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<?php
	$contenu = ob_get_clean(); 
	if(isset($_SESSION['error']))
	{
		unset($_SESSION['error']);
	}
	?>
