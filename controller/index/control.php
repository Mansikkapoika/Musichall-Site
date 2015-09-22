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
		}
		$this->get = new Get();
		$this->user = new User();
	}

	public function afficheAccueil() {

		$titre = 'Music Hall';
		$position = 'Accueil';

		// Tableaux catégories

		$tabCat = [];
		$getCat = $this->get->getCat();

		foreach ($getCat as $menus) {
			$tabSousCat = [];
			array_push($tabSousCat, $menus['nomCat']);
			$getSousCat = $this->get->getSousCat($menus['idCategorie']);
			foreach($getSousCat as $test) {
				array_push($tabSousCat,$test['nomSousCat']);
			}
			array_push($tabCat,$tabSousCat);
		}

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