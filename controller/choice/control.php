<?php

class controleurChoice {

	private $Dir;
	private $user;
	private $get;

	public function __construct()
	{

		if(file_exists(getcwd().'/../../model/model.php')) {
			$this->Dir = getcwd().'/../../';
			require_once getcwd().'/../../model/get.php';
			require_once getcwd().'/../../model/user.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			$this->Dir = getcwd().'/../';
			require_once getcwd().'/../model/get.php';
			require_once getcwd().'/../model/user.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			$this->Dir = getcwd().'/';
			require_once getcwd().'/model/get.php';
			require_once getcwd().'/model/user.php';
		}

		$this->user = new User();
		$this->get = new Get();
	}

	public function afficheChoice() {
		$titre = 'Categories';
		$position = '';

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

		$getCat = $this->get->getCat();

		if (isset($_GET['cat']) && is_numeric($_GET['cat'])) {
			$getNomCategorie = $this->get->getCatSelect($_GET['cat']);
			$getNomCategorie = $getNomCategorie->fetch_array();
			$getSousCat = $this->get->getSousCat($_GET['cat']);
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