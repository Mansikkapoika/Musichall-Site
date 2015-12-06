<?php
require_once 'model.php';

class Get extends Model {

	// Fonction d'échappement de variables (pour les requêtes SQL)
	public function echapVar($ovar)
	{
		return $this -> getBdd() -> real_escape_string($ovar);
	}

	// Fonction pour récupérer toutes les sous-catégories
	public function getSousMenus()
	{
		return $resultat = $this->getBdd()->query("SELECT * FROM souscategorie");
	}

	// Fonction pour récupérer toutes les catégories
	public function getCat()
	{
		return $this->getBdd()->query("SELECT * FROM categorie");
	}

	// Fonction pour récupérer une catégorie en particulier
	public function getCatSelect($id)
	{
		return $this->getBdd()->query("SELECT * FROM categorie WHERE idCategorie ='$id'");
	}

	// Fonction pour récupérer une sous catégorie en particulier
	public function getSousCat($id)
	{
		return $this->getBdd()->query("SELECT * FROM souscategorie WHERE idCategorie ='$id'");
	}

	public function getTitreSousCat($id)
	{
		return $this->getBdd()->query("SELECT libelle FROM souscategorie WHERE idSousCategorie ='$id'");
	}

	// Fonction pour récupérer tous les produits
	public function getMateriel()
	{
		return $this->getBdd()->query("SELECT * FROM materiel");
	}

	// Fonction pour récupérer un produit en particulier (via sa catégorie)
	public function getMaterielSelect($id)
	{
		return $this->getBdd()->query("SELECT * FROM materiel WHERE idSousCategorie='$id'");
	}

	// Fonction pour récupérer un matériel en particulier à l'aide de sa sous-catégorie
	public function getInfoMateriel($idSouscat,$idMat)
	{
		return $this->getBdd()->query("SELECT * FROM materiel WHERE idMateriel = '$idMat' AND idSousCategorie='$idSouscat'");
	}


}