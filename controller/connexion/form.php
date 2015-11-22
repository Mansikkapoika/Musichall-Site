<?php

class ControleurConnexion {

	private $user;
	private $Dir;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) 
		{
			$this->Dir = '../../';
			require_once '../../model/user.php';
		}
		elseif(file_exists(getcwd().'/../model/model.php')) 
		{
			$this->Dir = '../';
			require_once '../model/user.php';
		}
		elseif(file_exists(getcwd().'/model/model.php'))
		{
			$this->Dir = '/';
			require_once 'model/user.php';
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
				header('Location: ../../');
			}
			else
			{
				$_SESSION['error'] = "Login ou mot de passe incorrect.";
				header('Location: ../../connexion/');
			}
		}
		else
		{
			$_SESSION['error'] = "Un des champs n'a pas été rempli.";
			header('Location: ../../2014-musichall/connexion/');
		}

	}

}