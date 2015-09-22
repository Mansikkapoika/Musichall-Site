<?php

class ControleurRegister {

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

	public function Register($nom,$prenom,$username,$email,$password,$confirmpassword,$newsletter) {

		$nom = $this->user->echapVar($nom);
		$prenom = $this->user->echapVar($prenom);
		$username = $this->user->echapVar($username);
		$email = $this->user->echapVar($email);
		$password = $this->user->echapVar($password);
		$confirmpassword = $this->user->echapVar($confirmpassword);

		$try = $this->user->getUser($username);
		if ($password == $confirmpassword)
		{
			if ($username != $try['pseudo'])		// S'il n'existe pas déjà dans la DB
			{
				$this->user->addUser($nom,$prenom,$username,$email,md5($password),$newsletter);
				header('Location: /../');
			}
			else
			{
				$upperName = mb_strtoupper($username, 'UTF-8');
				echo "Le login $upperName est déjà utilisé.";
			}
		}
		else
		{
			echo "Les mots de passes ne sont pas identiques.";
		}

	}

}