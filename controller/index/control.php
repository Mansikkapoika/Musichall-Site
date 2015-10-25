<?php

class controleurAccueil {

	private $Dir;
	private $get;
	private $user;

	public function __construct()
	{

		if(file_exists(getcwd().'/model/model.php')) {
			$this->Dir = getcwd().'/';
			require_once getcwd().'/model/get.php';
			require_once getcwd().'/model/user.php';
			require_once getcwd().'/Class/panier.class.php';
		}
		$this->get = new Get();
		$this->user = new User();

		session_start();
	}

	public function afficheAccueil() {

		$titre = 'Music Hall';
		$position = 'Accueil';

		// Vérification admin (Menu lien administration)
		if (isset($_SESSION['username'])) {
			$username = $this->user->echapVar($_SESSION['username']);
			$reqAdmin = $this->user->getUser($username);
			if ($reqAdmin['codeSecu'] == 3)
			{
				$access = true;
			}
			else
			{
				$access = false;
			}
		}

		$getCat = $this->get->getCat();

	if (isset($_SESSION['username']))	// Si connecté
	{
		require_once $this->Dir.'index/view_index.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'index/view_index.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}