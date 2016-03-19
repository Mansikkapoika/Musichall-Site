<?php

class controleurAccueil {

	private $get;
	private $user;
	private $Dir;

	public function __construct()
	{
		if(file_exists('model/model.php')) {
			$this->Dir = '/';
			require_once 'model/get.php';
			require_once 'model/user.php';
			require_once 'class/panier.class.php';
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

		$lastProd = $this->get->getDerniersProduits();
		$randomProd = $this->get->getProduitsAleatoire();

		// Fonction de troncage 
		function trunque($str, $nb) {
			if (strlen($str) > $nb) {
				$str = substr($str, 0, $nb);
				$position_espace = strrpos($str, " ");
				$texte = substr($str, 0, $position_espace); 
				$str = $texte."...";
			}
			return $str;
		}

	if (isset($_SESSION['username']))	// Si connecté
	{
		require_once 'index/view_index.php';
		require_once 'gabarit.php';
	}
	else
	{
		require_once 'index/view_index.php';
		require_once 'gabarit.php';
	}

}

}