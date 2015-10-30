﻿<?php ob_start(); ?>
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
					<img src="../content/images/computer.png" alt="" />
					<div class="banner-desc">
						<h4>Aide</h4>
						<a href="#">Cliquez ici</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Contenu de droite -->
			<div class="content-bottom-right">
				<h3>Panier</h3>
				<!-- TABLEAU PANIER ICI -->

				<!--<?php if(isset($_POST['valide']))
				{
					$array = array();
					foreach ($_POST['test'] as $key => $value) {
						
						array_push($array, "$ _POST['test[".$key."]']");
						
					}
					$comma_separated = implode(",", $array);
					//print_r($comma_separated);
					
					echo "$ ctrl -> Command(".$comma_separated.");";
					echo "<br/>Nombre d'elem donc: ".count($array);

				} 
				?>-->

				<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/controller/command/formclick.php">
					<?php $total = 0;
					echo "<div class=\"tftable\">";
					echo "Votre panier <br/><br/>";
					echo "<TABLE border=1>";
					echo "<TR> <TH> Référence </TH>";
					echo "<TH> Désignation </TH>";
					echo "<TH> Prix </TH>";
					echo "<TH> Quantite </TH>";
					echo "<TH> Montant </TH>";
					echo "<TH> Actions </TH> </TR>";

					foreach ($Coll as $key=>$unProd)
						{ ?>
					<TR>
						<TD><?= $unProd->getRef(); ?></TD>
						<!--<input type="hidden" name="test[<?php echo $i; ?>]" value="<?= $unProd->getRef(); ?>">-->
						<TD><?= $unProd->getLib(); ?></TD>
						<TD><?= $unProd->getPrix(); ?></TD>
						<TD><a href='<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/panier/?ref=<?= $unProd->getRef(); ?>&action=diminuerProduit'><img src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/del_panier.png'/></a>  <?= $unProd->getQte(); ?>  <a href='<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/panier/?ref=<?= $unProd->getRef(); ?>&action=augmenterProduit'><img src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/add_panier.png'/></a></TD>
						<TD><?= $unProd->getQte()*$unProd->getPrix(); ?></TD>
						<TD><a href='<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/panier/?ref=<?= $unProd->getRef(); ?>&action=supprimerProduit'><img src='<?php $_SERVER['DOCUMENT_ROOT'] ?>/Musichall/content/images/supp_panier.png'/></a></TD>
					</TR>
					<?php } ?>
				</table></div>
				<input type="hidden" name="valide"><br />
				<input type="submit" value="Passer la commande"></form>


				<!-- Partie d'articles divers (remplissages) -->
				<div class="product-articles">
					<h3>Panier</h3>
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
