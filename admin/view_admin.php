<?php ob_start(); ?>

<div class="wrap">
	<div class="preview-page">
		<div class="contact-form">
			<h3>Administration</h3>
			<div class="clear"></div>
			<div class="clear"></div>

			<!-- Partie d'ajout d'une catégorie -->

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

			<!-- Partie d'ajout d'une sous-catégorie -->

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
							$nom=$ligne['libelle']; 
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

				<!-- Partie de gestion des commentaires (pointe vers une autre page) -->

				<u>Gestion des commentaires</u> :<br /><br />
				<div class="add-cart">								
					<h4><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/admin/commentaires">Gérer les commentaires</a></h4>
					<div class="clear"></div>
				</div>
				<div class="clear"></div><div class="clear"></div>
				<div class="clear"></div><hr><br />

				<!-- Partie de gestion des utilisateurs (pointe vers une autre page) -->

				<u>Gestion des utilisateurs</u> :<br /><br />
				<div class="add-cart">								
					<h4><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/admin/#">Gérer les utilisateurs</a></h4>
					<div class="clear"></div>
				</div>
				
			</div>
		</div>		
	</div> 
</div>

<?php $contenu = ob_get_clean(); ?>