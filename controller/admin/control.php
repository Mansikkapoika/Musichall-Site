﻿<?php

class controleurAdmin {

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

	public function afficheAdmin() {
		$titre = 'Full thought';
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