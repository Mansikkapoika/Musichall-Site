<?php 
require_once("Class/produit.class.php");
require_once("Class/panier.class.php");
$unProd = new Produit("1");
var_dump($unProd);
$_SESSION['Panier'] = new Panier();
$_SESSION['Panier']->ajouterUnProduit($unProd);
var_dump($_SESSION['Panier']);

?>
