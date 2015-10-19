<?php
//Chargement du modèle contenant les appels à la base de données
require_once ('/../Model/produit.php');

/**
 * Permet de créer un produit pour un ajout ultérieur dans le panier
 */
class Produit
{
  private $idMateriel;	// Référence du produit
	private $libelle;   // Libellé du produit
	private $qte;   // Quantité du produit
	private $prixAchHT;  // Prix du produit
  // private $Prod;

/*  public function __construct()
  {
    if(file_exists(getcwd().'/../../model/model.php')) {
      $this->Dir = getcwd().'/../../';
      require_once getcwd().'/../../model/produit.php';
    }
    if(file_exists(getcwd().'/../model/model.php')) {
      $this->Dir = getcwd().'/../';
      require_once getcwd().'/../model/produit.php';
    }
    if(file_exists(getcwd().'/model/model.php')) {
      $this->Dir = getcwd().'/';
      require_once getcwd().'/model/produit.php';
    }
    $this->Prod = new Prod();
  } */

 /**
  * Constructeur d'un produit, sa référence est passé en paramètre
  * Les autres informations sont obtenues via la base de données
  * @param type $reference 
  */       
 public function Produit ($reference) // Constructeur 
 {
  $unMat = getUnMateriel($reference);
  $this->idMateriel = $reference;
  $this->libelle = $unMat->getDesignation();
  $this->qte = 1;
  $this->prixAchHT = $unMat->getPrix();
}		

  /**
   * Augmente la quantité commandée d'une unité
   * @param type $quantite  Entier
   */
  
  public function augmenterQuantite($quantite)
  {
    $this->qte = $this->qte + $quantite;
  }
  
  /**
   * Diminue la quantité commandée d'une unité
   * @param type $quantite Entier
   */
  public function diminuerQuantite($quantite)
  {
    $this->qte = $this->qte - $quantite;
    if($this->qte < 0)
    {
      $this->qte = 0;
    }
  }
  
  /**
   * Retourne la référence du produit
   * @return type 
   */
  public function getRef()
  {
   return ($this->idMateriel);  
 }

  /**
   * Retourne le libellé du produit
   * @return type 
   */
  public function getLib()
  {
   return ($this->libelle);  
 }

  /**
   * Retourne la quantité commmandée
   * @return type 
   */
  public function getQte()
  {
   return ($this->qte);  
 }

  /**
   * Retourne le prix du produit
   * @return type 
   */
  public function getPrix()
  {
   return ($this->prixAchHT);  
 }


}



?>