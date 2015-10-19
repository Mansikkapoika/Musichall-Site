<?php
require_once "produit.class.php";
require_once "collection.class.php";
/**
 * Classe Panier 
 * Permet de g�rer un panier d'objets Produit
 * N�c�ssite la classe produit.class.php
 */
class Panier
{
  /**
   * Collection de produits
   * @var Collection
   */  
  private $CollProduit;  
  
  /**
   *  Constructeur de la classe 
   *  Initialise la collection de produit
   */

  public function Panier() 
  {
    $this->CollProduit = new Collection;
  }

  /**
   * Retourne le nombre de produit
   * @return Retourne un entier
   */
  public function getNbProd()
  {
    return $this->CollProduit->taille();
  }
  
  /**
   * Augmenter le produit de r�f�rence $ref de la quantit� $qte
   * @param type $ref  Reference du produit
   * @param type $qte  Nombre de produits � ajouter � la quantit�
   */
  
  public function augmenterQuantiteProduit($ref ,$qte)
  {
    if($this->CollProduit->cleExiste($ref))
    {
      $this->CollProduit->getElement($ref)->augmenterQuantite($qte);
    }
  }
  
  /**
   * Diminuer le produit de r�f�rence $ref de la quantit� $qte
   * @param type $ref  Reference du produit
   * @param type $qte  Nombre de produits � retirer � la quantit�
   */
  public function diminuerQuantiteProduit($ref ,$qte)
  {
    if($this->CollProduit->cleExiste($ref))
    {
      $this->CollProduit->getElement($ref)->diminuerQuantite($qte);
      if ($this->CollProduit->getElement($ref)->getQte()==0)
      {
        $this->CollProduit->supprimer($ref);
      }
    }
  }  

  /**
   * Ajoute un produit au panier s'il n'existe pas encore
   * Sinon ajoute une unit� � la quantit� command�e
   * @param type $unProduit Objet Produit � ajouter au panier
   */
  
  public function ajouterUnProduit($unProduit)
  {
    if($this->CollProduit->cleExiste($unProduit->getRef()))
    {
      $this->augmenterQuantiteProduit($unProduit->getRef(),1);
    }
    else
      $this->CollProduit->ajouter($unProduit, $unProduit->getRef());
  }
  
  /**
   * Supprime le produit du panier
   * @param type $refer  R�f�rence du produit
   */
  public function supprimerUnProduit($refer)
  {
    if($this->CollProduit->cleExiste($refer))
    {
      $this->CollProduit->supprimer($refer);
    }
  }
  
  /**
   * Retourne l'ensemble des produits du panier
   * @return tableau
   */
  public function getProduitsPanier()
  {
    return $this->CollProduit->getCollection();
  }
 /**
  * Retirer l'ensemble des produits du panier
  */
 public function videPanier()
 {
   $this->CollProduit->vider();
 }



}



?>