<?php

class controleurConnexion {

	private $Dir;
	private $user;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) {
			$this->Dir = getcwd().'/../../';
			require_once getcwd().'/../../model/user.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			$this->Dir = getcwd().'/../';
			require_once getcwd().'/../model/user.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			$this->Dir = getcwd().'/';
			require_once getcwd().'/model/user.php';
		}

		$this->user = new User();
	}

	public function afficheConnexion() {
		$titre = 'Music Hall';
		$position = 'Connexion';

		// Vérification admin
		if (isset($_SESSION['username'])) {
			$username = $this->user->echapVar($_SESSION['username']);
			$reqAdmin = $this->user->getSecu(1, $username);
			$reqAccess = $reqAdmin -> fetch_array();
			if ($reqAccess['codeSecu'] == 3)
			{
				$access = true;
			}
			else
			{
				$access = false;
			}
		}

	if (isset($_SESSION['username']))      // Si connecté
	{
		require_once $this->Dir.'404/view_alreadyconnect.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'connexion/view_connexion.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}