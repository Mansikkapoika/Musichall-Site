<?php
require_once 'model.php';

class Get extends Model {

	public function getMenus()
	{
		//return $resultat = $this->getBdd()->query("SELECT * FROM categorie");
		//return $resultat = $this->getBdd()->query("SELECT categorie.libelle as nomCat, souscategorie.libelle as nomSousCat FROM categorie INNER JOIN souscategorie ON souscategorie.idCategorie = categorie.idCategorie ORDER BY categorie.idCategorie ASC");
		return $this->getBdd()->query("SELECT categorie.libelle as nomCat, souscategorie.libelle as nomSousCat
			FROM categorie
			INNER JOIN unicat ON unicat.idCategorie = categorie.idCategorie
			INNER JOIN souscategorie ON souscategorie.idSousCategorie = unicat.idSousCategorie
			ORDER BY categorie.idCategorie ASC");
	}

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