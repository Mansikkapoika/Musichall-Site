<?php

class controleurPanier {

	private $get;
	private $user;
	private $Prod;
	private $Dir;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) 
		{
			$this->Dir = '../../';
			require_once '../../model/get.php';
			require_once '../../model/user.php';
			require_once '../../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/../model/model.php')) 
		{
			$this->Dir = '../';
			require_once '../model/get.php';
			require_once '../model/user.php';
			require_once '../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/model/model.php'))
		{
			$this->Dir = '/';
			require_once 'model/get.php';
			require_once 'model/user.php';
			require_once 'class/panier.class.php';
		}

		$this->user = new User();
		$this->get = new Get();

		// Il est obligatoire de faire un session start après l'include de la classe
		session_start();
	}

	public function affichePanier() {

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

		// Récupération des catégories pour le menu SIDE
		$getCat = $this->get->getCat();

		// PANIER -- S'il n'y a pas de panier, on le créé
		if(!isset($_SESSION['Panier']))
		{
			$_SESSION['Panier'] = new Panier();
		}

		// Vérifications des actions

		if (isset($_GET['ref']))
		{
			switch ($_GET['action']) {
				case 'diminuerProduit':
				$_SESSION['Panier']->diminuerQuantiteProduit($_GET['ref'],1);
				break;

				case 'augmenterProduit':
				$_SESSION['Panier']->augmenterQuantiteProduit($_GET['ref'],1);
				break;

				case 'supprimerProduit':
				$_SESSION['Panier']->supprimerUnProduit($_GET['ref'],1);
				break;
			}
		}

		// Récupération des informations du panier
		$Coll = $_SESSION['Panier']->getProduitsPanier(); 

	if (isset($_SESSION['username']))	// Si connecté
	{
		require_once $this->Dir.'panier/view_panier.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'panier/view_panier.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}