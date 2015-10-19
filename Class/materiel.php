<?php
//Chargement du mod�le contenant les appels � la base de donn�es
require_once ('/../Model/produit.php');

/**
 * Permet de cr�er un produit pour un ajout ult�rieur dans le panier
 */
class Materiel
{
     private $idMateriel;	   // R�f�rence du produit
	   private $libelle;     // Libell� du produit
	   private $prixAchHT;   // Prix du produit
	  //private $photo;  // Photo du produit
    //private $idSousCategorie;  // Lien vers la cat�gorie (sous plutot)

 /**
  * Constructeur d'une fleur
  */  
public function __construct () // Constructeur 
{ }


  /*
 public function __construct ($reference,$libelle,$leprix,$laphoto,$lacategorie) // Constructeur 
  {
     $this->ref = $reference;
	   $this->lib = $libelle;
	   $this->prix = $leprix;
	   $this->photo = $laphoto;
     $this->codeCategorie = $lacategorie;
  }		
*/


  /**
   * Retourne la r�f�rence de la fleur
   * @return type 
   */
  public function getRef()
  {
   return ($this->idMateriel);  
 }
 
  /**
   * Retourne le libell� de la fleur
   * @return type 
   */
  public function getDesignation()
  {
   return ($this->libelle);  
 }
 
  /**
   * Retourne le prix de la fleur
   * @return type 
   */
  public function getPrix()
  {
   return ($this->prixAchHT);  
 }

  /**
   * Retourne le prix du produit
   * @return type 
   */
 /* public function getPhoto()
  {
   return ($this->photo);  
 }*/
 

    /**
   * Retourne le prix du produit
   * @return type 
   */
   /* public function getCategorie()
    {
      return ($this->idSousCategorie);  
    }*/


/**
* Accesseurs magiques
*/
public function __get($property) 
{
 return $this->$property;
}

public function __set($property, $value) 
{
  $this->$property = $value;
}

}



?>