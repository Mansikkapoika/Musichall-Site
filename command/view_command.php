<?php ob_start(); ?>
<?php if(isset($_SESSION['error']))
{ ?>
	<div class="error"><h3>
		<i class="fa fa-info"></i> 
		<?= $_SESSION['error']; ?>
	</h3></div>
	<?php } ?>

	<!-- Vue de la page des commandes en cours -->

	<!-- Vue non complète : Requête et tableaux à améliorer... -->
	<div class="tftable">
		<table border="1">
			<tr>
				<th>Commande n°</th>
				<th>Produit</th>
				<th>Quantité</th>
				<th>Date</th>
				<th>Status</th>
			</tr>
			<?php
			while ($tab1 = $tab->fetch_assoc()) { ?>
			<tr>
				<td><?= $tab1['idCommande']; ?></td>
				<td><?= $tab1['libelle']; ?></td>
				<td><?= $tab1['quantite']; ?></td>
				<td><?= $tab1['date']; ?></td>
				<td><?= $tab1['status']; ?></td>
			</tr>
			<?php } ?>

		</table>
	</div>

	<?php
	$contenu = ob_get_clean(); 
	if(isset($_SESSION['error']))
	{
		unset($_SESSION['error']);
	}
	?>