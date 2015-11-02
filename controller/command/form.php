<?php

class ControleurCommand {

	private $user;
	private $mcommand;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) {
			require_once getcwd().'/../../model/user.php';
			require_once getcwd().'/../../model/command.php';
			require_once getcwd().'/../../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			require_once getcwd().'/../model/user.php';
			require_once getcwd().'/../model/command.php';
			require_once getcwd().'/../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			require_once getcwd().'/model/user.php';
			require_once getcwd().'/model/command.php';
			require_once getcwd().'/Class/panier.class.php';
		}

		$this->user = new User();
		$this->mcommand = new mCommand();

		// Il est obligatoire de faire un session start après l'include de la classe
		session_start();
	}

	public function Command() {

		if(isset($_SESSION['username']))
		{

		// PANIER -- S'il n'y a pas de panier, il n'y a pas d'article : REDIRECTION
			if(!isset($_SESSION['Panier']))
			{
				$_SESSION['error'] = "Vous n'avez pas d'articles dans le panier.";
				header('Location:/Musichall/');
			}

		// Récupération des informations du panier
			$Coll = $_SESSION['Panier']->getProduitsPanier();

		// Récupération de l'id de l'utilisateur
			$idUtilisateur = $this->user->getUser($_SESSION['username']);

		// On créer la commande et on récupère l'id de la commande retournée
			$lastid = $this->mcommand->addCommand($idUtilisateur['idUtilisateur']);

		// On ajoute les articles à la commande via l'id retourné
			foreach ($Coll as $key=>$unProd)
			{
				$this->mcommand->insertCommand($unProd->getRef(), $lastid);
				echo "OK<br/>";
			}

		// On vide alors le panier et on redirige
			//$_SESSION['Panier']->videPanier();	// Cette fonction vide le panier, mais le tableau reste et est sans lignes.
			unset($_SESSION['Panier']);

			$_SESSION['error'] = "Commande enregistrée.";
			header('Location:/Musichall/');

		}
		else
		{
			$_SESSION['error'] = "Vous devez être connecté afin de valider une commande.";
			header('Location:/Musichall/');
		}

	}

}