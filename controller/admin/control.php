<?php

class controleurAdmin {

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

	public function afficheAdmin() {
		$titre = 'Music Hall';
		$position = 'Administration';

		// Vérification admin (Affiche lien administration menu + permission d'accès page)
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
		$jeuenr = $this->get->getCat();

	if (isset($_SESSION['username']))	// Si connecté
	{
		if ($access)	// Si admin
		{
			require_once $this->Dir.'admin/view_admin.php';
			require_once $this->Dir.'gabarit.php';
		}
		else
		{
			require_once $this->Dir.'404/view_accesadmin.php';
			require_once $this->Dir.'gabarit.php';
		}
	}
	else
	{
		require_once $this->Dir.'404/view_nonconnecte.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}