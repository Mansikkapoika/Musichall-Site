<?php

class controleurChoice {

	private $user;
	private $get;
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

	public function afficheChoice() {
		$titre = 'Music Hall';
		$position = '';

		// Vérification admin
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

		// Utilisation de l'accesseur pour les informations des catégories
		$getCat = $this->get->getCat();

		// Obligé de faire un test, car si aucune action est entrée, la variable GET n'existe pas, une erreur s'affiche sans rediriger l'utilisateur
		if (isset($_GET['cat']))
		{
					// Echappement de la variable GET contre les injections SQL
			$cat = $this->user->echapVar($_GET['cat']);
		}

		if (isset($cat)) {
			$getCatSelect = $this->get->getCatSelect($cat);
			$getCatSelect = $getCatSelect->fetch_array();
			$getSousCat = $this->get->getSousCat($cat);
			$artiveChoix = true;

			if (isset($_GET['souscat']))
			{
				// Echappement de la variable GET contre les injections SQL
				$souscat = $this->user->echapVar($_GET['souscat']);
			}
			
			if (isset($cat) && isset($souscat))
			{
				$artiveChoix = false;
				$activeProduit = true;
				$titreSC = $this->get->getTitreSousCat($souscat)->fetch_array();
				$getMaterielSelect = $this->get->getMaterielSelect($souscat);
				$Material = true;
				$idSousCat = $_GET['souscat'];
			}
			else
			{
				$Material = false;
			}
		}
		else
		{
			header("Location: 2014-musichall/");
		}

	if (isset($_SESSION['username']))      // Si connecté
	{
		require_once $this->Dir.'choice/view_choice.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'choice/view_choice.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}