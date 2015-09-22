<?php
require_once 'model.php';

class Admin extends Model {

	public function echapVar($ovar)
	{
		return $this -> getBdd() -> real_escape_string($ovar);
	}

	public function VerifCat($nom)
	{
		return $this -> getBdd() -> query("SELECT * FROM categorie WHERE libelle ='$nom'") -> fetch_array();
	}

	public function AddCat($nom)
	{
		return $this -> getBdd() -> query("INSERT INTO categorie VALUES ('', '$nom')");
	}

	public function VerifSousCat($nom)
	{
		return $this -> getBdd() -> query("SELECT * FROM souscategorie WHERE libelle ='$nom'") -> fetch_array();
	}

	public function AddSousCat($nom,$idCat)
	{
		return $this -> getBdd() -> query ("INSERT INTO souscategorie VALUES ('', '$nom', '$idCat')");
	}

}