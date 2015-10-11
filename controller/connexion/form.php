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
		if (isset($username) && isset($password))
		{
			if($try['pseudo'] == $username && $try['password'] == md5($password)){
				session_start();
				$_SESSION['username'] = $ech_username;
				$_SESSION['error'] = "Connexion réussie.";
				header('Location:/Musichall/');
			}
			else
			{
				$_SESSION['error'] = "Login ou mot de passe incorrect.";
				header('Location:/Musichall/connexion');
			}
		}
		else
		{
			$_SESSION['error'] = "Un des champs n'a pas été rempli.";
			header('Location:/Musichall/connexion');
		}

	}

}