<?php ob_start(); ?>
<?php if(isset($_SESSION['error'])) { ?>
<div class="error"><h3>
	<i class="fa fa-info"></i> 
	<?= $_SESSION['error']; ?>
</h3></div>
<?php } ?>

<!-- Vue de la page des commandes en cours -->

<!-- Vue non complète : Requête et tableaux à améliorer... -->
<div class="tftable">


	<?php foreach ($tab as $tab1) { ?>
	<table border="1">
		<tr>
			<th>Commande n°</th>
			<th>Produit</th>
			<th>Quantité</th>
			<th>Date</th>
			<th>Status</th>
		</tr>
		<?php $tabMa = $this->mcommand->getMatCommand($tab1['idCommande']);
		foreach ($tabMa as $tabMat1) { ?>
		<tr>
			<td><?= $tabMat1['idCommande']; ?></td>
			<td><?= $tabMat1['libelle']; ?></td>
			<td><?= $tabMat1['quantite']; ?></td>
			<td><?= $tabMat1['date']; ?></td>
			<td><?= $tabMat1['status']; ?></td>
		</tr>
		<?php } ?>
	</table>
	Montant : <?= $tabMat1['montant']; ?> euros.<br /><br />
	<?php } ?>
</div>

<?php
$contenu = ob_get_clean(); 
if(isset($_SESSION['error']))
{
	unset($_SESSION['error']);
}
?>