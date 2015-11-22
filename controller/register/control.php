<?php

class controleurRegister {

	private $Dir;
	private $user;
	private $get;

	public function __construct()
	{

		if(file_exists(getcwd().'/../../model/model.php')) 
		{
			$this->Dir = '../../';
			require_once getcwd().'/../../model/get.php';
			require_once getcwd().'/../../model/user.php';
			require_once getcwd().'/../../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/../model/model.php')) 
		{
			$this->Dir = '../';
			require_once getcwd().'/../model/get.php';
			require_once getcwd().'/../model/user.php';
			require_once getcwd().'/../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/model/model.php'))
		{
			$this->Dir = '/';
			require_once getcwd().'/model/get.php';
			require_once getcwd().'/model/user.php';
			require_once getcwd().'/class/panier.class.php';
		}

		$this->user = new User();
		$this->get = new Get();

		// Il est obligatoire de faire un session start après l'include de la classe
		session_start();
	}

	public function afficheRegister() {
		$titre = 'Music Hall';
		$position = 'Inscription';

		// Vérification admin
		if (isset($_SESSION['username'])) {
			$username = $this->user->echapVar($_SESSION['username']);
			$reqAdmin = $this->user->getSecu(1, $username);
			$reqAccess = $reqAdmin -> fetch_array();
			if ($reqAccess['codeSecu'] == 3)
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
		require_once $this->Dir.'404/view_alreadyconnect.php';
		require_once $this->Dir.'gabarit.php';
	}
	else
	{
		require_once $this->Dir.'register/view_register.php';
		require_once $this->Dir.'gabarit.php';
	}

}

}