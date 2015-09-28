<?php
require_once 'model.php';

class Get extends Model {

	public function getSousMenus()
	{
		return $resultat = $this->getBdd()->query("SELECT * FROM souscategorie");
	}

	public function getCat()
	{
		return $this->getBdd()->query("SELECT idCategorie, libelle as nomCat FROM categorie");
	}

	public function getSousCat($id)
	{
		return $this->getBdd()->query("SELECT sc.libelle as nomSousCat FROM souscategorie as sc
			INNER JOIN categorie as c ON c.idCategorie = sc.idCategorie
			WHERE c.idCategorie = $id");
	}

}