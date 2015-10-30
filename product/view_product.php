<?php ob_start(); ?>

<div class="wrap">
	<div class="preview-page">
		<div class="section group">
			<div class="cont-desc span_1_of_2">
				<ul class="back-links">
					<li><a href="#">Accueil</a> ::</li>
					<li><a href="#">Produit</a> :: </li>
					<li><?= $getMat['libelle']; ?></li>
					<div class="clear"> </div>
				</ul>
				<!-- Page d'affichage d'un produit -->
				<div class="product-details">
					<!-- Images du produit -->
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-small-img1.png" />
									<img class="etalage_source_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-large-img1.jpg" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-small-img2.png"  />
								<img class="etalage_source_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-large-img2.jpg" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-small-img3.png"  />
								<img class="etalage_source_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-large-img3.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-small-img4.png" />
								<img class="etalage_source_image" src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/preview-large-img4.jpg" />
							</li>
						</ul>
					</div>
					<!-- Informations sur le produit -->
					<div class="desc span_3_of_2">
						<h2><?= $getMat['libelle']; ?></h2>
						<p><?= $getMat['description']; ?></p>					
						<div class="price">
							<p>Prix: <span><?= $getMat['prixAchHT']; ?>€</span></p>
							<!-- S'il y a un prix de location, on l'affiche -->
							<?php if (isset($prixLoca)) {?><p>Prix de location: <span><?= $getMat['prixAchHT']; ?>€</span></p> <?php } else {} ?>
							</div>
							<div class="available">
								<ul>
									<li><span>Modèle:</span> &nbsp; <?= $getMat['Modele']; ?></li>
									<li><span>Marque:</span> &nbsp; <?= $getMat['Marque']; ?></li>
									<li><span>Fournisseur:</span>&nbsp; <?= $getMat['Fournisseur']; ?></li>
								</ul>
							</div>
							<div class="share-desc">
								<!-- Début formulaire (passage de la ref et de la quantité) -->
								<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/panier/formclick.php">
									<div class="share">
										<p>Nombre d'unités :</p><input type="number" class="text_box" type="text" name="quantite" value="1" min="1" max="50" />				
									</div>
									<!-- Référence ici pour la passer dans le controleur du formulaire -->
									<input type="hidden" name="reference" value="<?= $getMat['idMateriel']; ?>" />
									<div class="input"><input type="submit" value="Ajouter au panier"></div>
								</form>			
								<div class="clear"></div>
							</div>
							<div class="wish-list">
								<ul>
									<li class="wish"><a href="#">Ajouter aux souhaits</a></li>
									<li class="compare"><a href="#">Ajouter aux comparaisons</a></li>
								</ul>
							</div>
							<div class="colors-share">
								<div class="color-types">
									<h4>Couleurs disponibles</h4>
									<form class="checkbox-buttons">
										<ul>
											<li><input id="r1" name="r1" type="radio"><label for="r1" class="grey"> </label></li>
											<li><input id="r2" name="r1" type="radio"><label for="r2" class="blue"> </label></li>
											<li><input id="r3" name="r1" type="radio"><label class="white" for="r3"> </label></li>
											<li><input id="r4" name="r1" type="radio"><label class="black" for="r4"> </label></li>
										</ul>
									</form>
								</div>
								<div class="social-share">
									<h4>Partager le produit</h4>
									<ul>
										<li><a class="share-face" href="#"> </a></li>
										<li><a class="share-twitter" href="#"> </a></li>
										<li><a class="share-google" href="#"> </a></li>
										<li><a class="share-rss" href="#"> </a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="product_desc">	
						<div id="horizontalTab">
							<ul class="resp-tabs-list">
								<li>Spécifications</li>
								<li>Commentaires</li>
								<div class="clear"></div>
							</ul>
							<div class="resp-tabs-container">
								<div class="product-specifications">
									<ul>
										<li><span class="specification-heading">Body type</span> <span>Metal</span><div class="clear"></div></li>
										<li><span class="specification-heading">Spin Speed (rpm)</span> <span>0/400/800/1000/1200</span><div class="clear"></div></li>
										<li><span class="specification-heading">Machine weight (kg)</span> <span>75</span><div class="clear"></div></li>
										<li><span class="specification-heading">Wash System</span> <span>Tumble wash</span><div class="clear"></div></li>
										<li><span class="specification-heading">Door diameter (mm)</span> <span>300</span><div class="clear"></div></li>
										<li><span class="specification-heading">Dimensions (w*d*h) without packing</span> <span>595x595x850</span><div class="clear"></div></li>
										<li><span class="specification-heading">Power Supply</span> <span>230V, 50Hz, 16Amps</span><div class="clear"></div></li>
										<li><span class="specification-heading">Motor (Watts)</span> <span>440 for Wash/490 for Spin</span><div class="clear"></div></li>
										<li><span class="specification-heading">Drum basket</span> <span>stainless steel</span><div class="clear"></div></li>
										<li><span class="specification-heading">Adjustable Feet</span> <span>4 </span><div class="clear"></div></li>
									</ul>
								</div>

								<div class="review">
									<div class="your-review">
										<h4>Vous voulez donner un avis sur ce produit ?</h4>
										<p>Envoyez votre avis ?</p>
										<form>
											<div>
												<span><label>Pseudo<span class="red">*</span></label></span>
												<span><input type="text" value=""></span>
											</div>
											<div><span><label>Résumé de votre avis<span class="red">*</span></label></span>
												<span><input type="text" value=""></span>
											</div>						
											<div>
												<span><label>Avis<span class="red">*</span></label></span>
												<span><textarea> </textarea></span>
											</div>
											<div>
												<span><input type="submit" value="ENVOYER L'AVIS"></span>
											</div>
										</form>
									</div>			
									<script type="text/javascript">
										/* place inside document ready function */
										$(".rating").starRating({
										  minus: true // step minus button
										});
									</script>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="rightsidebar span_3_of_1 sidebar">
					<h3>Produits similaires</h3>
					<ul class="popular-products">
						<li>
							<h4><a href="preview.html">Produit similaire test </a></h4>
							<a href="preview.html"><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/product-img2.jpg" alt="" /></a>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
								</div>
								<div class="add-cart">								
									<h4><a href="preview.html">Plus d'infos</a></h4>
								</div>
								<div class="clear"></div>
							</div>					 
						</li>
						<li>
							<h4><a href="preview.html">Produit similaire test </a></h4>
							<a href="preview.html"><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/product-img3.jpg" alt="" /></a>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
								</div>
								<div class="add-cart">								
									<h4><a href="preview.html">Plus d'infos</a></h4>
								</div>
								<div class="clear"></div>
							</div>					 
						</li>
						<li>
							<h4><a href="preview.html">Produit similaire test </a></h4>
							<a href="preview.html"><img src="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/product-img4.jpg" alt="" /></a>
							<div class="price-details">
								<div class="price-number">
									<p><span class="rupees line-through">$899.95 </span> &nbsp; <span class="rupees">$839.93 </span></p>
								</div>
								<div class="add-cart">								
									<h4><a href="preview.html">Plus d'infos</a></h4>
								</div>
								<div class="clear"></div>
							</div>					 
						</li>
					</ul>


				</div>
			</div>
		</div>
	</div>
</div>

<?php $contenu = ob_get_clean(); ?>