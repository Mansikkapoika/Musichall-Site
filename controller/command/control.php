<?php

class controleurCommand {

	private $user;
	private $get;
	private $mcommand;
	private $Dir;

	public function __construct()
	{

		if(file_exists(getcwd().'/../../model/model.php')) 
		{
			$this->Dir = '../../';
			require_once '../../model/get.php';
			require_once '../../model/user.php';
			require_once '../../model/command.php';
			require_once '../../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/../model/model.php')) 
		{
			$this->Dir = '../';
			require_once '../model/get.php';
			require_once '../model/user.php';
			require_once '../model/command.php';
			require_once '../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/model/model.php'))
		{
			$this->Dir = '/';
			require_once 'model/get.php';
			require_once 'model/user.php';
			require_once 'model/command.php';
			require_once 'class/panier.class.php';
		}

		$this->user = new User();
		$this->get = new Get();
		$this->mcommand = new mCommand();

		// Il est obligatoire de faire un session start après l'include de la classe
		session_start();
	}

	public function afficheCommand() {
		$titre = 'Music Hall';
		$position = 'Commandes';

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

	if (isset($_SESSION['username']))      // Si connecté
	{
		// Récupération de l'id de l'utilisateur
		$idUtilisateur = $this->user->getUser($_SESSION['username']);
		
		// On récupère la liste des commandes
		$tab = $this->mcommand->getCommand($idUtilisateur['idUtilisateur']);	
		$getMat = $tab->fetch_assoc();		

		require_once $this->Dir.'command/view_command.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'404/view_nonconnecte.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}