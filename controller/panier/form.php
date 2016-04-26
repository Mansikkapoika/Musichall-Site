<?php

class ControleurPanier {

	private $user;
	private $Dir;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) 
		{
			$this->Dir = '../../';
			require_once '../../model/user.php';
			require_once '../../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/../model/model.php')) 
		{
			$this->Dir = '../';
			require_once '../model/user.php';
			require_once '../class/panier.class.php';
		}
		elseif(file_exists(getcwd().'/model/model.php'))
		{
			$this->Dir = '/';
			require_once 'model/user.php';
			require_once 'class/panier.class.php';
		}

		$this->user = new User();

		// Il est obligatoire de faire un session start après l'include de la classe
		session_start();
	}

	public function Panier($ref,$qte) {

		// **Ajout d'un produit au panier **
		// Si le panier n'existe pas encore, on le crée
		if(!isset($_SESSION['Panier']))
		{
			$_SESSION['Panier'] = new Panier();
		}
		
   		// On crée un produit et on l'ajoute au panier en fonction de la quantité choisie
		$prod = new Produit($ref);

		if ($prod->getStock() == 0 || $prod->getStock() < $qte)
		{
			echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>  
			alert('Votre produit n\'est pas en stock.');
			document.location='../../panier/';
		</SCRIPT>";
	}
	else
	{
		$_SESSION['Panier']->ajouterUnProduit($prod,$qte);
		$_SESSION['error'] = "Votre produit ".$prod->getRef()." a été ajouté au panier";

		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>  
		alert('Votre produit ".$prod->getRef()." a \351t\351 ajout\351 au panier');
		document.location='../../panier/';
	</SCRIPT>";
}


}
}