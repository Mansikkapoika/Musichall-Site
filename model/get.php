<?php
require_once 'model.php';

class Get extends Model {

	public function echapVar($ovar)
	{
		return $this -> getBdd() -> real_escape_string($ovar);
	}

	public function getSousMenus()
	{
		return $resultat = $this->getBdd()->query("SELECT * FROM souscategorie");
	}

	public function getCat()
	{
		return $this->getBdd()->query("SELECT * FROM categorie");
	}

	public function getCatSelect($id)
	{
		return $this->getBdd()->query("SELECT * FROM categorie WHERE idCategorie ='$id'");
	}

	public function getSousCat($id)
	{
		return $this->getBdd()->query("SELECT * FROM souscategorie WHERE idCategorie ='$id'");
	}

	public function getMateriel()
	{
		
	}

	public function getMaterielSelect($id)
	{
		return $this->getBdd()->query("SELECT * FROM materiel WHERE idSousCategorie='$id'");
	}

}