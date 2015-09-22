<?php ob_start(); ?>

<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>Administration</h3>
			<div class="clear"></div>
			<div class="clear"></div>

			<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/admin/addCategorie/formclick_add.php">
				<u>Ajouter une catégorie</u> :<br /><br />
				Nom :
				<div class="clear"></div>
				<div>
					<input name="categorie" type="text" class="textbox textbox1" value="Nom de la catégorie" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom de la catégorie';}" >
				</div>
				<input type="hidden" name="form_AjoutCat" value="1" />
				<input type="submit" value="Submit" class="mybutton">
			</form>
			<div class="clear"></div><br /><hr><br />

			<u>Ajouter une sous-catégorie</u> :<br /><br />
			<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/admin/addCategorie/formclick_add.php">
				Catégorie parent :
				<div class="clear"></div>
				<div>
					<select name="categorieparent">
						<?php
						$ligne = $jeuenr -> fetch_assoc();
						while($ligne==true) 
						{ 
							$num=$ligne['idCategorie']; 
							$nom=$ligne['nomCat']; 
							echo "<option selected value='$num'>$nom</option>"; 
							$ligne = $jeuenr -> fetch_assoc(); } ?>
							<div class="clear"></div>
						</select>
					</div>
					<div class="clear"></div>
					Nom :
					<div class="clear"></div>
					<div>
						<input name="souscategorie" type="text" class="textbox textbox1" value="Nom de la sous-catégorie" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom de la sous-catégorie';}" >
						<div class="clear"></div>
					</div>
					<input type="hidden" name="form_AjoutSousCat" value="1" />
					<input type="submit" value="Submit" class="mybutton">
				</form>
				<div class="clear"></div><div class="clear"></div>
				<div class="clear"></div><hr><br />

				<u>Ajouter un article</u> :<br /><br />
				<div class="add-cart">								
					<h4><a href="preview.html">Ajouter un article</a></h4>
					<div class="clear"></div>
				</div>
				<div class="add-cart">								
					<h4><a href="preview.html">Modifier un article</a></h4>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>

				<u>Supprimer un article</u> :<br /><br />
				<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/admin/article/supp_formclick.php">
					Nom :
					<div class="clear"></div>
					<div>
						<input name="souscategorie" type="text" class="textbox textbox1" value="Nom de l'article" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom de l'article';}" >
						<div class="clear"></div>
					</div>
					<input type="hidden" name="form_delArticle" value="1" />
					<input type="submit" value="Submit" class="mybutton">
				</form><div class="clear"></div><div class="clear"></div>
				
			</div>
		</div>		
	</div> 
</div>

<?php $contenu = ob_get_clean(); ?>