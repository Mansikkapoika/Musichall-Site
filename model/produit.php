<?php

if(file_exists(getcwd().'/../../model/model.php')) 
{
	require_once getcwd().'/../../model/model.php';
	require_once getcwd().'/../../class/materiel.php';
}
elseif(file_exists(getcwd().'/../model/model.php')) 
{
	require_once getcwd().'/../model/model.php';
	require_once getcwd().'/../class/materiel.php';
}
elseif(file_exists(getcwd().'/model/model.php'))
{
	require_once getcwd().'/model/model.php';
	require_once getcwd().'/class/materiel.php';
}

// Sert de lien à la classe produit

	// Fonction pour récupérer un matériel en fonction de sa ref
function getUnMateriel($ref)
{
	$conn = BDDConnexionPDO();
	$req=$conn->prepare("SELECT * FROM materiel WHERE idMateriel = ? "); 
	$unMateriel = new Materiel();
	$req->setFetchMode(PDO::FETCH_INTO, $unMateriel);
	$req->execute(array( $ref ));
	$req->fetch(PDO::FETCH_INTO);
	$conn = null;
	return $unMateriel;
}
