<?php

class controleurCommand {

	private $Dir;
	private $user;
	private $get;
	private $mcommand;

	public function __construct()
	{

		if(file_exists(getcwd().'/../../model/model.php')) {
			$this->Dir = getcwd().'/../../';
			require_once getcwd().'/../../model/get.php';
			require_once getcwd().'/../../model/user.php';
			require_once getcwd().'/../../model/command.php';
			require_once getcwd().'/../../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			$this->Dir = getcwd().'/../';
			require_once getcwd().'/../model/get.php';
			require_once getcwd().'/../model/user.php';
			require_once getcwd().'/../model/command.php';
			require_once getcwd().'/../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			$this->Dir = getcwd().'/';
			require_once getcwd().'/model/get.php';
			require_once getcwd().'/model/user.php';
			require_once getcwd().'/model/command.php';
			require_once getcwd().'/Class/panier.class.php';
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

		// On récupère la liste des commandes
		$tab = $this->mcommand->getCommand();		

	if (isset($_SESSION['username']))      // Si connecté
	{
		require_once $this->Dir.'command/view_command.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'command/view_command.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}