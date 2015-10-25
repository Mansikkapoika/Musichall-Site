<?php

class controleurProduct {

	private $Dir;
	private $user;
	private $get;

	public function __construct()
	{

		if(file_exists(getcwd().'/../../model/model.php')) {
			$this->Dir = getcwd().'/../../';
			require_once getcwd().'/../../model/get.php';
			require_once getcwd().'/../../model/user.php';
			require_once getcwd().'/../../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			$this->Dir = getcwd().'/../';
			require_once getcwd().'/../model/get.php';
			require_once getcwd().'/../model/user.php';
			require_once getcwd().'/../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			$this->Dir = getcwd().'/';
			require_once getcwd().'/model/get.php';
			require_once getcwd().'/model/user.php';
			require_once getcwd().'/Class/panier.class.php';
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
			// Infos sur le matériel
		}
		else
		{
			$_SESSION['error'] = "Le produit n'existe pas.";
			header("Location: /Musichall/");
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