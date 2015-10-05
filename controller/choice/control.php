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

		if (isset($_GET['cat'])) {
			$getCatSelect = $this->get->getCatSelect($_GET['cat']);
			$getCatSelect = $getCatSelect->fetch_array();
			$getSousCat = $this->get->getSousCat($_GET['cat']);
			$artiveChoix = true;
			if (isset($_GET['cat']) && isset($_GET['souscat']))
			{
				$artiveChoix = false;
				$activeProduit = true;
				$getMaterielSelect = $this->get->getMaterielSelect($_GET['souscat']);
				$Material = true;
			}
			else
			{
				$Material = false;
			}
		}
		else
		{
			header("Location: /Musichall/");
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