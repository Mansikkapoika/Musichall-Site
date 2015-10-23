<?php
require_once 'model.php';

class mCommand extends Model {

	// Variables des quantités à faire plus tard, on fera avec un seul produit pour l'instant
	public function addCommand($idUtilisateur)
	{
		$this->getBdd()->query("INSERT INTO Commande VALUES ('', '$idUtilisateur', NOW(), 'En cours');");
		$lastid = $this->getBdd()->insert_id;
		return $lastid;
	}


	// Insertion des produits à une commande ne fonction de son id
	public function insertCommand($ref,$idCommande)
	{
		$this->getBdd()->query("INSERT INTO ligneCom VALUES ('$ref', '$idCommande', '1');");
	}

	public function getCommand()
	{
		return $this->getBdd()->query("SELECT Commande.idCommande as idCommande, date, status, materiel.libelle as libelle, quantite
			FROM Commande
			INNER JOIN ligneCom ON Commande.idCommande = ligneCom.idCommande
			INNER JOIN materiel ON ligneCom.idMateriel = materiel.idMateriel
			WHERE idUtilisateur = 1 ");
	}

}