<?php
require_once 'model.php';

class User extends Model {

	public function echapVar($ovar)
	{
		return $this -> getBdd() -> real_escape_string($ovar);
	}

	public function getUser($username)
	{
		$resultat = $this -> getBdd() -> query("SELECT * FROM utilisateur WHERE pseudo = '$username'");
		$resultat = $resultat -> fetch_assoc();
		return $resultat;
	}

	public function addUser($nom,$prenom,$username,$email,$password,$newsletter)
	{
		$this->getBdd()->query("INSERT INTO utilisateur VALUES ('', '$nom', '$prenom', '$username', '$password', '$email', '', '', '', NOW(), $newsletter, 1)");
	}

	// A changer

	public function changePass($username,$password)
	{
		$this->getBdd()->query("UPDATE utilisateur SET password='$password' WHERE username='$username'");
	}

	public function changeEmail($username,$email)
	{
		$this->getBdd()->query("UPDATE utilisateur SET email='$email' WHERE username='$username'");
	}

}