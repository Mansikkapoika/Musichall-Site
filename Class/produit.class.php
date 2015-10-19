<?php
//Chargement du mod�le contenant les appels � la base de donn�es
require_once ('/../Model/produit.php');

/**
 * Permet de cr�er un produit pour un ajout ult�rieur dans le panier
 */
class Produit
{
  private $idMateriel;	// R�f�rence du produit
	private $libelle;   // Libell� du produit
	private $qte;   // Quantit� du produit
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
  * Constructeur d'un produit, sa r�f�rence est pass� en param�tre
  * Les autres informations sont obtenues via la base de donn�es
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
   * Augmente la quantit� command�e d'une unit�
   * @param type $quantite  Entier
   */
  
  public function augmenterQuantite($quantite)
  {
    $this->qte = $this->qte + $quantite;
  }
  
  /**
   * Diminue la quantit� command�e d'une unit�
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
   * Retourne la r�f�rence du produit
   * @return type 
   */
  public function getRef()
  {
   return ($this->idMateriel);  
 }

  /**
   * Retourne le libell� du produit
   * @return type 
   */
  public function getLib()
  {
   return ($this->libelle);  
 }

  /**
   * Retourne la quantit� commmand�e
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