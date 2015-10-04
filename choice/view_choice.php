<?php ob_start(); ?>

<div class="content_bottom">
	<div class="wrap">
		<div class="content-bottom-left">
			<div class="categories">
				<ul>
					<h3>Toutes les catégories</h3>
					<?php while ($itemCat = $getCat->fetch_array()) { ?>
					<li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/choice/?cat=<?php echo $itemCat ['idCategorie']; ?>"><?php echo $itemCat['libelle']; ?></a></li>
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
					<a href="#">More Info</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- <div class="add-banner add-banner2">
				<img src="../content/images/computer.png" alt="" />
				<div class="banner-desc">
					<h4>Computers</h4>
					<a href="#">More Info</a>
				</div>
				<div class="clear"></div>
			</div> -->
		</div>

		<div class="content-bottom-right">
			<?php  ?>
			<h3>Toutes les sous-catégories - <?php echo $getNomCategorie['libelle']; ?></h3>
			<div class="section group">

				<?php while ($itemSousCat = $getSousCat->fetch_array()) { ?>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html"><?php echo $itemSousCat['nomSousCat']; ?></a></h4>
					<a href="preview.html"><img src="../content/images/product-img1.jpg" alt="" /></a>
					<div class="price-details">
						<div class="add-cart">								
							<h4><a href="preview.html">Voir les produits</a></h4>
						</div>
						<div class="clear"></div>
					</div>					 
				</div>
				<?php } ?>



			</div>
			<div class="product-articles">
				<h3>Toutes les sous-catégories - <?php echo $getNomCategorie['libelle']; ?></h3>
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

<?php $contenu = ob_get_clean(); ?>
