<?php ob_start(); ?>

<div class="content_top">
	<div class="wrap">
		<h3>Derniers produits</h3>
	</div>
	<div class="line"> </div>
	<div class="wrap">
		<div class="ocarousel_slider">  
			<div class="ocarousel example_photos" data-ocarousel-perscroll="3">
				<div class="ocarousel_window">
					<a href="#" title="img1"> <img src="content/images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
					<a href="#" title="img2"> <img src="content/images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
					<a href="#" title="img3"> <img src="content/images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
					<a href="#" title="img4"> <img src="content/images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
					<a href="#" title="img5"> <img src="content/images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
					<a href="#" title="img6"> <img src="content/images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
					<a href="#" title="img1"> <img src="content/images/latest-product-img1.jpg" alt="" /><p>Nuncvitae</p></a>
					<a href="#" title="img2"> <img src="content/images/latest-product-img2.jpg" alt="" /><p>Suspendiss</p></a>
					<a href="#" title="img3"> <img src="content/images/latest-product-img3.jpg" alt="" /><p>Phasellus ferm</p></a>
					<a href="#" title="img4"> <img src="content/images/latest-product-img4.jpg" alt="" /><p>Veldignissim</p></a>
					<a href="#" title="img5"> <img src="content/images/latest-product-img5.jpg" alt="" /><p>Aliquam interd</p></a>
					<a href="#" title="img6"> <img src="content/images/latest-product-img6.jpg" alt="" /><p>Sapien lectus</p></a>
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
					<li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/choice/?cat=<?php echo $item ['idCategorie']; ?>"><?php echo $item['libelle']; ?></a></li>
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
					<a href="#">Cliquez ici</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- <div class="add-banner add-banner2">
				<img src="content/images/computer.png" alt="" />
				<div class="banner-desc">
					<h4>Computers</h4>
					<a href="#">More Info</a>
				</div>
				<div class="clear"></div>
			</div> -->
		</div>

		<!-- Contenu de droite -->
		<div class="content-bottom-right">
			<h3>Toutes les catégories</h3>
			<!-- Boucle (à coder) des BOX de produits de TOUTES catégories (au random par ex...) -->
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img1.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img4.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img1.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img4.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img1.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href="preview.html"><img src="content/images/product-img4.jpg" alt="" /></a>
					<div class="price-details">
						<div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
						</div>
						<div class="add-cart">								
							<h4><a href="preview.html">More Info</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
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

<?php $contenu = ob_get_clean(); ?>
