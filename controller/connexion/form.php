<?php

class ControleurConnexion {

	private $user;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) {
			require_once getcwd().'/../../model/user.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			require_once getcwd().'/../model/user.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			require_once getcwd().'/model/user.php';
		}

		$this->user = new User();
	}

	public function Connexion($username,$password) {

		$ech_username = $this->user->echapVar($username);
		$password = $this->user->echapVar($password);

		$try = $this->user->getUser($ech_username);
		if($try['pseudo'] == $username && $try['password'] == md5($password)){
			session_start();
			$_SESSION['username'] = $ech_username;
			header('Location:/../Musichall');
		}
		else
		{
			$nom = $try['pseudo'];
			$blabla = md5($password);
			die("Login ou mot de passe incorrect.");
		}

	}

}