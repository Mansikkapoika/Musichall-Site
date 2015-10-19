<?php

class ControleurPanier {

	private $user;

	public function __construct()
	{
		if(file_exists(getcwd().'/../../model/model.php')) {
			require_once getcwd().'/../../model/user.php';
			require_once getcwd().'/../../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/../model/model.php')) {
			require_once getcwd().'/../model/user.php';
			require_once getcwd().'/../Class/panier.class.php';
		}
		if(file_exists(getcwd().'/model/model.php')) {
			require_once getcwd().'/model/user.php';
			require_once getcwd().'/Class/panier.class.php';
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
   		// On crée un produit et on l'ajoute au panier
		$prod = new Produit($ref);
		$_SESSION['Panier']->ajouterUnProduit($prod);


		echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>  
		alert('Votre produit ".$prod->getRef()." a été ajouté au panier');
		document.location='/Musichall/panier';
	</SCRIPT>";


}
}