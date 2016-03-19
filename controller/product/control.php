<?php

class controleurProduct {

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

	public function afficheProduct() {
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

		// Obligé de faire un test, car si aucune action est entrée, la variable GET n'existe pas, une erreur s'affiche sans rediriger l'utilisateur
		if (isset($_GET['souscat']) && isset($_GET['mat']))
		{
			// Echappement de la variable GET contre les injections SQL
			$souscat = $this->user->echapVar($_GET['souscat']);
			$mat = $this->user->echapVar($_GET['mat']);
		}

		$getMat = $this->get->getInfoMateriel($souscat,$mat);
		if (isset($souscat) && isset($mat) && $getMat = $getMat->fetch_assoc())
		{
			// Infos de la page : du produits etc (pris par le curseurs de la variable $getMat directement) + infos produits similaires
			$prodSimilaires = $this->get->getProduitSimilaire($getMat['idSousCategorie']);
		}
		else
		{
			$_SESSION['error'] = "Le produit n'existe pas.";
			header("Location: 2014-musichall/");
		}


	if (isset($_SESSION['username']))      // Si connecté
	{
		require_once $this->Dir.'product/view_product.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'product/view_product.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}